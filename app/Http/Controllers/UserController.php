<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {

    }


    public function setting()
    {
        return view('users.account.setting');
    }


    public function mainsetting(Request $request)
    {
        if (Auth::attempt(['email' => Auth::user()->email, 'password' => $request->password, 'status' => 1])) {
            $user = User::where('id', Auth::user()->id)->first();
            $user->firstname = $request->firstname;
            $user->lastname = $request->lastname;
            $user->email = $request->email;
            $user->save();
        }
        return redirect()->back();
    }

    
    public function changepassword(Request $request)
    {
        if (Auth::attempt(['email' => Auth::user()->email, 'password' => $request->currenetpassword, 'status' => 1])) {
            $user = User::where('id', Auth::user()->id)->first();
            $user->password = Hash::make($request->newpassword);
            $user->save();
        }
        return redirect()->back();
    }


    public function othersetting(Request $request)
    {
        $user = User::where('id', Auth::user()->id)->first();
        $user->startcapital = $request->startcapital;
        $user->currency = $request->currency;
        $user->withamount = $request->withamount;
        $user->save();
        return redirect()->back();
    }
}

