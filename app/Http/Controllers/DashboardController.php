<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Subuser;
use Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        
    }

    
    public function index()
    {
        $subuser = Subuser::where('acc_num', Auth::user()->id + 10000)->first();
        session(['subuser' => $subuser]);
        $url = 'dashboard';
        return view("users.dashboard.index");
    }
    
    public function contactus()
    {
        return view('users.contactus.index');
    }
}
