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
        $recents = Trade::where('subuser_id', Auth::user()->current_subuser)->orderBy('created_at' ,'desc')->take(5)->get();
        $trades =   Trade::where('subuser_id', Auth::user()->current_subuser)->whereNotNull('end_datetime')->orderBy('end_datetime')->get();
        $trades_num = count($trades);
        $wins_num = Trade::where('subuser_id', Auth::user()->current_subuser)->where('profit_gl', '>', 0)->count();
        $losses_num = Trade::where('subuser_id', Auth::user()->current_subuser)->where('profit_gl', '<', 0)->count();
        $allsymbol_nums = Trade::where('subuser_id', Auth::user()->current_subuser)->whereNotNull('end_datetime')->select('symbol_id', DB::raw('count(*) as total'))->groupBy('symbol_id')->get();
        $allsymbol_percents = Trade::where('subuser_id', Auth::user()->current_subuser)->whereNotNull('end_datetime')->groupBy('symbol_id')->selectRaw('sum(percentage_gl) as sum, symbol_id')->get();
        
        $data = [];
        $data['win'] = $wins_num;
        $data['loss'] = $losses_num;

        for($i=0; $i<count($allsymbol_nums); $i++)
        {
            $data['symbols'][$i] = $allsymbol_nums[$i]->symbol->symbol;
            $data['trades'][$i] = $allsymbol_nums[$i]->total;
            $data['sumsymbols'][$i] = $allsymbol_percents[$i]->symbol->symbol;
            $data['sum'][$i] = number_format($allsymbol_percents[$i]->sum, 2, '.', '');
        }
        
        $data['growthx'][0] = '2021-01-07T02:00:00';
        $data['growthy'][0] = '0';
        for($i=1; $i<=count($trades); $i++)
        {
            $data['growthx'][$i] = str_replace(' ', 'T', $trades[$i-1]->end_datetime);
            $data['growthy'][$i] = number_format($trades[$i-1]->percentage_gl, 2, '.', '');
        }

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

    public function drawdashchart(Request $request)
    {
        $response = [];
        if($request->chart == 'tsymbol')
        {
            if($request->type == 'All')
            {
                $data = Trade::where('subuser_id', Auth::user()->current_subuser)->select('symbol_id', DB::raw('count(*) as total'))->groupBy('symbol_id')->get();
            }
            else if($request->type == 'This Year')
            {
                $data = Trade::where('subuser_id', Auth::user()->current_subuser)->whereBetween('end_datetime', [Carbon::now()->startOfYear(), Carbon::now()->endOfYear()])->select('symbol_id', DB::raw('count(*) as total'))->groupBy('symbol_id')->get();
            }
            else if($request->type == 'This Month')
            {
                $data = Trade::where('subuser_id', Auth::user()->current_subuser)->whereBetween('end_datetime', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])->select('symbol_id', DB::raw('count(*) as total'))->groupBy('symbol_id')->get();
            }
            else if($request->type == 'This Week')
            {
                $data = Trade::where('subuser_id', Auth::user()->current_subuser)->whereBetween('end_datetime', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->select('symbol_id', DB::raw('count(*) as total'))->groupBy('symbol_id')->get();
            }
            for($i=0; $i<count($data); $i++)
            {
                $response['symbols'][$i] = $data[$i]->symbol->symbol;
                $response['trades'][$i] = $data[$i]->total;
            }
            echo json_encode($response);
        }
        else if($request->chart == 'psymbol')
        {
            if($request->type == 'All')
            {
                $data = Trade::where('subuser_id', Auth::user()->current_subuser)->groupBy('symbol_id')->selectRaw('sum(percentage_gl) as sum, symbol_id')->get();
            }
            else if($request->type == 'This Year')
            {
                $data = Trade::where('subuser_id', Auth::user()->current_subuser)->whereBetween('end_datetime', [Carbon::now()->startOfYear(), Carbon::now()->endOfYear()])->groupBy('symbol_id')->selectRaw('sum(percentage_gl) as sum, symbol_id')->get();
            }
            else if($request->type == 'This Month')
            {
                $data = Trade::where('subuser_id', Auth::user()->current_subuser)->whereBetween('end_datetime', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])->groupBy('symbol_id')->selectRaw('sum(percentage_gl) as sum, symbol_id')->get();
            }
            else if($request->type == 'This Week')
            {
                $data = Trade::where('subuser_id', Auth::user()->current_subuser)->whereBetween('end_datetime', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->groupBy('symbol_id')->selectRaw('sum(percentage_gl) as sum, symbol_id')->get();
            }
            for($i=0; $i<count($data); $i++)
            {
                $response['symbols'][$i] = $data[$i]->symbol->symbol;
                $response['sum'][$i] = number_format($data[$i]->sum, 2, '.', '');
            }
            echo json_encode($response);
        }

    }

    public function contactus()
    {
        $subuser = Subuser::where('id', Auth::user()->current_subuser)->first();
        return view('users.contactus.index',compact('subuser'));
    }
}
