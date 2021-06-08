@extends('layouts.app')
@section('title')
<title>My Notes View | Trading Buddy</title>
@endsection
@section('style')
<link rel="stylesheet" type="text/css" href="../assets/css/vendors/date-picker.css">
<style>
    .job-search .card-body{
        height: 360px;
    }
    .job-search .card-body img{
        width: 100%;
        margin-top: 30px;
    }
    .job-search .media-body p{
        display: contents;
    }
</style>
@endsection
@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>View My Note</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="index.html">
                                <i data-feather="home"></i></a>
                        </li>
                        <li class="breadcrumb-item">View My Note</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body">
                                <div class="mb-3">
                                    <p>{{ date_format(date_create($note->datetime), "j F, Y") }}</p>
                                    <span class="badge {{ $note->indexcolor }} pull-right">{{ $note->index }}</span>
                                </div>
                                <div>
                                    <h6 class="f-w-600"><a href="#">{{ $note->title }}</a></h6>
                                </div>
                            </div>
                        </div>
                        <img src="/{{ $note->image }}" class="m-t-10">
                        <p class="m-t-10">{{ $note->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
@endsection
