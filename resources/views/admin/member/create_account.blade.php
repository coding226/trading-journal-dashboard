@extends('layouts.app')
@section('title')
    <title>Create Account | Trading Buddy</title>
@endsection
@section('style')
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/datatables.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/daterange-picker.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/date-picker.css">
@endsection
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>Create Account</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">                                       
                                <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item">Create Account</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-8">
                    <div class="card">
                      <div class="card-body">
                        <div class="form theme-form">
                          <div class="row">
                            <div class="col">
                              <div class="mb-3">
                                <label>User Name</label>
                                <input class="form-control" type="text" placeholder="Enter Username *" data-bs-original-title="" title="">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col">
                              <div class="mb-3">
                                <label>Email</label>
                                <input class="form-control" type="email" placeholder="Enter Email Address" data-bs-original-title="" title="">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-4">
                              <div class="mb-3">
                                <label>Date</label>
                                <input class="datepicker-here form-control" type="text" data-language="en" data-bs-original-title="" title="">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <div class="mb-3">
                                  <label>First Name</label>
                                  <input class="form-control" type="text" placeholder="Enter First Name" data-bs-original-title="" title="">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <div class="mb-3">
                                  <label>Second Name</label>
                                  <input class="form-control" type="text" placeholder="Enter Second Name" data-bs-original-title="" title="">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <div class="mb-3">
                                  <label>Password</label>
                                  <input class="form-control" type="password" placeholder="Enter Password" data-bs-original-title="" title="">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <div class="mb-3">
                                  <label>Re Password</label>
                                  <input class="form-control" type="password" placeholder="Re-enter Password" data-bs-original-title="" title="">
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-4">
                              <div class="mb-3">
                                <label>Account Type</label>
                                <select class="form-select">
                                  <option>Select Type</option>
                                  <option>Administrator</option>
                                  <option>Main Account</option>
                                  <option>Sub Account</option>
                                </select>
                              </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-check checkbox checkbox-primary mb-0">
                                    <input class="form-check-input" id="checkbox-primary-1" type="checkbox" data-bs-original-title="" title="">
                                    <label class="form-check-label" for="checkbox-primary-1">Send Welcome Email</label>
                                  </div>
                                </div>
                              </div>
                          </div>
                          <div class="row">
                            <div class="col">
                              <div class="text-end"><a class="btn btn-success me-3" href="#" data-bs-original-title="" title="">Submit</a><a class="btn btn-danger" href="#" data-bs-original-title="" title="">Delete</a></div>
                            </div>
                          </div>
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
    <script src="../assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/js/datatable/datatables/datatable.custom.js"></script>
    <script src="../assets/js/datepicker/daterange-picker/moment.min.js"></script>
    <script src="../assets/js/datepicker/daterange-picker/daterangepicker.js"></script>
    <script src="../assets/js/datepicker/daterange-picker/daterange-picker.custom.js"></script>
    
    <script src="../assets/js/datepicker/date-picker/datepicker.js"></script>
    <script src="../assets/js/datepicker/date-picker/datepicker.en.js"></script>
    <script src="../assets/js/datepicker/date-picker/datepicker.custom.js"></script>
@endsection