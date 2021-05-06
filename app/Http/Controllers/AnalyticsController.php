<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class AnalyticsController extends Controller
{
    public function __construct()
    {
        
    }
    //all analytics
    public function index()
    {
        return view('users.analytics.index');
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