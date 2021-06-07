@extends('layouts.app')
@section('title')
<title>My Note | Trading Buddy</title>
@endsection
@section('style')
<link rel="stylesheet" type="text/css" href="../assets/css/vendors/date-picker.css">
<style>
    .job-search .card-body{
        height: 360px;
    }
    .job-search .card-body img{
        width: 100%;
        max-height: 180px;
        margin-top: 30px;
    }
    .addnewnote{
        cursor: pointer;
        margin-right: 30px;
    }
    .addnewnote svg{
        vertical-align: middle;
        cursor: pointer;
    }
</style>
@endsection
@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>My Note</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="index.html">
                                <i data-feather="home"></i></a>
                        </li>
                        <li class="breadcrumb-item">My Note</li>
                    </ol>
                    <a class="addnewnote pull-right" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg"><i data-feather="plus-circle"></i> Add New</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3 xl-100">
                <div class="card">
                    <div class="job-search">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <p>23 June, 2021<span class="badge badge-primary pull-right">New</span></p>
                                    <h6 class="f-w-600"><a href="#">The monkey-rope</a></h6>                                    
                                </div>
                            </div>
                            <p>We are looking for an experienced and Cuba designer and/or frontend engineer with expertise in accessibility to join our team , 3+ years of experience working in as a Frontend Engineer or comparable role. You won’t be a team of one though — you’ll be collaborating closely with other...</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 xl-100">
                <div class="card">
                    <div class="job-search">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <p>23 June, 2021<span class="badge badge-primary pull-right">New</span></p>
                                    <h6 class="f-w-600"><a href="#">The monkey-rope</a></h6>                                    
                                </div>
                            </div>
                            <img src="{{ url('/assets/images/lightgallry/04.jpg') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <form class="theme-form" method="post" action="">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Add New Note</h4>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body date-picker">
                    <div class="mb-3 row g-3">
                        <label class="col-sm-3 col-form-label text-sm-end">Date</label>
                        <div class="col-xl-5 col-sm-9">
                            <div class="input-group">
                                <input class="datepicker-here form-control digits" type="text" data-language="en" required>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row g-3">
                        <label class="col-sm-3 col-form-label text-sm-end">Title</label>
                        <div class="col-xl-6 col-sm-9">
                            <div class="input-group">
                                <input class="form-control" type="text" name="title" required>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row g-3">
                        <label class="col-sm-3 col-form-label text-sm-end">Description</label>
                        <div class="col-xl-6 col-sm-9">
                            <div class="input-group">
                                <textarea class="form-control" type="text" name="description" rows="4"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row g-3">
                        <label class="col-sm-3 col-form-label text-sm-end">Image</label>
                        <div class="col-xl-6 col-sm-9">
                            <div class="input-group">
                                <input class="form-control" type="file" name="image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-secondary" data-bs-dismiss="modal">Close</a>
                    <button class="btn btn-primary" type="submit">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('script')
    <script src="../assets/js/datepicker/date-picker/datepicker.js"></script>
    <script src="../assets/js/datepicker/date-picker/datepicker.en.js"></script>
    <script src="../assets/js/datepicker/date-picker/datepicker.custom.js"></script>
@endsection
