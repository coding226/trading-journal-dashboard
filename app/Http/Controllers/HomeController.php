<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subuser;
use App\Models\ContactUs;
use Validator;
use Auth;

class HomeController extends Controller
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
    public function index()
    {
        return view('home');
    }

    public function course()
    {
        return view('users.course.index');
    }

    public function contactus()
    {
        $subuser = Subuser::where('id', Auth::user()->current_subuser)->first();
        return view('users.contactus.index',compact('subuser'));
    }

    public function validateGCaptch(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($input,[
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
            // 'g-recaptcha-response' => 'required',
        ]);

        if ($validator->passes()){
            ContactUs::create($input);
            return redirect('/contactus')->with('status', 'Google V3 Recaptcha has been validated form');
        }

        return redirect()->back()->withErrors($validator)->withInput();
    }
}
