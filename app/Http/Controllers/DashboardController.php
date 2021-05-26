<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Subuser;
use App\Models\Trade;
use Carbon\Carbon;
use Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        
    }
    
    public function index()
    {
        $acc_num = count(Subuser::where('user_id', Auth::user()->id)->get());
        $tprofit = Trade::where('subuser_id', Auth::user()->current_subuser)->sum('profit_gl');
        $tpecen = Trade::where('subuser_id', Auth::user()->current_subuser)->sum('percentage_gl');
        $recents = Trade::where('subuser_id', Auth::user()->current_subuser)->orderBy('start_datetime' ,'desc')->take(5)->get();
        $trades_num = Trade::where('subuser_id', Auth::user()->current_subuser)->count();
        $wins_num = Trade::where('subuser_id', Auth::user()->current_subuser)->where('profit_gl', '>', 0)->count();
        return view("users.dashboard.index")->with([
            'acc_num' => $acc_num,
            'tprofit' => $tprofit,
            'tpecen' => $tpecen,
            'recents' => $recents,
            'wins_num' => $wins_num,
            'loses_num' => $trades_num-$wins_num,
        ]);
    }
    
    public function getinfoes(Request $request)
    {
        $currenttime = new Carbon($request->currenttime);
        $startday = (new Carbon($request->currenttime))->subDay();
        $startweek = (new Carbon($request->currenttime))->subWeek();
        $startmonth = (new Carbon($request->currenttime))->subMonth();
        $startyear = (new Carbon($request->currenttime))->subYear();

        $data['inadaypercentagegain'] = Trade::where('subuser_id', Auth::user()->current_subuser)->where('start_datetime', '<', $currenttime)->where('end_datetime', '>', $startday)->sum('percentage_gl');
        $data['inaweekpercentagegain'] = Trade::where('subuser_id', Auth::user()->current_subuser)->where('start_datetime', '<', $currenttime)->where('end_datetime', '>', $startweek)->sum('percentage_gl');
        $data['inamonthpercentagegain'] = Trade::where('subuser_id', Auth::user()->current_subuser)->where('start_datetime', '<', $currenttime)->where('end_datetime', '>', $startmonth)->sum('percentage_gl');
        $data['inayearpercentagegain'] = Trade::where('subuser_id', Auth::user()->current_subuser)->where('start_datetime', '<', $currenttime)->where('end_datetime', '>', $startyear)->sum('percentage_gl');

        echo json_encode($data);
    }

    public function contactus()
    {
        $subuser = Subuser::where('id', Auth::user()->current_subuser)->first();
        return view('users.contactus.index',compact('subuser'));
    }
}
