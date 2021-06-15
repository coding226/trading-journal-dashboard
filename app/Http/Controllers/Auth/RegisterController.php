<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Admin;
use App\Models\Subuser;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {   
        return Validator::make($data, [
            'name' => ['required', 'string', 'unique:users'],
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            // 'number' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $payment = ($data['payment'] == 'option1') ? 'stripe' : 'paypal';
        $subscription = (isset($data['subscription'])) ? 1 : 0;
        $user = User::create([
            'name' => $data['name'],
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'location' => $data['location'],
            // 'number' => $data['number'],
            'password' => Hash::make($data['password']),
            'payment' => $payment,
            'subscription' => $subscription,
            'ipaddress' => \Request::ip(),
            'timezone' => json_decode(file_get_contents('http://ip-api.com/json/' . \Request::ip()))->timezone
        ]);

        $subuser = Subuser::create([
            'user_id' => $user->id,
            'acc_num' => $user->id,
            'username' => 'Main',
            'desc' => 'Main',
        ]);

        $user = User::find($user->id);
        $user->current_subuser = $subuser->id;
        $user->save();

        return $user;
    }

}