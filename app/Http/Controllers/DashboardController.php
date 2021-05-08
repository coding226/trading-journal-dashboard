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
        $comment = Subuser::find(1);
        dd($comment->user->name);
        return view('users.dashboard.index', ['preloader' => true]);
    }
}
