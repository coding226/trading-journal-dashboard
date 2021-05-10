@extends('layouts.app')
@section('title')
    <title>Member page | Trading Buddy</title>
@endsection
@section('style')
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/datatables.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/daterange-picker.css">
@endsection
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>Member page</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">                                       
                                <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item">Member page</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header pb-3">
                            <h5 class="mb-3">Members</h5><span>Select Daterange to view specific date data.</span>
                            <div class="row form theme-form mt-3">
                                <div class="col">
                                    <div class="mb-3 row">
                                        <p class="col-sm-3 text-end pt-3 mt-0">Date Filter:</p>
                                        <div class="col-sm-5">
                                            <input class="form-control" id="reportrange" type="text">
                                        </div>
                                        <div class="col-sm-4 dropdown-basic text-end">
                                            <div class="dropdown mb-0">
                                                <div class="btn-group mb-0">
                                                    <button class="dropbtn btn-secondary btn-round" type="button">Export <span><i class="icofont icofont-airplane"></i></span></button>
                                                    <div class="dropdown-content"><a href="#">Print</a><a href="#">As PDF</a><a href="#">As CSV</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="display" id="advance-12">
                                <thead>
                                    <tr>
                                        <th>Member Number</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Name</th>
                                        <th>Accounts</th>
                                        <th>Last long In</th>
                                        <th>Edit/Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="text-center">6786</td>
                                        <td class="text-center">Journal</td>
                                        <td class="text-center">Lola</td>
                                        <td class="text-center">Lola-2021</td>
                                        <td class="text-center">lola@user.com</td>
                                        <td class="text-center">£7.99</td>
                                        <td class="text-center">1/6/2021</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td class="text-center">6787</td>
                                        <td class="text-center">Free</td>
                                        <td class="text-center">Rose</td>
                                        <td class="text-center">Rose_098</td>
                                        <td class="text-center">rose@user.com</td>
                                        <td class="text-center">£7.99</td>
                                        <td class="text-center">1/6/2021</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">3</td>
                                        <td class="text-center">6788</td>
                                        <td class="text-center">Additional account</td>
                                        <td class="text-center">Sam</td>
                                        <td class="text-center">Sam</td>
                                        <td class="text-center">rose@user.com</td>
                                        <td class="text-center">£7.99</td>
                                        <td class="text-center">1/6/2021</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">4</td>
                                        <td class="text-center">6789</td>
                                        <td class="text-center">Journal</td>
                                        <td class="text-center">steve</td>
                                        <td class="text-center">Steve</td>
                                        <td class="text-center">rose@user.com</td>
                                        <td class="text-center">£7.99</td>
                                        <td class="text-center">1/6/2021</td>
                                    </tr>
                                </tbody>
                            </table>
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
@endsection