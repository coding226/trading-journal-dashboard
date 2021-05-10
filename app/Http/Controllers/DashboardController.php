<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Subuser;

class DashboardController extends Controller
{
    public function __construct()
    {
        
    }

    
    public function index()
    {
        return view('users.dashboard.index');
    }
}
