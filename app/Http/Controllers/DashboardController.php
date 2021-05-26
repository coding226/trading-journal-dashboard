<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Subuser;
use App\Models\Trade;
use Carbon\Carbon;
use Auth;
use DB;

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
        $symbol_nums = Trade::where('subuser_id', Auth::user()->current_subuser)->select('symbol_id', DB::raw('count(*) as total'))->groupBy('symbol_id')->get();
        $symbol_percents = Trade::where('subuser_id', Auth::user()->current_subuser)->groupBy('symbol_id')->selectRaw('sum(percentage_gl) as sum, symbol_id')->get();
        
        $data = [];
        for($i=0; $i<count($symbol_nums); $i++)
        {
            $data['symbols'][$i] = $symbol_nums[$i]->symbol->symbol;
            $data['trades'][$i] = $symbol_nums[$i]->total;
            $data['sumsymbols'][$i] = $symbol_percents[$i]->symbol->symbol;
            $data['sum'][$i] = number_format($symbol_percents[$i]->sum, 2, '.', '');
        }
        $data['win'] = $wins_num;
        $data['loss'] = $trades_num-$wins_num;
        // dd($data);
        return view("users.dashboard.index")->with([
            'acc_num' => $acc_num,
            'tprofit' => $tprofit,
            'tpecen' => $tpecen,
            'recents' => $recents,
            'data' => $data,
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
