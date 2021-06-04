<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trade;
use App\Models\Symbol;
use App\Models\Afimage;
use Auth;
use DB;
use Carbon\Carbon;

class SymbolanalyticsController extends Controller
{
    public function __construct(Request $request)
    {
        $startdate = $request->startdate ? $request->startdate : '01/01/1970';
        $enddate = $request->enddate ? $request->enddate : '01/01/2100';
        $this->startdate = Carbon::createFromFormat('m/d/Y', $startdate)->format("Y-m-d H:i:s");
        $this->enddate = Carbon::createFromFormat('m/d/Y', $enddate)->format("Y-m-d H:i:s");
        $datediff = abs(strtotime($this->startdate)-strtotime($this->enddate));
        if($datediff > 60*60*24*30){ $this->range = 'monthly'; }
        else if($datediff > 60*60*24*7 && $datediff <= 60*60*24*30){ $this->range = 'weekly'; }
        else{ $this->range = 'daily'; }
    }

    
    public function index()
    {
        // $symbols = DB::select(DB::raw('SELECT a.*, b.symbol_count, (SELECT symbol FROM symbols WHERE id = a.symbol_id) symbol FROM (SELECT symbol_id, sum(percentage_gl) as percentage_gl_sum, sum(profit_gl) as profit_gl_sum FROM `trades` GROUP BY symbol_id) a LEFT JOIN (SELECT symbol_id, count(*) symbol_count FROM `trades` WHERE profit_gl > 0 GROUP BY symbol_id) b ON a.symbol_id = b.symbol_id ORDER BY profit_gl_sum DESC'));
        $symbols = Trade::where('subuser_id', Auth::user()->current_subuser)->whereNotNull('end_datetime')->groupBy('symbol_id')->selectRaw('sum(percentage_gl) as percentage_gl_sum, sum(profit_gl) as profit_gl_sum, count(*) as symbol_count, symbol_id')->orderBy('percentage_gl_sum','desc')->get();
        return view('users.symbolanalytics.index')->with([
            'symbols' => $symbols
        ]);
    }

