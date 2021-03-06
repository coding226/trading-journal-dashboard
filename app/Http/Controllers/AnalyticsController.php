<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Subuser;
use App\Models\Trade;
use App\Models\Afimage;
use Carbon\Carbon;
use Auth;
use DB;
use DateTime;
use Carbon\CarbonPeriod;

class AnalyticsController extends Controller
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

    //all analytics
    public function index(Request $request)
    {   
        $all_count =  Trade::where('subuser_id', Auth::user()->current_subuser)->whereBetween('start_datetime', [$this->startdate, $this->enddate])->count();
        $active_count = Trade::where('subuser_id', Auth::user()->current_subuser)->whereBetween('start_datetime', [$this->startdate, $this->enddate])->whereNull('end_datetime')->count();
        $win_count = Trade::where('subuser_id', Auth::user()->current_subuser)->whereBetween('end_datetime', [$this->startdate, $this->enddate])->where('profit_gl', '>', 0)->count();
        $loss_count = Trade::where('subuser_id', Auth::user()->current_subuser)->whereBetween('end_datetime', [$this->startdate, $this->enddate])->where('profit_gl', '<', 0)->count();
        $break_count = Trade::where('subuser_id', Auth::user()->current_subuser)->whereBetween('end_datetime', [$this->startdate, $this->enddate])->where('profit_gl', '0')->count();
        $winshort_count = Trade::where('subuser_id', Auth::user()->current_subuser)->whereBetween('end_datetime', [$this->startdate, $this->enddate])->where('long_short', 'SHORT')->where('profit_gl', '>', 0)->count();
        $winlong_count = Trade::where('subuser_id', Auth::user()->current_subuser)->whereBetween('end_datetime', [$this->startdate, $this->enddate])->where('long_short', 'LONG')->where('profit_gl', '>', 0)->count();
        $lossess_count = Trade::where('subuser_id', Auth::user()->current_subuser)->whereBetween('end_datetime', [$this->startdate, $this->enddate])->where('profit_gl', '<', 0)->count();
        $tradesums = Trade::where('subuser_id', Auth::user()->current_subuser)->whereBetween('end_datetime', [$this->startdate, $this->enddate])->selectRaw('sum(profit_gl) as profit_gl_sum, sum(pips) as pips_sum, sum(fees) as fees_sum, sum(percentage_gl) as percentage_gl_sum, sum(duration) as duration_sum')->get();
        $besttrade = Trade::where('subuser_id', Auth::user()->current_subuser)->whereBetween('end_datetime', [$this->startdate, $this->enddate])->orderBy('percentage_gl','desc')->first();
        
        if($this->range == 'monthly'){
            $trades = DB::select(DB::raw('SELECT year_val, month_val, sum(pos_cnt) win, sum(neg_cnt) loss, sum(zero_cnt) be FROM (SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, count(*) pos_cnt, 0 neg_cnt, 0 zero_cnt 
            FROM trades WHERE profit_gl > 0 AND end_datetime IS NOT NULL AND subuser_id = '.Auth::user()->current_subuser.' AND end_datetime BETWEEN "'.$this->startdate.'" AND "'.$this->enddate.'" GROUP BY YEAR(end_datetime), MONTH(end_datetime) UNION ALL SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, 0 pos_cnt, count(*) neg_cnt, 0 zero_cnt
            FROM trades WHERE profit_gl < 0 AND end_datetime IS NOT NULL AND subuser_id = '.Auth::user()->current_subuser.' AND end_datetime BETWEEN "'.$this->startdate.'" AND "'.$this->enddate.'" GROUP BY YEAR(end_datetime), MONTH(end_datetime) UNION ALL SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, 0 pos_cnt, 0 neg_cnt, count(*) zero_cnt
            FROM trades WHERE profit_gl = 0 AND end_datetime IS NOT NULL AND subuser_id = '.Auth::user()->current_subuser.' AND end_datetime BETWEEN "'.$this->startdate.'" AND "'.$this->enddate.'" GROUP BY YEAR(end_datetime), MONTH(end_datetime)) a GROUP BY year_val, month_val'));
            $gainpermonth = DB::select(DB::raw('SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, sum(percentage_gl) tpgain, sum(profit_gl) trgain FROM trades WHERE end_datetime is not null AND subuser_id = '.Auth::user()->current_subuser.' AND end_datetime BETWEEN "'.$this->startdate.'" AND  "'.$this->enddate.'" GROUP BY YEAR(end_datetime), MONTH(end_datetime)'));
        }
        else if($this->range == 'weekly'){
            $trades = DB::select(DB::raw('SELECT year_val, month_val, week_val, sum(pos_cnt) win, sum(neg_cnt) loss, sum(zero_cnt) be FROM ( SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, WEEK(end_datetime) week_val, count(*) pos_cnt, 0 neg_cnt, 0 zero_cnt 
            FROM trades WHERE profit_gl > 0 AND end_datetime IS NOT NULL AND subuser_id = '.Auth::user()->current_subuser.' AND end_datetime BETWEEN "'.$this->startdate.'" AND "'.$this->enddate.'" GROUP BY YEAR(end_datetime), MONTH(end_datetime), WEEK(end_datetime) UNION ALL SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, WEEK(end_datetime) week_val, 0 pos_cnt, count(*) neg_cnt, 0 zero_cnt 
            FROM trades WHERE profit_gl < 0 AND end_datetime IS NOT NULL AND subuser_id = '.Auth::user()->current_subuser.' AND end_datetime BETWEEN "'.$this->startdate.'" AND "'.$this->enddate.'" GROUP BY YEAR(end_datetime), MONTH(end_datetime), WEEK(end_datetime) UNION ALL SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, WEEK(end_datetime) week_val, 0 pos_cnt, 0 neg_cnt, count(*) zero_cnt 
            FROM trades WHERE profit_gl = 0 AND end_datetime IS NOT NULL AND subuser_id = '.Auth::user()->current_subuser.' AND end_datetime BETWEEN "'.$this->startdate.'" AND "'.$this->enddate.'" GROUP BY YEAR(end_datetime), MONTH(end_datetime), WEEK(end_datetime) ) a GROUP BY year_val, month_val, week_val'));
            $gainpermonth = DB::select(DB::raw('SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, WEEK(end_datetime) week_val, sum(percentage_gl) tpgain, sum(profit_gl) trgain FROM trades WHERE end_datetime is not null AND subuser_id = '.Auth::user()->current_subuser.' AND end_datetime BETWEEN "'.$this->startdate.'" AND  "'.$this->enddate.'" GROUP BY YEAR(end_datetime), MONTH(end_datetime), WEEK(end_datetime)'));
        }
        else{
            $trades = DB::select(DB::raw('SELECT year_val, month_val, day_val, sum(pos_cnt) win, sum(neg_cnt) loss, sum(zero_cnt) be FROM ( SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, DAY(end_datetime) day_val, count(*) pos_cnt, 0 neg_cnt, 0 zero_cnt 
            FROM trades WHERE profit_gl > 0 AND end_datetime IS NOT NULL AND subuser_id = '.Auth::user()->current_subuser.' AND end_datetime BETWEEN "'.$this->startdate.'" AND "'.$this->enddate.'" GROUP BY YEAR(end_datetime), MONTH(end_datetime), DAY(end_datetime) UNION ALL SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, DAY(end_datetime) day_val, 0 pos_cnt, count(*) neg_cnt, 0 zero_cnt 
            FROM trades WHERE profit_gl < 0 AND end_datetime IS NOT NULL AND subuser_id = '.Auth::user()->current_subuser.' AND end_datetime BETWEEN "'.$this->startdate.'" AND "'.$this->enddate.'" GROUP BY YEAR(end_datetime), MONTH(end_datetime), DAY(end_datetime) UNION ALL SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, DAY(end_datetime) day_val, 0 pos_cnt, 0 neg_cnt, count(*) zero_cnt 
            FROM trades WHERE profit_gl = 0 AND end_datetime IS NOT NULL AND subuser_id = '.Auth::user()->current_subuser.' AND end_datetime BETWEEN "'.$this->startdate.'" AND "'.$this->enddate.'" GROUP BY YEAR(end_datetime), MONTH(end_datetime), DAY(end_datetime) ) a GROUP BY year_val, month_val, day_val'));
            $gainpermonth = DB::select(DB::raw('SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, DAY(end_datetime) day_val, sum(percentage_gl) tpgain, sum(profit_gl) trgain FROM trades WHERE end_datetime is not null AND subuser_id = '.Auth::user()->current_subuser.' AND end_datetime BETWEEN "'.$this->startdate.'" AND  "'.$this->enddate.'" GROUP BY YEAR(end_datetime), MONTH(end_datetime), DAY(end_datetime)'));
        }
        
        $equities = DB::select(DB::raw('SELECT id, percentage_gl, end_datetime, (SELECT SUM(profit_gl) FROM `trades` WHERE end_datetime <= a.end_datetime and (end_datetime Between "'.$this->startdate.'" and "'.$this->enddate.'") and end_datetime IS NOT NULL and subuser_id = '.Auth::user()->current_subuser.') presum FROM trades a where (end_datetime Between "'.$this->startdate.'" and "'.$this->enddate.'") and end_datetime IS NOT NULL and subuser_id = '.Auth::user()->current_subuser.' ORDER BY end_datetime'));
        $winrates = DB::select(DB::raw('SELECT id, percentage_gl, end_datetime, (SELECT count(*) FROM `trades` WHERE end_datetime <= a.end_datetime and (end_datetime Between "'.$this->startdate.'" and "'.$this->enddate.'") and end_datetime IS NOT NULL and subuser_id = '.Auth::user()->current_subuser.' and profit_gl > 0) cnt FROM trades a where (end_datetime Between "'.$this->startdate.'" and "'.$this->enddate.'") and end_datetime IS NOT NULL and subuser_id = '.Auth::user()->current_subuser.' ORDER BY end_datetime'));

        if($all_count){
            $afterimage = Afimage::where('trade_id', $besttrade->id)->first();
            $startday = Trade::where('subuser_id', Auth::user()->current_subuser)->whereBetween('end_datetime', [$this->startdate, $this->enddate])->orderBy('start_datetime')->first()->start_datetime;
            $endday = Trade::where('subuser_id', Auth::user()->current_subuser)->whereBetween('end_datetime', [$this->startdate, $this->enddate])->orderBy('end_datetime', 'desc')->first()->end_datetime;
            $totalSecondsDiff = abs(strtotime($startday)-strtotime($endday));
            $totalDaysDiff    = ceil($totalSecondsDiff/60/60/24);
            $totalWeeksDiff    = ceil($totalSecondsDiff/60/60/24/7);
            $totalMonthsDiff  = ceil($totalSecondsDiff/60/60/24/30);
            $data['afterimage']  = $afterimage;
        }

        // dd($this->range);

        if($this->range == 'monthly'){
            for($i=0; $i<count($trades); $i++)
            {
                $data['wins'][$i] = $trades[$i]->win;
                $data['losses'][$i] = $trades[$i]->loss;
                $data['bes'][$i] = $trades[$i]->be;
                $data['pgain'][$i] = number_format($gainpermonth[$i]->tpgain, 2, '.', '');
                $data['month'][$i] = date_format(date_create($trades[$i]->year_val.'-'.$trades[$i]->month_val), 'M Y');
            }
        }
        else if($this->range == 'weekly'){

            for($i=0; $i<count($trades); $i++)
            {
                $data['wins'][$i] = $trades[$i]->win;
                $data['losses'][$i] = $trades[$i]->loss;
                $data['bes'][$i] = $trades[$i]->be;
                $data['pgain'][$i] = number_format($gainpermonth[$i]->tpgain, 2, '.', '');
                if($trades[$i]->week_val < 10){
                    $weekdate = $trades[$i]->year_val.'W0'.$trades[$i]->week_val;
                }else{
                    $weekdate = $trades[$i]->year_val.'W'.$trades[$i]->week_val;
                }
                $data['month'][$i] = str_replace(" ", ' Week No.', date('Y W',strtotime($weekdate)));
            }
        }
        else{
            for($i=0; $i<count($trades); $i++)
            {
                $data['wins'][$i] = $trades[$i]->win;
                $data['losses'][$i] = $trades[$i]->loss;
                $data['bes'][$i] = $trades[$i]->be;
                $data['pgain'][$i] = number_format($gainpermonth[$i]->tpgain, 2, '.', '');
                $data['month'][$i] = date_format(date_create($trades[$i]->year_val.'-'.$trades[$i]->month_val.'_'.$trades[$i]->day_val), 'M Y');
            }
        }
        

        if(count($equities) > 0){
            if($this->range == 'montly'){
                $data['equityy'][0] = Carbon::createFromFormat('Y-m-d H:i:s', $equities[0]->end_datetime)->subDay()->format("Y-m-d H:i:s");
                $data['equityx'][0] = '0';
            }
            else{
                $lasttrade = Trade::where('subuser_id', Auth::user()->current_subuser)->where('end_datetime','<', $this->startdate)->orderBy('end_datetime', 'desc')->first();
                $data['equityy'][0] = $lasttrade ? $lasttrade->end_datetime : Carbon::createFromFormat('Y-m-d H:i:s', $equities[0]->end_datetime)->subDay()->format("Y-m-d H:i:s");
                $data['equityx'][0] = $lasttrade ? Trade::where('subuser_id', Auth::user()->current_subuser)->where('end_datetime','<', $this->startdate)->sum('profit_gl') : '0';
            }
            
            for($i=1; $i<=count($equities); $i++)
            {
                $data['equityy'][$i] = str_replace(' ', 'T', $equities[$i-1]->end_datetime);
                $data['equityx'][$i] = number_format($equities[$i-1]->presum + $data['equityx'][0], 2, '.', '');
                $data['winrate'][$i-1] = number_format(($winrates[$i-1]->cnt/$i)*100, 2, '.', '');
                $data['winratex'][$i-1] = $i;
            }
        }
        
        $data['all_count'] = $all_count;
        $data['active_count'] = $active_count;
        $data['win_count'] = $win_count;
        $data['loss_count'] = $loss_count;
        $data['break_count'] = $break_count;
        $data['winshort_count'] = $winshort_count;
        $data['winlong_count'] = $winlong_count;
        $data['tradesums'] = $tradesums;
        $data['lossess_count'] = $lossess_count;

        if($all_count){
            $data['ave_percentage_gain'] = number_format($tradesums[0]['percentage_gl_sum']/$all_count, 2, '.', '');
            $data['ave_daily'] = number_format($tradesums[0]['percentage_gl_sum']/$totalDaysDiff, 2, '.', '');
            $data['ave_weekly'] = number_format($tradesums[0]['percentage_gl_sum']/$totalMonthsDiff, 2, '.', '');
            $data['ave_monthly'] = number_format($tradesums[0]['percentage_gl_sum']/$totalMonthsDiff, 2, '.', '');
            $data['ave_duration'] = number_format($tradesums[0]['duration_sum']/($all_count-$active_count), 2, '.', '');
        }

        if($request->startdate){
            $daterange = $request->startdate.'-'.$request->enddate;
        } else {
            $daterange = 'ALL';
        }

        return view('users.analytics.index')->with([
            'data' => $data,
            'besttrade' => $besttrade,
            'daterange' => $daterange
        ]);
    }
    
    // long analytics
    public function long_index(Request $request)
    {
        $long_tcount = Trade::where('subuser_id', Auth::user()->current_subuser)->whereBetween('start_datetime', [$this->startdate, $this->enddate])->where('long_short', 'LONG')->count();
        $winlong_tcount = Trade::where('subuser_id', Auth::user()->current_subuser)->whereBetween('end_datetime', [$this->startdate, $this->enddate])->where('long_short', 'LONG')->where('profit_gl','>', 0)->count();
        $losslong_tcount = Trade::where('subuser_id', Auth::user()->current_subuser)->whereBetween('end_datetime', [$this->startdate, $this->enddate])->where('long_short', 'LONG')->where('profit_gl','<', 0)->count();
        $belong_tcount = Trade::where('subuser_id', Auth::user()->current_subuser)->whereBetween('end_datetime', [$this->startdate, $this->enddate])->where('long_short', 'LONG')->where('profit_gl', 0)->count();
        $longtradesums = Trade::where('subuser_id', Auth::user()->current_subuser)->whereBetween('end_datetime', [$this->startdate, $this->enddate])->where('long_short', 'LONG')->selectRaw('sum(pips) as pips_sum, sum(percentage_gl) as percentage_gl_sum, sum(duration) as duration_sum')->first();
        $bestlongtrade = Trade::where('subuser_id', Auth::user()->current_subuser)->whereBetween('end_datetime', [$this->startdate, $this->enddate])->where('long_short', 'LONG')->orderBy('percentage_gl','desc')->first();
        if($this->range == 'monthly'){
            $trades = DB::select(DB::raw('SELECT year_val, month_val, sum(pos_cnt) win, sum(neg_cnt) loss, sum(zero_cnt) be FROM (SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, count(*) pos_cnt, 0 neg_cnt, 0 zero_cnt 
            FROM trades WHERE profit_gl > 0 AND end_datetime IS NOT NULL AND long_short = "LONG" AND subuser_id = '.Auth::user()->current_subuser.' AND end_datetime BETWEEN "'.$this->startdate.'" AND "'.$this->enddate.'" GROUP BY YEAR(end_datetime), MONTH(end_datetime) UNION ALL SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, 0 pos_cnt, count(*) neg_cnt, 0 zero_cnt
            FROM trades WHERE profit_gl < 0 AND end_datetime IS NOT NULL AND long_short = "LONG" AND subuser_id = '.Auth::user()->current_subuser.' AND end_datetime BETWEEN "'.$this->startdate.'" AND "'.$this->enddate.'" GROUP BY YEAR(end_datetime), MONTH(end_datetime) UNION ALL SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, 0 pos_cnt, 0 neg_cnt, count(*) zero_cnt
            FROM trades WHERE profit_gl = 0 AND end_datetime IS NOT NULL AND long_short = "LONG" AND subuser_id = '.Auth::user()->current_subuser.' AND end_datetime BETWEEN "'.$this->startdate.'" AND "'.$this->enddate.'" GROUP BY YEAR(end_datetime), MONTH(end_datetime)) a GROUP BY year_val, month_val'));
            $gainpermonth = DB::select(DB::raw('SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, sum(percentage_gl) tpgain, sum(profit_gl) trgain FROM trades WHERE end_datetime is not null AND long_short = "LONG" AND subuser_id = '.Auth::user()->current_subuser.' AND end_datetime BETWEEN "'.$this->startdate.'" AND  "'.$this->enddate.'" GROUP BY YEAR(end_datetime), MONTH(end_datetime)'));
        }
        else if($this->range == 'weekly'){
            $trades = DB::select(DB::raw('SELECT year_val, month_val, week_val, sum(pos_cnt) win, sum(neg_cnt) loss, sum(zero_cnt) be FROM ( SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, WEEK(end_datetime) week_val, count(*) pos_cnt, 0 neg_cnt, 0 zero_cnt 
            FROM trades WHERE profit_gl > 0 AND end_datetime IS NOT NULL AND long_short = "LONG" AND subuser_id = '.Auth::user()->current_subuser.' AND end_datetime BETWEEN "'.$this->startdate.'" AND "'.$this->enddate.'" GROUP BY YEAR(end_datetime), MONTH(end_datetime), WEEK(end_datetime) UNION ALL SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, WEEK(end_datetime) week_val, 0 pos_cnt, count(*) neg_cnt, 0 zero_cnt 
            FROM trades WHERE profit_gl < 0 AND end_datetime IS NOT NULL AND long_short = "LONG" AND subuser_id = '.Auth::user()->current_subuser.' AND end_datetime BETWEEN "'.$this->startdate.'" AND "'.$this->enddate.'" GROUP BY YEAR(end_datetime), MONTH(end_datetime), WEEK(end_datetime) UNION ALL SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, WEEK(end_datetime) week_val, 0 pos_cnt, 0 neg_cnt, count(*) zero_cnt 
            FROM trades WHERE profit_gl = 0 AND end_datetime IS NOT NULL AND long_short = "LONG" AND subuser_id = '.Auth::user()->current_subuser.' AND end_datetime BETWEEN "'.$this->startdate.'" AND "'.$this->enddate.'" GROUP BY YEAR(end_datetime), MONTH(end_datetime), WEEK(end_datetime) ) a GROUP BY year_val, month_val, week_val'));
            $gainpermonth = DB::select(DB::raw('SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, WEEK(end_datetime) week_val, sum(percentage_gl) tpgain, sum(profit_gl) trgain FROM trades WHERE end_datetime is not null AND long_short = "LONG" AND subuser_id = '.Auth::user()->current_subuser.' AND end_datetime BETWEEN "'.$this->startdate.'" AND  "'.$this->enddate.'" GROUP BY YEAR(end_datetime), MONTH(end_datetime), WEEK(end_datetime)'));
        }
        else{
            $trades = DB::select(DB::raw('SELECT year_val, month_val, day_val, sum(pos_cnt) win, sum(neg_cnt) loss, sum(zero_cnt) be FROM ( SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, DAY(end_datetime) day_val, count(*) pos_cnt, 0 neg_cnt, 0 zero_cnt 
            FROM trades WHERE profit_gl > 0 AND end_datetime IS NOT NULL AND long_short = "LONG" AND subuser_id = '.Auth::user()->current_subuser.' AND end_datetime BETWEEN "'.$this->startdate.'" AND "'.$this->enddate.'" GROUP BY YEAR(end_datetime), MONTH(end_datetime), DAY(end_datetime) UNION ALL SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, DAY(end_datetime) day_val, 0 pos_cnt, count(*) neg_cnt, 0 zero_cnt 
            FROM trades WHERE profit_gl < 0 AND end_datetime IS NOT NULL AND long_short = "LONG" AND subuser_id = '.Auth::user()->current_subuser.' AND end_datetime BETWEEN "'.$this->startdate.'" AND "'.$this->enddate.'" GROUP BY YEAR(end_datetime), MONTH(end_datetime), DAY(end_datetime) UNION ALL SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, DAY(end_datetime) day_val, 0 pos_cnt, 0 neg_cnt, count(*) zero_cnt 
            FROM trades WHERE profit_gl = 0 AND end_datetime IS NOT NULL AND long_short = "LONG" AND subuser_id = '.Auth::user()->current_subuser.' AND end_datetime BETWEEN "'.$this->startdate.'" AND "'.$this->enddate.'" GROUP BY YEAR(end_datetime), MONTH(end_datetime), DAY(end_datetime) ) a GROUP BY year_val, month_val, day_val'));
            $gainpermonth = DB::select(DB::raw('SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, DAY(end_datetime) day_val, sum(percentage_gl) tpgain, sum(profit_gl) trgain FROM trades WHERE end_datetime is not null AND long_short = "LONG" AND subuser_id = '.Auth::user()->current_subuser.' AND end_datetime BETWEEN "'.$this->startdate.'" AND  "'.$this->enddate.'" GROUP BY YEAR(end_datetime), MONTH(end_datetime), DAY(end_datetime)'));
        }
        $longsymbol_nums = Trade::where('subuser_id', Auth::user()->current_subuser)->whereBetween('end_datetime', [$this->startdate, $this->enddate])->whereNotNull('end_datetime')->where('long_short', 'LONG')->select('symbol_id', DB::raw('count(*) as total'))->groupBy('symbol_id')->get();
        $longsymbol_percents = Trade::where('subuser_id', Auth::user()->current_subuser)->whereBetween('end_datetime', [$this->startdate, $this->enddate])->whereNotNull('end_datetime')->where('long_short', 'LONG')->groupBy('symbol_id')->selectRaw('sum(percentage_gl) as sum, symbol_id')->get();

        if($long_tcount){
            $afterimage = Afimage::where('trade_id', $bestlongtrade->id)->first();
            $startday = Trade::where('subuser_id', Auth::user()->current_subuser)->whereBetween('end_datetime', [$this->startdate, $this->enddate])->orderBy('start_datetime')->first()->start_datetime;
            $endday = Trade::where('subuser_id', Auth::user()->current_subuser)->whereBetween('end_datetime', [$this->startdate, $this->enddate])->orderBy('end_datetime', 'desc')->first()->end_datetime;
            $totalSecondsDiff = abs(strtotime($startday)-strtotime($endday));
            $totalDaysDiff    = ceil($totalSecondsDiff/60/60/24);
            $totalMonthsDiff  = ceil($totalSecondsDiff/60/60/24/30);

            $data['afterimage'] = $afterimage;
            $data['long_ave_per_month'] = number_format($long_tcount/$totalMonthsDiff,2, '.', '');
            $data['bestlongtrade'] = $bestlongtrade;
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
                $data['month'][$i] = str_replace(" ", ' Week No.', date('Y W',strtotime($weekdate)));
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
        
        for($i=0; $i<count($longsymbol_nums); $i++)
        {
            $data['symbols'][$i] = $longsymbol_nums[$i]->symbol->symbol;
            $data['trades'][$i] = $longsymbol_nums[$i]->total;
            $data['sumsymbols'][$i] = $longsymbol_percents[$i]->symbol->symbol;
            $data['sum'][$i] = number_format($longsymbol_percents[$i]->sum, 2, '.', '');
        }

        $data['long_tcount'] = $long_tcount;
        $data['winlong_tcount'] = $winlong_tcount;
        $data['losslong_tcount'] = $losslong_tcount;
        $data['belong_tcount'] = $belong_tcount;
        $data['longtradesums'] = $longtradesums;

        if($request->startdate){
            $daterange = $request->startdate.'-'.$request->enddate;
        } else {
            $daterange = 'ALL';
        }

        return view('users.analytics.long')->with([
            'data' => $data,
            'daterange' => $daterange
        ]);
    }
    
    //short analytics
    public function short_index(Request $request)
    {
        $short_tcount = Trade::where('subuser_id', Auth::user()->current_subuser)->whereBetween('start_datetime', [$this->startdate, $this->enddate])->where('long_short', 'SHORT')->count();
        $winshort_tcount = Trade::where('subuser_id', Auth::user()->current_subuser)->whereBetween('end_datetime', [$this->startdate, $this->enddate])->where('long_short', 'SHORT')->where('profit_gl','>', 0)->count();
        $lossshort_tcount = Trade::where('subuser_id', Auth::user()->current_subuser)->whereBetween('end_datetime', [$this->startdate, $this->enddate])->where('long_short', 'SHORT')->where('profit_gl','<', 0)->count();
        $beshort_tcount = Trade::where('subuser_id', Auth::user()->current_subuser)->whereBetween('end_datetime', [$this->startdate, $this->enddate])->where('long_short', 'SHORT')->where('profit_gl', 0)->count();
        $shorttradesums = Trade::where('subuser_id', Auth::user()->current_subuser)->whereBetween('end_datetime', [$this->startdate, $this->enddate])->where('long_short', 'SHORT')->selectRaw('sum(pips) as pips_sum, sum(percentage_gl) as percentage_gl_sum, sum(duration) as duration_sum')->first();
        $bestshorttrade = Trade::where('subuser_id', Auth::user()->current_subuser)->whereBetween('end_datetime', [$this->startdate, $this->enddate])->where('long_short', 'SHORT')->orderBy('percentage_gl','desc')->first();
        if($this->range == 'monthly'){
            $trades = DB::select(DB::raw('SELECT year_val, month_val, sum(pos_cnt) win, sum(neg_cnt) loss, sum(zero_cnt) be FROM (SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, count(*) pos_cnt, 0 neg_cnt, 0 zero_cnt 
            FROM trades WHERE profit_gl > 0 AND end_datetime IS NOT NULL AND long_short = "SHORT" AND subuser_id = '.Auth::user()->current_subuser.' AND end_datetime BETWEEN "'.$this->startdate.'" AND "'.$this->enddate.'" GROUP BY YEAR(end_datetime), MONTH(end_datetime) UNION ALL SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, 0 pos_cnt, count(*) neg_cnt, 0 zero_cnt
            FROM trades WHERE profit_gl < 0 AND end_datetime IS NOT NULL AND long_short = "SHORT" AND subuser_id = '.Auth::user()->current_subuser.' AND end_datetime BETWEEN "'.$this->startdate.'" AND "'.$this->enddate.'" GROUP BY YEAR(end_datetime), MONTH(end_datetime) UNION ALL SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, 0 pos_cnt, 0 neg_cnt, count(*) zero_cnt
            FROM trades WHERE profit_gl = 0 AND end_datetime IS NOT NULL AND long_short = "SHORT" AND subuser_id = '.Auth::user()->current_subuser.' AND end_datetime BETWEEN "'.$this->startdate.'" AND "'.$this->enddate.'" GROUP BY YEAR(end_datetime), MONTH(end_datetime)) a GROUP BY year_val, month_val'));
            $gainpermonth = DB::select(DB::raw('SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, sum(percentage_gl) tpgain, sum(profit_gl) trgain FROM trades WHERE end_datetime is not null AND long_short = "SHORT" AND subuser_id = '.Auth::user()->current_subuser.' AND end_datetime BETWEEN "'.$this->startdate.'" AND  "'.$this->enddate.'" GROUP BY YEAR(end_datetime), MONTH(end_datetime)'));
        }
        else if($this->range == 'weekly'){
            $trades = DB::select(DB::raw('SELECT year_val, month_val, week_val, sum(pos_cnt) win, sum(neg_cnt) loss, sum(zero_cnt) be FROM ( SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, WEEK(end_datetime) week_val, count(*) pos_cnt, 0 neg_cnt, 0 zero_cnt 
            FROM trades WHERE profit_gl > 0 AND end_datetime IS NOT NULL AND long_short = "SHORT" AND subuser_id = '.Auth::user()->current_subuser.' AND end_datetime BETWEEN "'.$this->startdate.'" AND "'.$this->enddate.'" GROUP BY YEAR(end_datetime), MONTH(end_datetime), WEEK(end_datetime) UNION ALL SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, WEEK(end_datetime) week_val, 0 pos_cnt, count(*) neg_cnt, 0 zero_cnt 
            FROM trades WHERE profit_gl < 0 AND end_datetime IS NOT NULL AND long_short = "SHORT" AND subuser_id = '.Auth::user()->current_subuser.' AND end_datetime BETWEEN "'.$this->startdate.'" AND "'.$this->enddate.'" GROUP BY YEAR(end_datetime), MONTH(end_datetime), WEEK(end_datetime) UNION ALL SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, WEEK(end_datetime) week_val, 0 pos_cnt, 0 neg_cnt, count(*) zero_cnt 
            FROM trades WHERE profit_gl = 0 AND end_datetime IS NOT NULL AND long_short = "SHORT" AND subuser_id = '.Auth::user()->current_subuser.' AND end_datetime BETWEEN "'.$this->startdate.'" AND "'.$this->enddate.'" GROUP BY YEAR(end_datetime), MONTH(end_datetime), WEEK(end_datetime) ) a GROUP BY year_val, month_val, week_val'));
            $gainpermonth = DB::select(DB::raw('SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, WEEK(end_datetime) week_val, sum(percentage_gl) tpgain, sum(profit_gl) trgain FROM trades WHERE end_datetime is not null AND long_short = "SHORT" AND subuser_id = '.Auth::user()->current_subuser.' AND end_datetime BETWEEN "'.$this->startdate.'" AND  "'.$this->enddate.'" GROUP BY YEAR(end_datetime), MONTH(end_datetime), WEEK(end_datetime)'));
        }
        else{
            $trades = DB::select(DB::raw('SELECT year_val, month_val, day_val, sum(pos_cnt) win, sum(neg_cnt) loss, sum(zero_cnt) be FROM ( SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, DAY(end_datetime) day_val, count(*) pos_cnt, 0 neg_cnt, 0 zero_cnt 
            FROM trades WHERE profit_gl > 0 AND end_datetime IS NOT NULL AND long_short = "SHORT" AND subuser_id = '.Auth::user()->current_subuser.' AND end_datetime BETWEEN "'.$this->startdate.'" AND "'.$this->enddate.'" GROUP BY YEAR(end_datetime), MONTH(end_datetime), DAY(end_datetime) UNION ALL SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, DAY(end_datetime) day_val, 0 pos_cnt, count(*) neg_cnt, 0 zero_cnt 
            FROM trades WHERE profit_gl < 0 AND end_datetime IS NOT NULL AND long_short = "SHORT" AND subuser_id = '.Auth::user()->current_subuser.' AND end_datetime BETWEEN "'.$this->startdate.'" AND "'.$this->enddate.'" GROUP BY YEAR(end_datetime), MONTH(end_datetime), DAY(end_datetime) UNION ALL SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, DAY(end_datetime) day_val, 0 pos_cnt, 0 neg_cnt, count(*) zero_cnt 
            FROM trades WHERE profit_gl = 0 AND end_datetime IS NOT NULL AND long_short = "SHORT" AND subuser_id = '.Auth::user()->current_subuser.' AND end_datetime BETWEEN "'.$this->startdate.'" AND "'.$this->enddate.'" GROUP BY YEAR(end_datetime), MONTH(end_datetime), DAY(end_datetime) ) a GROUP BY year_val, month_val, day_val'));
            $gainpermonth = DB::select(DB::raw('SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, DAY(end_datetime) day_val, sum(percentage_gl) tpgain, sum(profit_gl) trgain FROM trades WHERE end_datetime is not null AND long_short = "SHORT" AND subuser_id = '.Auth::user()->current_subuser.' AND end_datetime BETWEEN "'.$this->startdate.'" AND  "'.$this->enddate.'" GROUP BY YEAR(end_datetime), MONTH(end_datetime), DAY(end_datetime)'));
        }
        // $trades = DB::select(DB::raw('SELECT year_val, month_val, sum(pos_cnt) win, sum(neg_cnt) loss, sum(zero_cnt) be FROM (SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, count(*) pos_cnt, 0 neg_cnt, 0 zero_cnt FROM trades WHERE profit_gl > 0 AND long_short = "SHORT" AND subuser_id = '.Auth::user()->current_subuser.' GROUP BY YEAR(end_datetime), MONTH(end_datetime) UNION ALL SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, 0 pos_cnt, count(*) neg_cnt, 0 zero_cnt FROM trades WHERE profit_gl < 0 AND long_short = "SHORT" AND subuser_id = '.Auth::user()->current_subuser.' GROUP BY YEAR(end_datetime), MONTH(end_datetime) UNION ALL SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, 0 pos_cnt, 0 neg_cnt, count(*) zero_cnt FROM trades WHERE profit_gl = 0 AND long_short = "SHORT" AND subuser_id = '.Auth::user()->current_subuser.' GROUP BY YEAR(end_datetime), MONTH(end_datetime)) a GROUP BY year_val, month_val'));
        // $gainpermonth = DB::select(DB::raw('SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, sum(percentage_gl) tgain FROM trades WHERE end_datetime is not null AND long_short = "SHORT" AND subuser_id = '.Auth::user()->current_subuser.' GROUP BY YEAR(end_datetime), MONTH(end_datetime)'));

        $shortsymbol_nums = Trade::where('subuser_id', Auth::user()->current_subuser)->whereBetween('end_datetime', [$this->startdate, $this->enddate])->whereNotNull('end_datetime')->where('long_short', 'SHORT')->select('symbol_id', DB::raw('count(*) as total'))->groupBy('symbol_id')->get();
        $shortsymbol_percents = Trade::where('subuser_id', Auth::user()->current_subuser)->whereBetween('end_datetime', [$this->startdate, $this->enddate])->whereNotNull('end_datetime')->where('long_short', 'SHORT')->groupBy('symbol_id')->selectRaw('sum(percentage_gl) as sum, symbol_id')->get();
        
        if($short_tcount){
            $afterimage = Afimage::where('trade_id', $bestshorttrade->id)->first();
            $startday = Trade::where('subuser_id', Auth::user()->current_subuser)->whereBetween('end_datetime', [$this->startdate, $this->enddate])->orderBy('start_datetime')->first()->start_datetime;
            $endday = Trade::where('subuser_id', Auth::user()->current_subuser)->whereBetween('end_datetime', [$this->startdate, $this->enddate])->orderBy('end_datetime', 'desc')->first()->end_datetime;
            $totalSecondsDiff = abs(strtotime($startday)-strtotime($endday));
            $totalDaysDiff    = ceil($totalSecondsDiff/60/60/24);
            $totalMonthsDiff  = ceil($totalSecondsDiff/60/60/24/30);
            $data['short_ave_per_month'] = number_format($short_tcount/$totalMonthsDiff,2, '.', '');
            $data['bestshorttrade'] = $bestshorttrade;
            $data['afterimage'] = $afterimage;
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
                $data['month'][$i] = str_replace(" ", ' Week No.', date('Y W',strtotime($weekdate)));
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

        for($i=0; $i<count($shortsymbol_nums); $i++)
        {
            $data['symbols'][$i] = $shortsymbol_nums[$i]->symbol->symbol;
            $data['trades'][$i] = $shortsymbol_nums[$i]->total;
            $data['sumsymbols'][$i] = $shortsymbol_percents[$i]->symbol->symbol;
            $data['sum'][$i] = number_format($shortsymbol_percents[$i]->sum, 2, '.', '');
        }

        $data['short_tcount'] = $short_tcount;
        $data['winshort_tcount'] = $winshort_tcount;
        $data['lossshort_tcount'] = $lossshort_tcount;
        $data['beshort_tcount'] = $beshort_tcount;
        $data['shorttradesums'] = $shorttradesums;

        if($request->startdate){
            $daterange = $request->startdate.'-'.$request->enddate;
        } else {
            $daterange = 'ALL';
        }

        return view('users.analytics.short')->with([
            'data' => $data,
            'daterange' => $daterange
        ]);
    }
    
}