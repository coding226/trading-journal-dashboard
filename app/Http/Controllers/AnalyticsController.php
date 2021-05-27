<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Subuser;
use App\Models\Trade;
use Carbon\Carbon;
use Auth;
use DB;

class AnalyticsController extends Controller
{
    public function __construct()
    {
        
    }
    //all analytics
    public function index()
    {
        $all_count =  Trade::where('subuser_id', Auth::user()->current_subuser)->count();
        $active_count = Trade::where('subuser_id', Auth::user()->current_subuser)->whereNull('end_datetime')->count();
        $long_count = Trade::where('subuser_id', Auth::user()->current_subuser)->where('long_short', 'LONG')->where('profit_gl', '<>', 0)->count();
        $short_count = Trade::where('subuser_id', Auth::user()->current_subuser)->where('long_short', 'SHORT')->where('profit_gl', '<>', 0)->count();
        $break_count = Trade::where('subuser_id', Auth::user()->current_subuser)->where('profit_gl', '0')->count();
        $winshort_count = Trade::where('subuser_id', Auth::user()->current_subuser)->where('long_short', 'SHORT')->where('profit_gl', '>', 0)->count();
        $winlong_count = Trade::where('subuser_id', Auth::user()->current_subuser)->where('long_short', 'LONG')->where('profit_gl', '>', 0)->count();

        $trades = DB::select(DB::raw('SELECT year_val, month_val, sum(pos_cnt) win, sum(neg_cnt) loss, sum(zero_cnt) be FROM (SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, count(*) pos_cnt, 0 neg_cnt, 0 zero_cnt FROM trades WHERE profit_gl > 0 AND subuser_id = '.Auth::user()->current_subuser.' GROUP BY YEAR(end_datetime), MONTH(end_datetime) UNION ALL SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, 0 pos_cnt, count(*) neg_cnt, 0 zero_cnt FROM trades WHERE profit_gl < 0 AND subuser_id = '.Auth::user()->current_subuser.' GROUP BY YEAR(end_datetime), MONTH(end_datetime) UNION ALL SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, 0 pos_cnt, 0 neg_cnt, count(*) zero_cnt FROM trades WHERE profit_gl = 0 AND subuser_id = '.Auth::user()->current_subuser.' GROUP BY YEAR(end_datetime), MONTH(end_datetime)) a GROUP BY year_val, month_val'));
        $gainpermonth = DB::select(DB::raw('SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, sum(profit_gl) tgain FROM trades WHERE end_datetime is not null AND subuser_id = '.Auth::user()->current_subuser.' GROUP BY YEAR(end_datetime), MONTH(end_datetime)'));
        
        for($i=0; $i<count($trades); $i++)
        {
            $data['wins'][$i] = $trades[$i]->win;
            $data['losses'][$i] = $trades[$i]->loss;
            $data['bes'][$i] = $trades[$i]->be;
            $data['gain'][$i] = number_format($gainpermonth[$i]->tgain, 2, '.', '');
            $data['month'][$i] = date_format(date_create($trades[$i]->year_val.'-'.$trades[$i]->month_val), 'M Y');
        }

        $data['all_count'] = $all_count;
        $data['active_count'] = $active_count;
        $data['long_count'] = $long_count;
        $data['short_count'] = $short_count;
        $data['break_count'] = $break_count;
        $data['winshort_count'] = $winshort_count;
        $data['winlong_count'] = $winlong_count;

        return view('users.analytics.index')->with([
            'data' => $data
        ]);
    }
    
    // long analytics
    public function long_index()
    {
        return view('users.analytics.long');
    }
    
    //short analytics
    public function short_index()
    {
        return view('users.analytics.short');
    }
    
}