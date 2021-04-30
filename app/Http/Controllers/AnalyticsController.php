<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnalyticsController extends Controller
{
    public function __construct()
    {
        
    }

    
    public function index()
    {
        return view('users.analytics.index');
    }
}
