<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToolsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function notes()
    {
        return view('users.tools.note');
    }

    public function ecocal()
    {
        return view('users.tools.ecocal');
    }

    public function nationalcal()
    {
        return view('users.tools.nationalcal');
    }

    public function markethour()
    {
        return view('users.tools.markethour');
    }

    public function currency()
    {
        return view('users.tools.currency');
    }
}
