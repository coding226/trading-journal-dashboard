<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        
    }

    
    public function index()
    {
        return view('users.dashboard.index', ['preloader' => true]);
    }
}
