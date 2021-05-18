@extends('layouts.app')
@section('title')
    <title>New Account | The Trading Buddy</title>
@endsection
@section('style')
@endsection
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>New Account </h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item active">New Account</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="edit-profile">
                <div class="row">
                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">New Profile</h4>
                                <div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a></div>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ Route('user.createsub') }}">
                                @csrf
                                    <div class="mb-3">
                                        <label class="form-label">Sub User Name</label>
                                        <input class="form-control" type="text" required id="username" name="username" placeholder="User name">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Main Currency</label>
                                        <select class="form-select" id="currency" name="currency">
                                            <option value="USD">USD</option>
                                            <option value="EURO">EURO</option>
                                            <option value="GBP">GBP</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Starting Capital</label>
                                        <input class="form-control" type="number" id="startcapital" name="startcapital" placeholder="Starting Capital">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Description</label>
                                            <textarea class="form-control" rows="5" cols="5" id="account_desc" name="account_desc" placeholder="Default textarea"></textarea>
                                    </div>
                                    <div class="form-footer">
                                        <button type="submit" class="btn btn-primary btn-block">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
@endsection
@section('script')
    <script src="../assets/js/accounts/create-account.js"></script>
    <script src="../assets/js/tooltip-init.js"></script>
    <script>
        
    </script>
@endsection