@extends('layouts.app')
@section('title')
    <title>Account Setting | Trading Buddy</title>
@endsection
@section('style')
<style>
    .avatar-wrapper {
        position: relative;
        height: 100px;
        width: 100px;
        border-radius: 50%;
        overflow: hidden;
        box-shadow: 1px 1px 15px -5px black;
        transition: all 0.3s ease;
    }
    .avatar-wrapper:hover {
        transform: scale(1.05);
        cursor: pointer;
    }
    .avatar-wrapper:hover .profile-pic {
        opacity: 0.5;   
    }
    .avatar-wrapper .profile-pic {
        height: 100%;
        width: 100%;
        transition: all 0.3s ease;
    }
    .avatar-wrapper .profile-pic:after {
        font-family: FontAwesome;
        content: "";
        top: -13px;
        left: 0;
        width: 100%;
        height: 100%;
        position: absolute;
        font-size: 110px;
        background: #ecf0f1;
        color: #34495e;
        text-align: center;
    }
    .avatar-wrapper .upload-button {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
    }
    .avatar-wrapper .upload-button .fa-arrow-circle-up {
        position: absolute;
        font-size: 130px;
        top: -13px;
        left: -6px;
        text-align: center;
        opacity: 0;
        transition: all 0.3s ease;
        color: #34495e;
    }
    .avatar-wrapper .upload-button:hover .fa-arrow-circle-up {
        opacity: 0.9;
    }
</style>
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
                                <form method="POST" onsubmit="return false;" id="mainsettingform">
                                {{-- <form method="POST" action="{{ Route('user.mainsetting') }}"> --}}
                                @csrf
                                    <div class="row mb-2">
                                        <div class="profile-title">
                                            <div class="media">
                                                {{-- <img class="img-70 rounded-circle" alt="" src="../assets/images/user/7.jpg"> --}}
                                                {{-- <div class="user-image">
                                                    <div class="avatar"><img alt="" src="../assets/images/user/7.jpg"></div>
                                                    <div class="icon-wrapper" id="change_avatar"><i class="icofont icofont-pencil-alt-5"></i></div>
                                                </div> --}}
                                                <div class="avatar-wrapper">
                                                    <img class="profile-pic" id="profile-pic" src="" />
                                                    <div class="upload-button">
                                                        <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
                                                    </div>
                                                    <input class="file-upload" type="file" id="avatar_img" name="avatar_img" accept="image/*"/>
                                                </div>
                                                
                                                <div class="media-body">
                                                    <h5 class="mb-1">{{ Auth::user()->name }}</h5>
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
                                                <input class="form-control" type="text" required id="firstname" name="firstname" placeholder="First name" value="{{ Auth::user()->firstname }}">
                                            </div>
                                            <div class="col-6">
                                                <input class="form-control" type="text" required id="lastname" name="lastname" placeholder="Last name" value="{{ Auth::user()->lastname }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Email-Address</label>
                                        <input class="form-control" type="email" id="email" name="email" placeholder="your-email@domain.com" value="{{ Auth::user()->email }}">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <input class="form-control" type="password" id="password" name="password" value="password">
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label m-r-10">Subscription</label>
                                        <div class="media-body text-end">
                                            <label class="switch">
                                                <input type="checkbox" id="subscription" name="subscription" @if (Auth::user()->subscription) checked @endif><span class="switch-state"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-footer">
                                        <button id="save_account_setting" class="btn btn-primary btn-block">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <form method="POST" onsubmit="return false;" class="card">
                        {{-- <form method="POST" action="{{ Route('user.changepassword') }}" class="card"> --}}
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
                                            <input class="form-control" type="password" value="password" id="currenetpassword" name="currenetpassword">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">New Password</label>
                                            <input class="form-control" type="password" value="password" id="newpassword" name="newpassword">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">New Password Confirm</label>
                                            <input class="form-control" type="password" value="password" id="newpasswordconfirm" name="newpasswordconfirm">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <button class="btn btn-primary" id="change_pass_btn">Update</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-xl-4">
                        <form method="POST" onsubmit="return false;" class="card">
                        {{-- <form method="POST" action="{{ Route('user.othersetting') }}" class="card"> --}}
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
                                            <input class="form-control" type="text" id="startcapital" name="startcapital" placeholder="Enter Account Starting Capital here for Journal" value="{{ Auth::user()->startcapital }}">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Currency</label>
                                            <select class="form-control btn-square" id="currency" name="currency">
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
                                            <input class="form-control" type="number" id="withamount" name="withamount" placeholder="Enter in a withdrawal amount from the account" value="{{ Auth::user()->withamount }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <button class="btn btn-primary" id="save_other_setting">Update</button>
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
    <script src="../assets/js/dashboard/custom.js"></script>
    <script src="../assets/js/tooltip-init.js"></script>
    <script>
        
    </script>
@endsection