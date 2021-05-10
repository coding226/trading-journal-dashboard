@extends('layouts.app')
@section('title')
    <title>Transaction | Trading Buddy</title>
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
                        <h3>Transaction</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">                                       
                                <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item">Transaction</li>
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
                            <h5 class="mb-3">Transaction</h5><span>Select Daterange to view specific date data.</span>
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
                                        <th>Transaction ID</th>
                                        <th>Subscription</th>
                                        <th>Name</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Income Amount</th>
                                        <th>Start Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>6786</td>
                                        <td>Journal</td>
                                        <td>Lola</td>
                                        <td>Lola-2021</td>
                                        <td>lola@user.com</td>
                                        <td>£7.99</td>
                                        <td>1/6/2021</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>6787</td>
                                        <td>Free</td>
                                        <td>Rose</td>
                                        <td>Rose_098</td>
                                        <td>rose@user.com</td>
                                        <td>£7.99</td>
                                        <td>1/6/2021</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>6788</td>
                                        <td>Additional account</td>
                                        <td>Sam</td>
                                        <td>Sam</td>
                                        <td>rose@user.com</td>
                                        <td>£7.99</td>
                                        <td>1/6/2021</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>6789</td>
                                        <td>Journal</td>
                                        <td>steve</td>
                                        <td>Steve</td>
                                        <td>rose@user.com</td>
                                        <td>£7.99</td>
                                        <td>1/6/2021</td>
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