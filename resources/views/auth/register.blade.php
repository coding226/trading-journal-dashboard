@extends('layouts.auth')

@section('content')
    <!-- login page start-->
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-xl-5"><img class="bg-img-cover bg-center" src="../assets/images/login/3.jpg" alt="looginpage"></div>
            <div class="col-xl-7 p-0">
                <div class="login-card">
                    <div>
                        <div><a class="logo" href="index.html"><img class="img-fluid for-light" src="../assets/images/logo/login.png" alt="looginpage"><img class="img-fluid for-dark" src="../assets/images/logo/logo_dark.png" alt="looginpage"></a></div>
                        <div class="login-main">
                        @isset($url)
                        <form class="theme-form" method="POST" action='{{ url("register/$url") }}' aria-label="{{ __('Register') }}">
                        @else
                        <form class="theme-form" method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @endisset
                            @csrf
                                <h4>Create your account</h4>
                                <p>Enter your personal details to create account</p>
                                <div class="form-group">
                                    <label class="col-form-label pt-0">Your Name</label>
                                    <div class="row g-2">
                                        <div class="col-6">
                                            <input class="form-control @error('firstname') is-invalid @enderror" type="text" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus placeholder="First name">
                                            @error('firstname')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-6">
                                            <input class="form-control @error('lastname') is-invalid @enderror" type="text"name="lastname"  value="{{ old('lastname') }}" required autocomplete="lastname" autofocus placeholder="Last name">
                                            @error('lastname')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-form-label">Username</label>
                                            <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Username">
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-form-label">Email Address</label>
                                            <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Test@gmail.com">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-form-label">Location</label>
                                            <input class="form-control @error('location') is-invalid @enderror" type="text" name="location" value="{{ old('location') }}" autocomplete="location" placeholder="Location">
                                            @error('location')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-form-label">Contact Number</label>
                                            <div class="form-input position-relative">
                                                <input class="form-control @error('number') is-invalid @enderror" type="text" value="{{ old('number') }}" name="number" required autocomplete="number" placeholder="Enter your number">
                                            @error('number')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-form-label">Password</label>
                                            <div class="form-input position-relative">
                                                <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="new-password" placeholder="*********">
                                                <div class="show-hide"><span class="show"></span></div>
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-form-label">Password Confirm</label>
                                            <div class="form-input position-relative">
                                                <input class="form-control @error('password') is-invalid @enderror" id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="*********">
                                                <div class="show-hide"><span class="show"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label">Payment Option</label>
                                    <div class="m-t-15 m-checkbox-inline custom-radio-ml">
                                        <div class="form-check form-check-inline radio radio-primary">
                                            <input class="form-check-input" id="radioinline1" type="radio" name="payment" value="option1" checked>
                                            <label class="form-check-label mb-0" for="radioinline1">Stripe</label>
                                        </div>
                                        <div class="form-check form-check-inline radio radio-primary">
                                            <input class="form-check-input" id="radioinline2" type="radio" name="payment" value="option2">
                                            <label class="form-check-label mb-0" for="radioinline2">Paypal</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="d-block" for="chk-ani">
                                        <input class="checkbox_animated mb-3" id="chk-ani1" name="subscription" type="checkbox" checked="">You want to get subscription?
                                    </label>
                                    <label class="d-block" for="chk-ani1">
                                        <input class="checkbox_animated mb-3" id="chk-ani2" type="checkbox">Agree with<a class="ms-2" href="#">Privacy Policy</a>
                                    </label>
                                    <button class="btn btn-primary btn-block w-100" type="submit">Create Account</button>
                                </div>
                                <!-- <div class="form-group mb-0">
                                    <div class="checkbox p-0">
                                        <input id="checkbox2" type="checkbox">
                                        <label class="text-muted" for="checkbox1">Agree with<a class="ms-2" href="#">Privacy Policy</a></label>
                                    </div>
                                    <button class="btn btn-primary btn-block w-100" type="submit">Create Account</button>
                                </div> -->
                                <p class="mt-4 mb-0 text-center">Already have an account?<a class="ms-2" href="{{ route('login') }}">Sign in</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection