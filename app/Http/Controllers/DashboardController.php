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
        return view("users.dashboard.index");
    }
    
    public function contactus()
    {
        $subuser = Subuser::where('id', Auth::user()->current_subuser)->first();
        return view('users.contactus.index',compact('subuser'));
    }
}
