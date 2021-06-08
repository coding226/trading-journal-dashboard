@extends('layouts.app')
@section('title')
    <title>Quick Course | The Trading Buddy</title>
@endsection
@section('style')
<link rel="stylesheet" type="text/css" href="../assets/css/vendors/scrollbar.css">
<link rel="stylesheet" type="text/css" href="../assets/css/vendors/scrollable.css">
<style>
    .lesson-total{
        margin: 20px 0;
    }
    .lesson{
        display: grid;
    }
    .item{
        cursor: pointer;
    }
    .item:hover{
        background: #eee;
    }
</style>
@endsection
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>Quick Course</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}"><i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item active">Quick Course</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="edit-profile">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Quick Courses</h4>
                                <div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a></div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div id="player-overlay">
                                            <video controls style="width:100%">
                                                <source src="{{ url('assets/courses/Final.mp4') }}" />
                                            </video>    
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="vertical-scroll scroll-demo">
                                            <div class="lesson-total">8 Videos(90m)</div>
                                            <ul class="lesson">
                                                <li class="item">
                                                    <p class="item-title pull-left"><span class="item-no">1.</span> Introduction</p>
                                                    <span class="item-duration pull-right">1:32</span>
                                                </li>
                                                <li class="item">
                                                    <p class="item-title pull-left"><span class="item-no">1.</span> Introduction</p>
                                                    <span class="item-duration pull-right">1:32</span>
                                                </li>
                                                <li class="item">
                                                    <p class="item-title pull-left"><span class="item-no">1.</span> Introduction</p>
                                                    <span class="item-duration pull-right">1:32</span>
                                                </li>
                                                <li class="item">
                                                    <p class="item-title pull-left"><span class="item-no">1.</span> Introduction</p>
                                                    <span class="item-duration pull-right">1:32</span>
                                                </li>
                                                <li class="item">
                                                    <p class="item-title pull-left"><span class="item-no">1.</span> Introduction</p>
                                                    <span class="item-duration pull-right">1:32</span>
                                                </li>
                                            </ul>
                                        </div>
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
    <script src="../assets/js/scrollable/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/scrollable/scrollable-custom.js"></script>
    <script src="../assets/js/tooltip-init.js"></script>
@endsection