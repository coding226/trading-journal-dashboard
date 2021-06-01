<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trade;
use App\Models\Symbol;
use App\Models\Afimage;
use Auth;
use DB;

class SymbolanalyticsController extends Controller
{
    public function __construct()
    {
        
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
        $data['tradesums'] = Trade::where('subuser_id', Auth::user()->current_subuser)->where('symbol_id', $symbolid)->selectRaw('count(*) as tcount, sum(pips) as pips_sum, sum(percentage_gl) as percentage_gl_sum, sum(duration) as duration_sum')->first();
        $data['tlong'] = Trade::where('subuser_id', Auth::user()->current_subuser)->where('symbol_id', $symbolid)->where('long_short', 'LONG')->count();
        $data['tshort'] = Trade::where('subuser_id', Auth::user()->current_subuser)->where('symbol_id', $symbolid)->where('long_short', 'SHORT')->count();
        $data['twin'] = Trade::where('subuser_id', Auth::user()->current_subuser)->where('symbol_id', $symbolid)->where('profit_gl', '>', 0)->count();
        $data['tloss'] = Trade::where('subuser_id', Auth::user()->current_subuser)->where('symbol_id', $symbolid)->where('profit_gl', '<', 0)->count();
        $data['tbe'] = Trade::where('subuser_id', Auth::user()->current_subuser)->where('symbol_id', $symbolid)->where('profit_gl', 0)->count();
        $data['besttrade'] = Trade::where('subuser_id', Auth::user()->current_subuser)->where('symbol_id', $symbolid)->orderBy('percentage_gl','desc')->first();
        $trades = DB::select(DB::raw('SELECT year_val, month_val, sum(pos_cnt) win, sum(neg_cnt) loss, sum(zero_cnt) be FROM (SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, count(*) pos_cnt, 0 neg_cnt, 0 zero_cnt FROM trades WHERE profit_gl > 0 AND symbol_id = '.$symbolid.' AND subuser_id = '.Auth::user()->current_subuser.' GROUP BY YEAR(end_datetime), MONTH(end_datetime) UNION ALL SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, 0 pos_cnt, count(*) neg_cnt, 0 zero_cnt FROM trades WHERE profit_gl < 0 AND symbol_id = '.$symbolid.' AND subuser_id = '.Auth::user()->current_subuser.' GROUP BY YEAR(end_datetime), MONTH(end_datetime) UNION ALL SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, 0 pos_cnt, 0 neg_cnt, count(*) zero_cnt FROM trades WHERE profit_gl = 0 AND symbol_id = '.$symbolid.' AND subuser_id = '.Auth::user()->current_subuser.' GROUP BY YEAR(end_datetime), MONTH(end_datetime)) a GROUP BY year_val, month_val'));
        $gainpermonth = DB::select(DB::raw('SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, sum(percentage_gl) tgain FROM trades WHERE end_datetime is not null AND symbol_id = '.$symbolid.' AND subuser_id = '.Auth::user()->current_subuser.' GROUP BY YEAR(end_datetime), MONTH(end_datetime)'));
        $data['afterimage'] = Afimage::where('trade_id', $data['besttrade']->id)->first();
        for($i=0; $i<count($trades); $i++)
        {
            $data['wins'][$i] = $trades[$i]->win;
            $data['losses'][$i] = $trades[$i]->loss;
            $data['bes'][$i] = $trades[$i]->be;
            $data['gain'][$i] = number_format($gainpermonth[$i]->tgain, 2, '.', '');
            $data['month'][$i] = date_format(date_create($trades[$i]->year_val.'-'.$trades[$i]->month_val), 'M Y');
        }

        return view('users.symbolanalytics.moredata')->with([
            'symbol' => $symbol,
            'data' => $data
        ]);
    }

}
