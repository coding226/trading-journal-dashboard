<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MemberController extends Controller
{

    public function index(){
        return view('admin.member.index', ['url' => 'admin']);
    }
}
