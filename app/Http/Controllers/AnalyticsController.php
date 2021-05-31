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
        $all_count =  Trade::where('subuser_id', Auth::user()->current_subuser)->count();
        $active_count = Trade::where('subuser_id', Auth::user()->current_subuser)->whereNull('end_datetime')->count();
        $win_count = Trade::where('subuser_id', Auth::user()->current_subuser)->where('profit_gl', '>', 0)->count();
        $loss_count = Trade::where('subuser_id', Auth::user()->current_subuser)->where('profit_gl', '<', 0)->count();
        $break_count = Trade::where('subuser_id', Auth::user()->current_subuser)->where('profit_gl', '0')->count();
        $winshort_count = Trade::where('subuser_id', Auth::user()->current_subuser)->where('long_short', 'SHORT')->where('profit_gl', '>', 0)->count();
        $winlong_count = Trade::where('subuser_id', Auth::user()->current_subuser)->where('long_short', 'LONG')->where('profit_gl', '>', 0)->count();
        $lossess_count = Trade::where('subuser_id', Auth::user()->current_subuser)->where('profit_gl', '<', 0)->count();
        $tradesums = Trade::where('subuser_id', Auth::user()->current_subuser)->selectRaw('sum(profit_gl) as profit_gl_sum, sum(pips) as pips_sum, sum(fees) as fees_sum, sum(percentage_gl) as percentage_gl_sum, sum(duration) as duration_sum')->get();
        $besttrade = Trade::where('subuser_id', Auth::user()->current_subuser)->orderBy('percentage_gl','desc')->first();
        $trades = DB::select(DB::raw('SELECT year_val, month_val, sum(pos_cnt) win, sum(neg_cnt) loss, sum(zero_cnt) be FROM (SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, count(*) pos_cnt, 0 neg_cnt, 0 zero_cnt FROM trades WHERE profit_gl > 0 AND subuser_id = '.Auth::user()->current_subuser.' GROUP BY YEAR(end_datetime), MONTH(end_datetime) UNION ALL SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, 0 pos_cnt, count(*) neg_cnt, 0 zero_cnt FROM trades WHERE profit_gl < 0 AND subuser_id = '.Auth::user()->current_subuser.' GROUP BY YEAR(end_datetime), MONTH(end_datetime) UNION ALL SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, 0 pos_cnt, 0 neg_cnt, count(*) zero_cnt FROM trades WHERE profit_gl = 0 AND subuser_id = '.Auth::user()->current_subuser.' GROUP BY YEAR(end_datetime), MONTH(end_datetime)) a GROUP BY year_val, month_val'));
        $gainpermonth = DB::select(DB::raw('SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, sum(percentage_gl) tpgain, sum(profit_gl) trgain FROM trades WHERE end_datetime is not null AND subuser_id = '.Auth::user()->current_subuser.' GROUP BY YEAR(end_datetime), MONTH(end_datetime)'));
        $equities = DB::select(DB::raw('SELECT id, percentage_gl, end_datetime, (SELECT SUM(profit_gl) FROM `trades` WHERE end_datetime <= a.end_datetime and end_datetime IS NOT NULL and subuser_id = '.Auth::user()->current_subuser.') presum FROM trades a where end_datetime IS NOT NULL and subuser_id = '.Auth::user()->current_subuser.' ORDER BY end_datetime'));
        $afterimage = Afimage::where('trade_id', $besttrade->id)->first();

        $startday = Trade::where('subuser_id', Auth::user()->current_subuser)->orderBy('start_datetime')->first()->start_datetime;
        $endday = Trade::where('subuser_id', Auth::user()->current_subuser)->orderBy('end_datetime', 'desc')->first()->end_datetime;
        $totalSecondsDiff = abs(strtotime($startday)-strtotime($endday));
        $totalDaysDiff    = $totalSecondsDiff/60/60/24;
        $totalWeeksDiff    = $totalSecondsDiff/60/60/24/7;
        $totalMonthsDiff  = $totalSecondsDiff/60/60/24/30;

        for($i=0; $i<count($trades); $i++)
        {
            $data['wins'][$i] = $trades[$i]->win;
            $data['losses'][$i] = $trades[$i]->loss;
            $data['bes'][$i] = $trades[$i]->be;
            $data['pgain'][$i] = number_format($gainpermonth[$i]->tpgain, 2, '.', '');
            $data['month'][$i] = date_format(date_create($trades[$i]->year_val.'-'.$trades[$i]->month_val), 'M Y');
            $data['winrate'][$i+1] = number_format($trades[$i]->win/($trades[$i]->win + $trades[$i]->loss + $trades[$i]->be)*100, 2, '.', '');
            $data['winratex'][$i+1] = $i+1;
        }

        $data['winrate'][0] = 0;
        $data['winratex'][0] = 0;
        
        if(count($equities) > 0){
            $data['equityy'][0] = Carbon::createFromFormat('Y-m-d H:i:s', $equities[0]->end_datetime)->subDay()->format("Y-m-d H:i:s");
            $data['equityx'][0] = '0';
            
            for($i=1; $i<=count($equities); $i++)
            {
                $data['equityy'][$i] = str_replace(' ', 'T', $equities[$i-1]->end_datetime);
                $data['equityx'][$i] = number_format($equities[$i-1]->presum, 2, '.', '');
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
        $data['ave_percentage_gain'] = number_format($tradesums[0]['percentage_gl_sum']/$all_count, 2, '.', '');
        $data['ave_daily'] = number_format($tradesums[0]['percentage_gl_sum']/$totalDaysDiff, 2, '.', '');
        $data['ave_weekly'] = number_format($tradesums[0]['percentage_gl_sum']/$totalMonthsDiff, 2, '.', '');
        $data['ave_monthly'] = number_format($tradesums[0]['percentage_gl_sum']/$totalMonthsDiff, 2, '.', '');
        $data['ave_duration'] = number_format($tradesums[0]['duration_sum']/($all_count-$active_count), 2, '.', '');

        return view('users.analytics.index')->with([
            'data' => $data,
            'besttrade' => $besttrade,
            'afterimage' => $afterimage,
        ]);
    }
    
    // long analytics
    public function long_index()
    {
        $long_tcount = Trade::where('subuser_id', Auth::user()->current_subuser)->where('long_short', 'LONG')->count();
        $winlong_tcount = Trade::where('subuser_id', Auth::user()->current_subuser)->where('long_short', 'LONG')->where('profit_gl','>', 0)->count();
        $losslong_tcount = Trade::where('subuser_id', Auth::user()->current_subuser)->where('long_short', 'LONG')->where('profit_gl','<', 0)->count();
        $belong_tcount = Trade::where('subuser_id', Auth::user()->current_subuser)->where('long_short', 'LONG')->where('profit_gl', 0)->count();
        $longtradesums = Trade::where('subuser_id', Auth::user()->current_subuser)->where('long_short', 'LONG')->selectRaw('sum(pips) as pips_sum, sum(percentage_gl) as percentage_gl_sum, sum(duration) as duration_sum')->first();
        $bestlongtrade = Trade::where('subuser_id', Auth::user()->current_subuser)->where('long_short', 'LONG')->orderBy('percentage_gl','desc')->first();
        $afterimages = Afimage::where('trade_id', $bestlongtrade->id)->get();
        $startday = Trade::where('subuser_id', Auth::user()->current_subuser)->orderBy('start_datetime')->first()->start_datetime;
        $endday = Trade::where('subuser_id', Auth::user()->current_subuser)->orderBy('end_datetime', 'desc')->first()->end_datetime;
        $totalSecondsDiff = abs(strtotime($startday)-strtotime($endday));
        $totalDaysDiff    = $totalSecondsDiff/60/60/24;
        $totalMonthsDiff  = $totalSecondsDiff/60/60/24/30;
        $trades = DB::select(DB::raw('SELECT year_val, month_val, sum(pos_cnt) win, sum(neg_cnt) loss, sum(zero_cnt) be FROM (SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, count(*) pos_cnt, 0 neg_cnt, 0 zero_cnt FROM trades WHERE profit_gl > 0 AND long_short = "LONG" AND subuser_id = '.Auth::user()->current_subuser.' GROUP BY YEAR(end_datetime), MONTH(end_datetime) UNION ALL SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, 0 pos_cnt, count(*) neg_cnt, 0 zero_cnt FROM trades WHERE profit_gl < 0 AND long_short = "LONG" AND subuser_id = '.Auth::user()->current_subuser.' GROUP BY YEAR(end_datetime), MONTH(end_datetime) UNION ALL SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, 0 pos_cnt, 0 neg_cnt, count(*) zero_cnt FROM trades WHERE profit_gl = 0 AND long_short = "LONG" AND subuser_id = '.Auth::user()->current_subuser.' GROUP BY YEAR(end_datetime), MONTH(end_datetime)) a GROUP BY year_val, month_val'));
        $gainpermonth = DB::select(DB::raw('SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, sum(percentage_gl) tgain FROM trades WHERE end_datetime is not null AND long_short = "LONG" AND subuser_id = '.Auth::user()->current_subuser.' GROUP BY YEAR(end_datetime), MONTH(end_datetime)'));

        for($i=0; $i<count($trades); $i++)
        {
            $data['wins'][$i] = $trades[$i]->win;
            $data['losses'][$i] = $trades[$i]->loss;
            $data['bes'][$i] = $trades[$i]->be;
            $data['gain'][$i] = number_format($gainpermonth[$i]->tgain, 2, '.', '');
            $data['month'][$i] = date_format(date_create($trades[$i]->year_val.'-'.$trades[$i]->month_val), 'M Y');
        }

        $data['long_tcount'] = $long_tcount;
        $data['winlong_tcount'] = $winlong_tcount;
        $data['losslong_tcount'] = $losslong_tcount;
        $data['belong_tcount'] = $belong_tcount;
        $data['longtradesums'] = $longtradesums;
        $data['long_ave_per_month'] = number_format($long_tcount/$totalMonthsDiff,2, '.', '');
        $data['bestlongtrade'] = $bestlongtrade;
        $data['afterimages'] = $afterimages;

        return view('users.analytics.long')->with([
            'data' => $data
        ]);
    }
    
    //short analytics
    public function short_index()
    {
        $short_tcount = Trade::where('subuser_id', Auth::user()->current_subuser)->where('long_short', 'SHORT')->count();
        $winshort_tcount = Trade::where('subuser_id', Auth::user()->current_subuser)->where('long_short', 'SHORT')->where('profit_gl','>', 0)->count();
        $lossshort_tcount = Trade::where('subuser_id', Auth::user()->current_subuser)->where('long_short', 'SHORT')->where('profit_gl','<', 0)->count();
        $beshort_tcount = Trade::where('subuser_id', Auth::user()->current_subuser)->where('long_short', 'SHORT')->where('profit_gl', 0)->count();
        $shorttradesums = Trade::where('subuser_id', Auth::user()->current_subuser)->where('long_short', 'SHORT')->selectRaw('sum(pips) as pips_sum, sum(percentage_gl) as percentage_gl_sum, sum(duration) as duration_sum')->first();
        $bestshorttrade = Trade::where('subuser_id', Auth::user()->current_subuser)->where('long_short', 'SHORT')->orderBy('percentage_gl','desc')->first();
        $afterimages = Afimage::where('trade_id', $bestshorttrade->id)->get();
        $startday = Trade::where('subuser_id', Auth::user()->current_subuser)->orderBy('start_datetime')->first()->start_datetime;
        $endday = Trade::where('subuser_id', Auth::user()->current_subuser)->orderBy('end_datetime', 'desc')->first()->end_datetime;
        $totalSecondsDiff = abs(strtotime($startday)-strtotime($endday));
        $totalDaysDiff    = $totalSecondsDiff/60/60/24;
        $totalMonthsDiff  = $totalSecondsDiff/60/60/24/30;
        $trades = DB::select(DB::raw('SELECT year_val, month_val, sum(pos_cnt) win, sum(neg_cnt) loss, sum(zero_cnt) be FROM (SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, count(*) pos_cnt, 0 neg_cnt, 0 zero_cnt FROM trades WHERE profit_gl > 0 AND long_short = "SHORT" AND subuser_id = '.Auth::user()->current_subuser.' GROUP BY YEAR(end_datetime), MONTH(end_datetime) UNION ALL SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, 0 pos_cnt, count(*) neg_cnt, 0 zero_cnt FROM trades WHERE profit_gl < 0 AND long_short = "SHORT" AND subuser_id = '.Auth::user()->current_subuser.' GROUP BY YEAR(end_datetime), MONTH(end_datetime) UNION ALL SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, 0 pos_cnt, 0 neg_cnt, count(*) zero_cnt FROM trades WHERE profit_gl = 0 AND long_short = "SHORT" AND subuser_id = '.Auth::user()->current_subuser.' GROUP BY YEAR(end_datetime), MONTH(end_datetime)) a GROUP BY year_val, month_val'));
        $gainpermonth = DB::select(DB::raw('SELECT YEAR(end_datetime) year_val, MONTH(end_datetime) month_val, sum(percentage_gl) tgain FROM trades WHERE end_datetime is not null AND long_short = "SHORT" AND subuser_id = '.Auth::user()->current_subuser.' GROUP BY YEAR(end_datetime), MONTH(end_datetime)'));

        for($i=0; $i<count($trades); $i++)
        {
            $data['wins'][$i] = $trades[$i]->win;
            $data['losses'][$i] = $trades[$i]->loss;
            $data['bes'][$i] = $trades[$i]->be;
            $data['gain'][$i] = number_format($gainpermonth[$i]->tgain, 2, '.', '');
            $data['month'][$i] = date_format(date_create($trades[$i]->year_val.'-'.$trades[$i]->month_val), 'M Y');
        }

        $data['short_tcount'] = $short_tcount;
        $data['winshort_tcount'] = $winshort_tcount;
        $data['lossshort_tcount'] = $lossshort_tcount;
        $data['beshort_tcount'] = $beshort_tcount;
        $data['shorttradesums'] = $shorttradesums;
        $data['short_ave_per_month'] = number_format($short_tcount/$totalMonthsDiff,2, '.', '');
        $data['bestshorttrade'] = $bestshorttrade;
        $data['afterimages'] = $afterimages;

        return view('users.analytics.short')->with([
            'data' => $data
        ]);
    }
    
}