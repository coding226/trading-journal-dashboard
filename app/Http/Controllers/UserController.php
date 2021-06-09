<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Validator;
use App\Models\User;
use App\Models\Subuser;
use App\Models\Currency;
use Auth;

class UserController extends Controller
{
    public function __construct()
    {

    }
    
    public function setting()
    {
        $curriences = Currency::all();
        $acc_num = count(Subuser::where('user_id', Auth::user()->id)->get());
        return view('users.account.setting', compact('curriences','acc_num'));
    }

    public function new_account()
    {
        $curriences = Currency::all();
        return view('users.account.new-account', compact('curriences'));
    }
    
    public function create_subaccount(Request $request)
    {   
        $subuser = new Subuser;
        $current_userid = Auth::user()->id;
        $subuser->user_id = $current_userid;
        $subuser->acc_num = $current_userid."-". $this->get_subacc_count($current_userid);
        $subuser->username = $request->username;
        $subuser->desc = $request->account_desc;
        $subuser->currency = $request->currency;
        $subuser->starting_bal = $request->startcapital;
        $subuser->save();
        User::where('id', Auth::user()->id)->update(['current_subuser'=> $subuser->id]);
        return redirect()->back();
    }

    public function change_user($id) {
        User::where('id', Auth::user()->id)->update(['current_subuser' => $id]);
        return redirect('/dashboard');
    }

    public function get_subacc_count($user_id) {
        $subuser = Subuser::where('user_id', '=', $user_id)->get();
        $count = $subuser->count() + 1;
        return $count;
    }


    public function mainsetting(Request $request)
    {
        
        $subscription = (isset($request['subscription'])) ? 1 : 0;
        if (Auth::attempt(['email' => Auth::user()->email, 'password' => $request->password, 'status' => 1])) {
            $user = User::where('id', Auth::user()->id)->first();
            $user->firstname = $request->firstname;
            $user->lastname = $request->lastname;
            $user->email = $request->email;
            $user->location = $request->location;
            $user->subscription = $subscription;
            if($request->has('avatar_img')) {
                if(\File::exists(public_path($user->avatar))){
                    \File::delete(public_path($user->avatar));
                }
                $image = $request->file('avatar_img');
                $new_name = Auth::user()->id . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('assets/images/avatar'), $new_name);
                $user->avatar = 'assets/images/avatar/'.$new_name;
            }
            $user->save();
            $subuser = Subuser::find(Auth::user()->current_subuser);
            $subuser->currency = $request->currency;
            $subuser->save();
            return json_encode(true);
        }
        return json_encode(false);
    }

    
    public function changepassword(Request $request)
    {
        if (Auth::attempt(['email' => Auth::user()->email, 'password' => $request->currenetpassword, 'status' => 1])) {
            $user = User::where('id', Auth::user()->id)->first();
            $user->password = Hash::make($request->newpassword);
            $user->save();
            return json_encode(true);
        }
        return json_encode(false);
    }


    public function depositwithdrawal(Request $request)
    {
        $subuser = Subuser::find($request->subuser);
        if($request->fundtype){
            if($request->amount > $subuser->balance){
                $response['status'] = 0;
                return json_encode($response);
            }
            $subuser->balance = $subuser->balance - $request->amount;
        }
        else{
            $subuser->balance = $subuser->balance + $request->amount;
        }
        $subuser->save();
        $response['balance'] = $subuser->balance;
        if($request->subser == Auth::user()->current_subuser){
            $response['status'] = 1;
        }
        else{
            $response['status'] = 2;
        }
        return json_encode($response);
        
    }


    public function getstartingbal(Request $request)
    {
        $subuser = Subuser::find($request->subuser);
        return json_encode($subuser->starting_bal);
    }


    public function setstartingbal(Request $request)
    {
        $subuser = Subuser::find($request->stsubuser);
        $subuser->starting_bal = $request->stamount;
        $subuser->save();
        $response['starting_bal'] = $subuser->starting_bal;
        $response['status'] = 1;
        return json_encode($response);
        
    }


    public function darkmode(Request $request)
    {
        if($request->mode == 1){
            if(Auth::user()->darkmode == ''){
                User::where('id', Auth::user()->id)->update(['darkmode' => 'dark-only']);
            }
            else{
                User::where('id', Auth::user()->id)->update(['darkmode' => '']);
            }
        }
        else{
            User::where('id', Auth::user()->id)->update(['darkmode' => $request->mode]);
        }

    }
}

