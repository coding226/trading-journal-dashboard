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
    public function __construct()
    {
        
    }
    //all analytics
    public function index()
    {   
        // $trades = Trade::all();
        // foreach($trades as $trade)
        // {
        //     $startday = $trade->start_datetime;
        //     $endday = $trade->end_datetime;
        //     $trade->duration = abs(strtotime($startday)-strtotime($endday));
        //     $trade->save();
        // }
        $all_count =  Trade::where('subuser_id', Auth::user()->current_subuser)->count();
        $active_count = Trade::where('subuser_id', Auth::user()->current_subuser)->whereNull('end_datetime')->count();
        $long_count = Trade::where('subuser_id', Auth::user()->current_subuser)->where('long_short', 'LONG')->where('profit_gl', '<>', 0)->count();
        $short_count = Trade::where('subuser_id', Auth::user()->current_subuser)->where('long_short', 'SHORT')->where('profit_gl', '<>', 0)->count();
        $break_count = Trade::where('subuser_id', Auth::user()->current_subuser)->where('profit_gl', '0')->count();
        $winshort_count = Trade::where('subuser_id', Auth::user()->current_subuser)->where('long_short', 'SHORT')->where('profit_gl', '>', 0)->count();
        $winlong_count = Trade::where('subuser_id', Auth::user()->current_subuser)->where('long_short', 'LONG')->where('profit_gl', '>', 0)->count();
        $lossess_count = Trade::where('subuser_id', Auth::user()->current_subuser)->where('profit_gl', '<', 0)->count();
        $tradesums = Trade::where('subuser_id', Auth::user()->current_subuser)->selectRaw('sum(profit_gl) as profit_gl_sum, sum(pips) as pips_sum, sum(fees) as fees_sum, sum(percentage_gl) as percentage_gl_sum, sum(duration) as duration_sum')->get();
        $besttrade = Trade::where('subuser_id', Auth::user()->current_subuser)->orderBy('percentage_gl','desc')->first();
        $trades = DB::select(DB::raw('SELECT year_val, month_val, sum(pos_cnt) win, sum(neg_cnt) loss, sum(zero_cnt) be FROM (SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, count(*) pos_cnt, 0 neg_cnt, 0 zero_cnt FROM trades WHERE profit_gl > 0 AND subuser_id = '.Auth::user()->current_subuser.' GROUP BY YEAR(end_datetime), MONTH(end_datetime) UNION ALL SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, 0 pos_cnt, count(*) neg_cnt, 0 zero_cnt FROM trades WHERE profit_gl < 0 AND subuser_id = '.Auth::user()->current_subuser.' GROUP BY YEAR(end_datetime), MONTH(end_datetime) UNION ALL SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, 0 pos_cnt, 0 neg_cnt, count(*) zero_cnt FROM trades WHERE profit_gl = 0 AND subuser_id = '.Auth::user()->current_subuser.' GROUP BY YEAR(end_datetime), MONTH(end_datetime)) a GROUP BY year_val, month_val'));
        $gainpermonth = DB::select(DB::raw('SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, sum(percentage_gl) tgain FROM trades WHERE end_datetime is not null AND subuser_id = '.Auth::user()->current_subuser.' GROUP BY YEAR(end_datetime), MONTH(end_datetime)'));
        $afterimages = Afimage::where('trade_id', $besttrade->id)->get();
        $startday = Trade::where('subuser_id', Auth::user()->current_subuser)->orderBy('start_datetime')->first()->start_datetime;
        $endday = Trade::where('subuser_id', Auth::user()->current_subuser)->orderBy('end_datetime', 'desc')->first()->end_datetime;
        $totalSecondsDiff = abs(strtotime($startday)-strtotime($endday));
        $totalDaysDiff    = $totalSecondsDiff/60/60/24;
        $totalMonthsDiff  = $totalSecondsDiff/60/60/24/30;

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
        $data['tradesums'] = $tradesums;
        $data['lossess_count'] = $lossess_count;
        $data['ave_daily'] = number_format($tradesums[0]['percentage_gl_sum']/$totalDaysDiff, 2, '.', '');
        $data['ave_monthly'] = number_format($tradesums[0]['percentage_gl_sum']/$totalMonthsDiff, 2, '.', '');
        $data['ave_duration'] = number_format($tradesums[0]['duration_sum']/($all_count-$active_count), 2, '.', '');

        return view('users.analytics.index')->with([
            'data' => $data,
            'besttrade' => $besttrade,
            'afterimages' => $afterimages,
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