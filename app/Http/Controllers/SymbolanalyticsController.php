<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SymbolanalyticsController extends Controller
{
    public function __construct()
    {
        
    }

    
    public function index()
    {
        return view('users.symbolanalytics.index');
    }
}