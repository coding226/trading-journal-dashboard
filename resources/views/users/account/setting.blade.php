@extends('layouts.app')
@section('title')
    <title>Account Setting | Trading Journal</title>
@endsection
@section('style')
@endsection
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>Account Setting</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item active"> Account Setting</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="edit-profile">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">My Profile</h4>
                                <div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a></div>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ Route('user.mainsetting') }}" class="card">
                                @csrf
                                    <div class="row mb-2">
                                        <div class="profile-title">
                                            <div class="media"> <img class="img-70 rounded-circle" alt="" src="../assets/images/user/7.jpg">
                                                <div class="media-body">
                                                    <h5 class="mb-1">{{ Auth::user()->name}}</h5>
                                                    <p>BEIGNNER</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="mb-3">
                                        <label class="form-label">Username</label>
                                        <input class="form-control" type="text" placeholder="Username">
                                    </div> -->
                                    <div class="mb-3">
                                        <label class="form-label">Real Name</label>
                                        <div class="row g-2">
                                            <div class="col-6">
                                                <input class="form-control" type="text" required name="firstname" placeholder="First name" value="{{ Auth::user()->firstname }}">
                                            </div>
                                            <div class="col-6">
                                                <input class="form-control" type="text" required name="lastname" placeholder="Last name" value="{{ Auth::user()->lastname }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Email-Address</label>
                                        <input class="form-control" type="email" name="email" placeholder="your-email@domain.com" value="{{ Auth::user()->email }}">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <input class="form-control" type="password" name="password" value="password">
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label m-r-10">Subscription</label>
                                        <div class="media-body text-end">
                                            <label class="switch">
                                                <input type="checkbox" name="subscription" @if (Auth::user()->subscription) checked @endif><span class="switch-state"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-footer">
                                        <button class="btn btn-primary btn-block">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <form method="POST" action="{{ Route('user.changepassword') }}" class="card">
                            @csrf
                            <div class="card-header">
                                <h4 class="card-title mb-0">Change Password</h4>
                                <div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a></div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Old Password</label>
                                            <input class="form-control" type="password" value="password" name="currenetpassword">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">New Password</label>
                                            <input class="form-control" type="password" value="password" name="newpassword">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">New Password Confirm</label>
                                            <input class="form-control" type="password" value="password" name="newpasswordconfirm">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <button class="btn btn-primary" type="submit">Update</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-xl-4">
                        <form method="POST" action="{{ Route('user.othersetting') }}" class="card">
                            @csrf
                            <div class="card-header">
                                <h4 class="card-title mb-0">Other Setting</h4>
                                <div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a></div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Starting Capital</label>
                                            <input class="form-control" type="text" name="startcapital" placeholder="Enter Account Starting Capital here for Journal" value="{{ Auth::user()->startcapital }}">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Currency</label>
                                            <select class="form-control btn-square" name="currency">
                                                <option value="{{ Auth::user()->currency }}">{{ Auth::user()->currency }}</option>
                                                <option value="GBP">GBP</option>
                                                <option value="USD">USD</option>
                                                <option value="EURO">Euro</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Withdrawal Amount</label>
                                            <input class="form-control" type="number" name="withamount" placeholder="Enter in a withdrawal amount from the account" value="{{ Auth::user()->withamount }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <button class="btn btn-primary" type="submit">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
@endsection
@section('script')
    <script src="../assets/js/dashboard/default.js"></script>
    <script src="../assets/js/tooltip-init.js"></script>
@endsection