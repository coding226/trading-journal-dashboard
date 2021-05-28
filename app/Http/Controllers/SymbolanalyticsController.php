<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trade;
use Auth;

class SymbolanalyticsController extends Controller
{
    public function __construct()
    {
        
    }

    
    public function index()
    {
        $symbols = Trade::where('subuser_id', Auth::user()->current_subuser)->whereNotNull('end_datetime')->groupBy('symbol_id')->selectRaw('sum(percentage_gl) as percentage_gl_sum, sum(profit_gl) as profit_gl_sum, count(*) as symbol_count, symbol_id')->orderBy('percentage_gl_sum','desc')->get();
        return view('users.symbolanalytics.index')->with([
            'symbols' => $symbols
        ]);
    }

    public function symbolmore(Request $request, $symbolid)
    {
        dd($symbolid);
        return view('users.symbolanalytics.moredata');
    }

}
