<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Validator;
use App\Models\User;
use App\Models\Subuser;
use Auth;

class UserController extends Controller
{
    public function __construct()
    {

    }
    
    public function setting()
    {
        return view('users.account.setting');
    }

    public function new_account()
    {
        return view('users.account.new-account');
    }
    
    public function create_subaccount(Request $request)
    {   
        $current_userid = Auth::user()->id;
        $subuser = new Subuser;
        $subuser->user_id = $current_userid;
        $subuser->acc_num = $current_userid."-". $this->get_subacc_count($current_userid);
        $subuser->username = $request->username;
        $subuser->desc = $request->account_desc;
        $subuser->save();
        return json_encode(true);
    }

    public function change_user($id) {
        $subuser = Subuser::where('id', $id)->first();
        session(['subuser' => $subuser]);
        return redirect('/dashboard')->with('message', 'Login Failed');
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
                $image = $request->file('avatar_img');
                $new_name = Auth::user()->id . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('assets/images/avatar'), $new_name);
                $user->avatar = $new_name;
            }
            $user->save();
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


    public function othersetting(Request $request)
    {
        $user = User::where('id', Auth::user()->id)->first();
        $user->startcapital = $request->startcapital;
        $user->currency = $request->currency;
        $user->withamount = $request->withamount;
        $user->save();
        return json_encode(true);
    }
}

