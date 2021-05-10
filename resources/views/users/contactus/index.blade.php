@extends('layouts.app')
@section('title')
<title>Contact Us | Trading Buddy</title>
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
                    <h3>Contact Us</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">
                                <i data-feather="home"></i></a>
                        </li>
                        <li class="breadcrumb-item">Contact Us</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-lg-6 col-xl-8 xl-50 col-md-12 box-col-6">
                <div class="card height-equal" style="min-height: 633px;">
                    <div class="card-header">
                        <h5>Contact Us</h5>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="fa fa-spin fa-cog"></i></li>
                                <li><i class="view-html fa fa-code"></i></li>
                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                <li><i class="icofont icofont-error close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="contact-form card-body">
                        <form class="theme-form">
                            <div class="form-icon"><i class="icofont icofont-envelope-open"></i></div>
                            <div class="mb-3">
                                <label for="exampleInputName">Your Name</label>
                                <input class="form-control" id="exampleInputName" type="text" placeholder="John Dio"
                                    data-bs-original-title="" title="">
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label" for="exampleInputEmail1">Email</label>
                                <input class="form-control" id="exampleInputEmail1" type="email"
                                    placeholder="Demo@gmail.com" data-bs-original-title="" title="">
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label" for="exampleInputEmail1">Message</label>
                                <textarea class="form-control textarea" rows="3" cols="50"
                                    placeholder="Your Message"></textarea>
                            </div>
                            <div class="text-sm-end">
                                <button class="btn btn-primary-gradien" data-bs-original-title="" title="">SEND
                                    IT</button>
                            </div>
                        </form>

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
