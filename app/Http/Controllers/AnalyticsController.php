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
        $alltrades_count =  Trade::where('subuser_id', Auth::user()->current_subuser)->count();
        $activetrades_count =  Trade::where('subuser_id', Auth::user()->current_subuser)->whereNull('end_datetime')->count();
        $data['alltrades_count'] = $alltrades_count;
        $data['activetrades_count'] = $activetrades_count;
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