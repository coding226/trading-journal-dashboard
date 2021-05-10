<?php

namespace App\Http\Controllers;

use App\Models\Trade;
use App\Models\Subuser;
use App\Models\Image;
use App\Models\Symbol;
use Illuminate\Http\Request;
use Session;

class TradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.trade.mytrades');

    }

    public function addnewtrade()
    {
        $symbols = Symbol::get();
        return view('users.trade.new-trade', compact('symbols'));
    }


    public function activetrades()
    {
        return view('users.trade.active-trade');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $image = new Image;
        $image->before_local = $request->before_img;
        $image->before_link = $request->before_img;
        $image->after_local = $request->after_img;
        $image->after_link = $request->after_img;
        $image->save();
        $trade = new Trade;
        $trade->subuser_id = Session::get('subuser')->acc_num-10000;
        $trade->image_id = $image->id;
        $trade->symbol_id = $request->symbol_id;
        $trade->start_datetime = $request->start_date;
        $trade->end_datetime = $request->end_date;
        $trade->long_short = $request->long_short;
        $trade->pips = $request->pips;
        $trade->fees = $request->fees;
        $trade->profit_gl = $request->profit_gl;
        $trade->percentage_gl = $request->percentage_gl;
        $trade->open_price = $request->open_price;
        $trade->close_price = $request->close_price;
        $trade->description = $request->description;
        $trade->save();

        dd($trade);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trade  $trade
     * @return \Illuminate\Http\Response
     */
    public function show(Trade $trade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trade  $trade
     * @return \Illuminate\Http\Response
     */
    public function edit(Trade $trade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Trade  $trade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trade $trade)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trade  $trade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trade $trade)
    {
        //
    }
}