    public function symbolmore(Request $request, $symbolid)
    {
        $symbol = Symbol::find($symbolid)->symbol;
        $data['rank'] = collect(Trade::where('subuser_id', Auth::user()->current_subuser)->whereNotNull('end_datetime')->groupBy('symbol_id')->selectRaw('sum(percentage_gl) as sum, symbol_id')->orderBy('sum','desc')->get())->where('symbol_id', $symbolid)->keys()->first() + 1;
        $data['tradesums'] = Trade::where('subuser_id', Auth::user()->current_subuser)->whereBetween('end_datetime', [$this->startdate, $this->enddate])->where('symbol_id', $symbolid)->selectRaw('count(*) as tcount, sum(pips) as pips_sum, sum(percentage_gl) as percentage_gl_sum, sum(duration) as duration_sum')->first();
        $data['tlong'] = Trade::where('subuser_id', Auth::user()->current_subuser)->whereBetween('end_datetime', [$this->startdate, $this->enddate])->where('symbol_id', $symbolid)->where('long_short', 'LONG')->count();
        $data['tshort'] = Trade::where('subuser_id', Auth::user()->current_subuser)->whereBetween('end_datetime', [$this->startdate, $this->enddate])->where('symbol_id', $symbolid)->where('long_short', 'SHORT')->count();
        $data['twin'] = Trade::where('subuser_id', Auth::user()->current_subuser)->whereBetween('end_datetime', [$this->startdate, $this->enddate])->where('symbol_id', $symbolid)->where('profit_gl', '>', 0)->count();
        $data['tloss'] = Trade::where('subuser_id', Auth::user()->current_subuser)->whereBetween('end_datetime', [$this->startdate, $this->enddate])->where('symbol_id', $symbolid)->where('profit_gl', '<', 0)->count();
        $data['tbe'] = Trade::where('subuser_id', Auth::user()->current_subuser)->whereBetween('end_datetime', [$this->startdate, $this->enddate])->where('symbol_id', $symbolid)->where('profit_gl', 0)->count();
        $data['besttrade'] = Trade::where('subuser_id', Auth::user()->current_subuser)->whereBetween('end_datetime', [$this->startdate, $this->enddate])->where('symbol_id', $symbolid)->orderBy('percentage_gl','desc')->first();

        if($this->range == 'monthly'){
            $trades = DB::select(DB::raw('SELECT year_val, month_val, sum(pos_cnt) win, sum(neg_cnt) loss, sum(zero_cnt) be FROM (SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, count(*) pos_cnt, 0 neg_cnt, 0 zero_cnt 
            FROM trades WHERE profit_gl > 0 AND end_datetime IS NOT NULL AND symbol_id = '.$symbolid.' AND subuser_id = '.Auth::user()->current_subuser.' AND end_datetime BETWEEN "'.$this->startdate.'" AND "'.$this->enddate.'" GROUP BY YEAR(end_datetime), MONTH(end_datetime) UNION ALL SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, 0 pos_cnt, count(*) neg_cnt, 0 zero_cnt
            FROM trades WHERE profit_gl < 0 AND end_datetime IS NOT NULL AND symbol_id = '.$symbolid.' AND subuser_id = '.Auth::user()->current_subuser.' AND end_datetime BETWEEN "'.$this->startdate.'" AND "'.$this->enddate.'" GROUP BY YEAR(end_datetime), MONTH(end_datetime) UNION ALL SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, 0 pos_cnt, 0 neg_cnt, count(*) zero_cnt
            FROM trades WHERE profit_gl = 0 AND end_datetime IS NOT NULL AND symbol_id = '.$symbolid.' AND subuser_id = '.Auth::user()->current_subuser.' AND end_datetime BETWEEN "'.$this->startdate.'" AND "'.$this->enddate.'" GROUP BY YEAR(end_datetime), MONTH(end_datetime)) a GROUP BY year_val, month_val'));
            $gainpermonth = DB::select(DB::raw('SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, sum(percentage_gl) tpgain, sum(profit_gl) trgain FROM trades WHERE end_datetime is not null AND symbol_id = '.$symbolid.' AND subuser_id = '.Auth::user()->current_subuser.' AND end_datetime BETWEEN "'.$this->startdate.'" AND  "'.$this->enddate.'" GROUP BY YEAR(end_datetime), MONTH(end_datetime)'));
        }
        else if($this->range == 'weekly'){
            $trades = DB::select(DB::raw('SELECT year_val, month_val, week_val, sum(pos_cnt) win, sum(neg_cnt) loss, sum(zero_cnt) be FROM ( SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, WEEK(end_datetime) week_val, count(*) pos_cnt, 0 neg_cnt, 0 zero_cnt 
            FROM trades WHERE profit_gl > 0 AND end_datetime IS NOT NULL AND symbol_id = '.$symbolid.' AND subuser_id = '.Auth::user()->current_subuser.' AND end_datetime BETWEEN "'.$this->startdate.'" AND "'.$this->enddate.'" GROUP BY YEAR(end_datetime), MONTH(end_datetime), WEEK(end_datetime) UNION ALL SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, WEEK(end_datetime) week_val, 0 pos_cnt, count(*) neg_cnt, 0 zero_cnt 
            FROM trades WHERE profit_gl < 0 AND end_datetime IS NOT NULL AND symbol_id = '.$symbolid.' AND subuser_id = '.Auth::user()->current_subuser.' AND end_datetime BETWEEN "'.$this->startdate.'" AND "'.$this->enddate.'" GROUP BY YEAR(end_datetime), MONTH(end_datetime), WEEK(end_datetime) UNION ALL SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, WEEK(end_datetime) week_val, 0 pos_cnt, 0 neg_cnt, count(*) zero_cnt 
            FROM trades WHERE profit_gl = 0 AND end_datetime IS NOT NULL AND symbol_id = '.$symbolid.' AND subuser_id = '.Auth::user()->current_subuser.' AND end_datetime BETWEEN "'.$this->startdate.'" AND "'.$this->enddate.'" GROUP BY YEAR(end_datetime), MONTH(end_datetime), WEEK(end_datetime) ) a GROUP BY year_val, month_val, week_val'));
            $gainpermonth = DB::select(DB::raw('SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, WEEK(end_datetime) week_val, sum(percentage_gl) tpgain, sum(profit_gl) trgain FROM trades WHERE end_datetime is not null AND symbol_id = '.$symbolid.' AND subuser_id = '.Auth::user()->current_subuser.' AND end_datetime BETWEEN "'.$this->startdate.'" AND  "'.$this->enddate.'" GROUP BY YEAR(end_datetime), MONTH(end_datetime), WEEK(end_datetime)'));
        }
        else{
            $trades = DB::select(DB::raw('SELECT year_val, month_val, day_val, sum(pos_cnt) win, sum(neg_cnt) loss, sum(zero_cnt) be FROM ( SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, DAY(end_datetime) day_val, count(*) pos_cnt, 0 neg_cnt, 0 zero_cnt 
            FROM trades WHERE profit_gl > 0 AND end_datetime IS NOT NULL AND symbol_id = '.$symbolid.' AND subuser_id = '.Auth::user()->current_subuser.' AND end_datetime BETWEEN "'.$this->startdate.'" AND "'.$this->enddate.'" GROUP BY YEAR(end_datetime), MONTH(end_datetime), DAY(end_datetime) UNION ALL SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, DAY(end_datetime) day_val, 0 pos_cnt, count(*) neg_cnt, 0 zero_cnt 
            FROM trades WHERE profit_gl < 0 AND end_datetime IS NOT NULL AND symbol_id = '.$symbolid.' AND subuser_id = '.Auth::user()->current_subuser.' AND end_datetime BETWEEN "'.$this->startdate.'" AND "'.$this->enddate.'" GROUP BY YEAR(end_datetime), MONTH(end_datetime), DAY(end_datetime) UNION ALL SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, DAY(end_datetime) day_val, 0 pos_cnt, 0 neg_cnt, count(*) zero_cnt 
            FROM trades WHERE profit_gl = 0 AND end_datetime IS NOT NULL AND symbol_id = '.$symbolid.' AND subuser_id = '.Auth::user()->current_subuser.' AND end_datetime BETWEEN "'.$this->startdate.'" AND "'.$this->enddate.'" GROUP BY YEAR(end_datetime), MONTH(end_datetime), DAY(end_datetime) ) a GROUP BY year_val, month_val, day_val'));
            $gainpermonth = DB::select(DB::raw('SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, DAY(end_datetime) day_val, sum(percentage_gl) tpgain, sum(profit_gl) trgain FROM trades WHERE end_datetime is not null AND symbol_id = '.$symbolid.' AND subuser_id = '.Auth::user()->current_subuser.' AND end_datetime BETWEEN "'.$this->startdate.'" AND  "'.$this->enddate.'" GROUP BY YEAR(end_datetime), MONTH(end_datetime), DAY(end_datetime)'));
        }
        // $trades = DB::select(DB::raw('SELECT year_val, month_val, sum(pos_cnt) win, sum(neg_cnt) loss, sum(zero_cnt) be FROM (SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, count(*) pos_cnt, 0 neg_cnt, 0 zero_cnt FROM trades WHERE profit_gl > 0 AND symbol_id = '.$symbolid.' AND subuser_id = '.Auth::user()->current_subuser.' GROUP BY YEAR(end_datetime), MONTH(end_datetime) UNION ALL SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, 0 pos_cnt, count(*) neg_cnt, 0 zero_cnt FROM trades WHERE profit_gl < 0 AND symbol_id = '.$symbolid.' AND subuser_id = '.Auth::user()->current_subuser.' GROUP BY YEAR(end_datetime), MONTH(end_datetime) UNION ALL SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, 0 pos_cnt, 0 neg_cnt, count(*) zero_cnt FROM trades WHERE profit_gl = 0 AND symbol_id = '.$symbolid.' AND subuser_id = '.Auth::user()->current_subuser.' GROUP BY YEAR(end_datetime), MONTH(end_datetime)) a GROUP BY year_val, month_val'));
        // $gainpermonth = DB::select(DB::raw('SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, sum(percentage_gl) tgain FROM trades WHERE end_datetime is not null AND symbol_id = '.$symbolid.' AND subuser_id = '.Auth::user()->current_subuser.' GROUP BY YEAR(end_datetime), MONTH(end_datetime)'));
        if($data['tradesums']->tcount){
            $data['afterimage'] = Afimage::where('trade_id', $data['besttrade']->id)->first();
        }

        if($this->range == 'monthly'){
            for($i=0; $i<count($trades); $i++)
            {
                $data['wins'][$i] = $trades[$i]->win;
                $data['losses'][$i] = $trades[$i]->loss;
                $data['bes'][$i] = $trades[$i]->be;
                $data['gain'][$i] = number_format($gainpermonth[$i]->tpgain, 2, '.', '');
                $data['month'][$i] = date_format(date_create($trades[$i]->year_val.'-'.$trades[$i]->month_val), 'M Y');
            }
        }
        else if($this->range == 'weekly'){

            for($i=0; $i<count($trades); $i++)
            {
                $data['wins'][$i] = $trades[$i]->win;
                $data['losses'][$i] = $trades[$i]->loss;
                $data['bes'][$i] = $trades[$i]->be;
                $data['gain'][$i] = number_format($gainpermonth[$i]->tpgain, 2, '.', '');
                if($trades[$i]->week_val < 10){
                    $weekdate = $trades[$i]->year_val.'W0'.$trades[$i]->week_val;
                }else{
                    $weekdate = $trades[$i]->year_val.'W'.$trades[$i]->week_val;
                }
                $data['month'][$i] = date('o W',strtotime($weekdate))." week";
            }
        }
        else{
            for($i=0; $i<count($trades); $i++)
            {
                $data['wins'][$i] = $trades[$i]->win;
                $data['losses'][$i] = $trades[$i]->loss;
                $data['bes'][$i] = $trades[$i]->be;
                $data['gain'][$i] = number_format($gainpermonth[$i]->tpgain, 2, '.', '');
                $data['month'][$i] = date_format(date_create($trades[$i]->year_val.'-'.$trades[$i]->month_val.'_'.$trades[$i]->day_val), 'M Y');
            }
        }

        if($request->startdate){
            $daterange = $request->startdate.'-'.$request->enddate;
        } else {
            $daterange = 'ALL';
        }

        return view('users.symbolanalytics.moredata')->with([
            'symbol' => $symbol,
            'data' => $data,
            'daterange' => $daterange
        ]);
    }

}
