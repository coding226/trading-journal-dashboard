<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransactionController extends Controller
{

    public function index(){
        return view('admin.transaction.index', ['url' => 'admin']);
    }
}
