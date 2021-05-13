<?php

namespace App\Http\Controllers;

use App\Models\Trade;
use App\Models\Subuser;
use App\Models\Beimage;
use App\Models\Afimage;
use App\Models\Symbol;
use Illuminate\Support\Facades\DB;
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
        $trades = DB::select("SELECT t.*, i.*, s.symbol FROM trades as t JOIN images as i ON i.id = t.image_id JOIN symbols as s ON s.id = t.symbol_id WHERE t.subuser_id = 1");
        return view('users.trade.mytrades', compact('trades'));
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

        $trade = new Trade;
        $trade->subuser_id = Session::get('subuser')->acc_num;
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
        
        $arrContextOptions=array(
            "ssl"=>array(
                "verify_peer"=>false,
                "verify_peer_name"=>false,
            ),
        ); 

        for($i=1; $i<=$request->before_img_count; $i++)
        {
            $before_image = new Beimage;
            $before_image->trade_id = $trade->id;

            if ($request->hasFile('before_img_file_'.$i)) {
                $image=$request->file('before_img_file_'.$i);
                $imagename = strtotime(date('Y-m-d H:i:s')).".". $image->getClientOriginalExtension();
                $image->move('assets/images/before_images', $imagename);
                $before_image->before_file = 'assets/images/before_images/'.$imagename;
                $before_image->before_link = '';
            }
            else {
                $url = $request->input('before_img_link_'.$i); 
                // $namey = basename($url);
                // $imagename = strtotime(date('Y-m-d H:i:s')).".". substr($namey, strpos($namey, '.')+1);
                // file_put_contents( 'assets/images/before_images/'.$imagename, file_get_contents($url, false, stream_context_create($arrContextOptions)));
                $before_image->before_file = '';
                $before_image->before_link = $url;
            }
            $before_image->save();
        }

        for($i=1; $i<$request->after_img_count; $i++)
        {
            $after_image = new Afimage;
            $after_image->trade_id = $trade->id;

            if ($request->hasFile('after_img_file_'.$i)) {
                $image=$request->file('after_img_file_'.$i);
                $imagename = strtotime(date('Y-m-d H:i:s')).".". $image->getClientOriginalExtension();
                $image->move('assets/images/after_images', $imagename);
                $after_image->after_file = 'assets/images/after_images/'.$imagename;
                $after_image->after_link = '';
            }
            else {
                $url = $request->input('after_img_link_'.$i); 
                // $namey = basename($url);
                // $imagename = strtotime(date('Y-m-d H:i:s')).".". substr($namey, strpos($namey, '.')+1);
                // file_put_contents( 'assets/images/after_images/'.$imagename, file_get_contents($url, false, stream_context_create($arrContextOptions)));
                $after_image->after_file = '';
                $after_image->after_link = $url;
            }
            $after_image->save();
        }

        return redirect()->back();

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
