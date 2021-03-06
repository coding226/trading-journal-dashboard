<?php

namespace App\Http\Controllers;

use App\Models\Trade;
use App\Models\Subuser;
use App\Models\Beimage;
use App\Models\Afimage;
use App\Models\Symbol;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Session;
use Auth;
use Carbon\CarbonInterval;
use Carbon\Carbon;
use DateTime;
use PDF;
use App\Exports\TradesExport;
use App\Imports\TradesImport;
use Maatwebsite\Excel\Facades\Excel;

class TradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trades = Trade::where('subuser_id', Auth::user()->current_subuser)->whereNotNull('end_datetime')->get();
        return view('users.trade.mytrades', compact('trades'));
    }

    public function viewpdf($username, Request $request)
    {
        $user = User::where('name', $username)->first();
        
        if($user){
            $current_subuser = $user->current_subuser;
            $data['trade'] = Trade::where('subuser_id', $current_subuser)->where('id', $request->tradeid)->first();
            $data['beimages'] = Beimage::where('trade_id', $request->tradeid)->get();
            $data['afimages'] = Afimage::where('trade_id', $request->tradeid)->get();
            return view('users.trade.pdfview')->with('data', $data);
        }
        else{
            return redirect()->back();
        }
    }

    public function addnewtrade()
    {
        $symbols = Symbol::get();
        $tprofit = Trade::where('subuser_id', Auth::user()->current_subuser)->sum('profit_gl');
        $tfee = Trade::where('subuser_id', Auth::user()->current_subuser)->sum('fees');
        $account_balance = Auth::user()->current_user->starting_bal + Auth::user()->current_user->balance + $tprofit - $tfee;
        return view('users.trade.new-trade', compact('symbols','account_balance'));
    }


    public function activetrades()
    {
        $trades = Trade::where('subuser_id', Auth::user()->current_subuser)->whereNull('end_datetime')->get();
        return view('users.trade.active-trade', compact('trades'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $trade = new Trade;
        $trade->trade_num = count(Trade::where('subuser_id', Auth::user()->current_subuser)->get())+1;
        $trade->subuser_id = Auth::user()->current_subuser;
        $trade->symbol_id = $request->symbol_id;
        $trade->start_datetime = Carbon::createFromFormat('m/d/Y', $request->start_date)->format("Y-m-d").' '.$request->start_time;
        if($request->end_date){
            $trade->end_datetime = Carbon::createFromFormat('m/d/Y', $request->end_date)->format("Y-m-d").' '.$request->end_time;
            // $trade->duration = CarbonInterval::seconds(strtotime($request->start_date) - strtotime($request->end_date))->cascade()->forHumans();
            if(abs(strtotime($trade->start_datetime) - strtotime($trade->end_datetime)) <  630720000)
                $trade->duration = abs(strtotime($trade->start_datetime) - strtotime($trade->end_datetime));
        }
        $trade->long_short = $request->long_short;
        $trade->positionsize = $request->positionsize;
        $trade->pips = $request->pips;
        $trade->fees = $request->fees;
        $trade->profit_gl = $request->profit_gl;
        $trade->percentage_gl = $request->percentage_gl;
        $trade->stoplossval = $request->stoplossval;
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
                $before_image->save();
            }
            else {
                $url = $request->input('before_img_link_'.$i); 
                // $namey = basename($url);
                // $imagename = strtotime(date('Y-m-d H:i:s')).".". substr($namey, strpos($namey, '.')+1);
                // file_put_contents( 'assets/images/before_images/'.$imagename, file_get_contents($url, false, stream_context_create($arrContextOptions)));
                $before_image->before_file = '';
                if($url){
                    $before_image->before_link = $url;
                    $before_image->save();
                }
            }
        }

        for($i=1; $i<=$request->after_img_count; $i++)
        {
            $after_image = new Afimage;
            $after_image->trade_id = $trade->id;

            if ($request->hasFile('after_img_file_'.$i)) {
                $image=$request->file('after_img_file_'.$i);
                $imagename = strtotime(date('Y-m-d H:i:s')).".". $image->getClientOriginalExtension();
                $image->move('assets/images/after_images', $imagename);
                $after_image->after_file = 'assets/images/after_images/'.$imagename;
                $after_image->after_link = '';
                $after_image->save();
            }
            else {
                $url = $request->input('after_img_link_'.$i); 
                // $namey = basename($url);
                // $imagename = strtotime(date('Y-m-d H:i:s')).".". substr($namey, strpos($namey, '.')+1);
                // file_put_contents( 'assets/images/after_images/'.$imagename, file_get_contents($url, false, stream_context_create($arrContextOptions)));
                $after_image->after_file = '';
                if($url){
                    $after_image->after_link = $url;
                    $after_image->save();
                }
            }
            
        }

        return redirect()->back()->with('message', 'New trade stored successfully.');

    }

    public function import(Request $request) 
    {   
        $request->validate([
            "file" => "required",
        ]);

        $file = $request->file('file');
        $filename = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        $fileSize = $file->getSize();

        $valid_extension = array("csv", "xlsx");
        $maxFileSize = 2097152; 
        if(in_array(strtolower($extension),$valid_extension)){
            if($fileSize <= $maxFileSize){
                Excel::import(new TradesImport, $file);
                return back();
            }
            else{
                return redirect()->back()->with('message', 'File too large. File must be less than 2MB.');
            }
        }
        else{
            return redirect()->back()->with('message', 'Invalid File Extension.');
        }
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
    public function show(Trade $trade, $username, Request $request)
    {
        $user = User::where('name', $username)->first();
        if($user){
            $current_subuser = $user->current_subuser;
            $trade = Trade::where('subuser_id', $current_subuser)->where('id', $request->tradeid)->first();
            $symbols = Symbol::get();
            $beimages = Beimage::where('trade_id', $request->tradeid)->get();
            $afimages = Afimage::where('trade_id', $request->tradeid)->get();
            return view('users.trade.viewtrade', compact('trade','symbols','beimages','afimages'));
        }
        else{
            return redirect()->back();
        }
    }

    public function createPDF($username, Request $request)
    {
        $user = User::where('name', $username)->first();
        
        if($user){
            $current_subuser = $user->current_subuser;
            $data['trade'] = Trade::where('subuser_id', $current_subuser)->where('id', $request->tradeid)->first();
            $data['beimages'] = Beimage::where('trade_id', $request->tradeid)->get();
            $data['afimages'] = Afimage::where('trade_id', $request->tradeid)->get();
            $filename = $username.'_'.$user->current_user->username.'_'.$data['trade']->trade_num.'.pdf';
            view()->share('data',$data);
            $pdf = PDF::loadView('users.trade.pdfview', $data);
            return $pdf->download($filename);
        }
        else{
            return redirect()->back();
        }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trade  $trade
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Trade $trade, $username)
    {
        $user = User::where('name', $username)->first();
        if($user){
            $current_subuser = $user->current_subuser;
            $trade = Trade::where('subuser_id', $current_subuser)->where('id', $request->tradeid)->first();
            $tprofit = Trade::where('subuser_id', $current_subuser)->sum('profit_gl');
            $tfee = Trade::where('subuser_id', $current_subuser)->sum('fees');
            $account_balance = Auth::user()->current_user->starting_bal + Auth::user()->current_user->balance + $tprofit - $tfee;
            $symbols = Symbol::get();
            $beimages = Beimage::where('trade_id', $request->tradeid)->get();
            $afimages = Afimage::where('trade_id', $request->tradeid)->get();
            return view('users.trade.edittrade', compact('trade','symbols','beimages','afimages', 'account_balance'));
        }
        else{
            return redirect()->back();
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Trade  $trade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trade $trade, $tradeid)
    {
        $trade = Trade::find($tradeid);

        $tprofit = Trade::where('subuser_id', $current_subuser)->sum('profit_gl');
        $tfee = Trade::where('subuser_id', $current_subuser)->sum('fees');
        $account_balance = Auth::user()->current_user->starting_bal + Auth::user()->current_user->balance + $tprofit - $tfee;

        $trade->symbol_id = $request->symbol_id;
        // $trade->start_datetime = Carbon::createFromFormat('m/d/Y H:i A', $request->start_date)->format("Y-m-d H:i:s");
        $trade->start_datetime = Carbon::createFromFormat('m/d/Y', $request->start_date)->format("Y-m-d").' '.$request->start_time;
        if($request->end_date){
            // $trade->end_datetime = Carbon::createFromFormat('m/d/Y H:i A', $request->end_date)->format("Y-m-d H:i:s");
            $trade->end_datetime = Carbon::createFromFormat('m/d/Y', $request->end_date)->format("Y-m-d").' '.$request->end_time;
            // $trade->duration = CarbonInterval::seconds(strtotime($request->start_date) - strtotime($request->end_date))->cascade()->forHumans();
            if(abs(strtotime($trade->start_datetime) - strtotime($trade->end_datetime)) <  630720000)
                $trade->duration = abs(strtotime($trade->start_datetime) - strtotime($trade->end_datetime));
        }
        $trade->long_short = $request->long_short;
        $trade->positionsize = $request->positionsize;
        $trade->pips = $request->pips;
        $trade->fees = $request->fees;
        $trade->profit_gl = $request->profit_gl;
        $trade->percentage_gl = ($request->profit_gl - $request->fees)*100/$account_balance;
        $trade->open_price = $request->open_price;
        $trade->stoplossval = $request->stoplossval;
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
            if($request->input('before_img_id_'.$i)){
                $before_image = Beimage::find($request->input('before_img_id_'.$i));
                if(!$request->hasFile('before_img_file_'.$i) && $request->input('before_img_link_'.$i) == '' && $request->input('before_img_file_'.$i) == ''){
                    // dd($request->input('before_img_file_'.$i));
                    // if(\File::exists(public_path('assets/images/before_images/'.$before_image->before_file))){
                    //     \File::delete(public_path('assets/images/before_images/'.$before_image->before_file));
                    // }
                    // $before_image->delete();
                    continue;
                }
            }
            else{
                $before_image = new Beimage;
            }

            $before_image->trade_id = $trade->id;

            if ($request->hasFile('before_img_file_'.$i)) {
                $image=$request->file('before_img_file_'.$i);
                $imagename = strtotime(date('Y-m-d H:i:s')).".". $image->getClientOriginalExtension();
                $image->move('assets/images/before_images', $imagename);
                if(\File::exists(public_path($before_image->before_file))){
                    \File::delete(public_path($before_image->before_file));
                }
                $before_image->before_file = 'assets/images/before_images/'.$imagename;
                $before_image->before_link = '';
                $before_image->save();
            }
            else {
                $url = $request->input('before_img_link_'.$i); 
                // $namey = basename($url);
                // $imagename = strtotime(date('Y-m-d H:i:s')).".". substr($namey, strpos($namey, '.')+1);
                // file_put_contents( 'assets/images/before_images/'.$imagename, file_get_contents($url, false, stream_context_create($arrContextOptions)));
                $before_image->before_file = '';
                if($url){
                    $before_image->before_link = $url;
                    $before_image->save();
                }
            }
            
        }

        for($i=1; $i<=$request->after_img_count; $i++)
        {
            if($request->input('after_img_id_'.$i)){
                $after_image = Afimage::find($request->input('after_img_id_'.$i));
                if(!$request->hasFile('after_img_file_'.$i) && $request->input('after_img_link_'.$i) == '' && $request->input('after_img_file_'.$i) == ''){
                    continue;
                }
            }
            else{
                $after_image = new Afimage;
            }

            $after_image->trade_id = $trade->id;

            if ($request->hasFile('after_img_file_'.$i)) {
                $image=$request->file('after_img_file_'.$i);
                $imagename = strtotime(date('Y-m-d H:i:s')).".". $image->getClientOriginalExtension();
                $image->move('assets/images/after_images', $imagename);
                if(\File::exists(public_path($after_image->after_file))){
                    \File::delete(public_path($after_image->after_file));
                }
                $after_image->after_file = 'assets/images/after_images/'.$imagename;
                $after_image->after_link = '';
                $after_image->save();
            }
            else {
                $url = $request->input('after_img_link_'.$i); 
                // $namey = basename($url);
                // $imagename = strtotime(date('Y-m-d H:i:s')).".". substr($namey, strpos($namey, '.')+1);
                // file_put_contents( 'assets/images/after_images/'.$imagename, file_get_contents($url, false, stream_context_create($arrContextOptions)));
                $after_image->after_file = '';
                if($url){
                    $after_image->after_link = $url;
                    $after_image->save();
                }
            }
            
        }

        return redirect()->route('mytrades.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trade  $trade
     * @return \Illuminate\Http\Response
     */
    public function delete(Trade $trade, Request $request)
    {
        $trade = Trade::find($request->tradeid);
        $trade->delete();
        $beimages = Beimage::where('trade_id', $request->tradeid)->get();
        foreach($beimages as $beimage){
            if(\File::exists(public_path($beimage->before_file))){
                \File::delete(public_path($beimage->before_file));
            }
            $beimage->delete();
        }
        $afimages = Afimage::where('trade_id', $request->tradeid)->get();
        foreach($afimages as $afimage){
            if(\File::exists(public_path($afimage->after_file))){
                \File::delete(public_path($afimage->after_file));
            }
            $afimage->delete();
        }
        return redirect()->back();
    }

    public function datefilter(Request $request)
    {
        $startdate = Carbon::createFromFormat('m/d/Y', $request->startdate)->format("Y-m-d H:i:s");
        $enddate = Carbon::createFromFormat('m/d/Y', $request->enddate)->format("Y-m-d H:i:s");
        $trades = Trade::where('subuser_id', Auth::user()->current_subuser)->where('start_datetime', '<', $enddate)->where('end_datetime', '>', $startdate)->get();
        $completed = 1;
        $returnHTML = view('users.trade.filtered')->with(['trades' => $trades, 'completed' => $completed])->render();
        return response()->json(array('success' => true, 'html'=>$returnHTML));
    }

    public function activedatefilter(Request $request)
    {
        $currenttime = new Carbon($request->currenttime);
        $currenttime = $currenttime->timestamp;
        $startdate = Carbon::createFromFormat('m/d/Y', $request->startdate)->format("Y-m-d H:i:s");
        $enddate = Carbon::createFromFormat('m/d/Y', $request->enddate)->format("Y-m-d H:i:s");
        $trades = Trade::where('subuser_id', Auth::user()->current_subuser)->whereNull('end_datetime')->where('start_datetime', '<', $enddate)->where('start_datetime', '>', $startdate)->get();
        $returnHTML = view('users.trade.filtered')->with(['trades' => $trades, 'currenttime' => $currenttime])->render();
        return response()->json(array('success' => true, 'html'=>$returnHTML));
    }
}
