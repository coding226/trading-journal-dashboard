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
        $active_count =  Trade::where('subuser_id', Auth::user()->current_subuser)->whereNull('end_datetime')->count();
        $long_count = Trade::where('subuser_id', Auth::user()->current_subuser)->where('long_short', 'LONG')->where('profit_gl', '<>', 0)->count();
        $short_count = Trade::where('subuser_id', Auth::user()->current_subuser)->where('long_short', 'SHORT')->where('profit_gl', '<>', 0)->count();
        $break_count = Trade::where('subuser_id', Auth::user()->current_subuser)->where('profit_gl', '0')->count();
        $winshort_count = Trade::where('subuser_id', Auth::user()->current_subuser)->where('long_short', 'SHORT')->where('profit_gl', '>', 0)->count();
        $winlong_count = Trade::where('subuser_id', Auth::user()->current_subuser)->where('long_short', 'LONG')->where('profit_gl', '>', 0)->count();
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