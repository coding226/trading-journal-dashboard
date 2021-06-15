@extends('layouts.app')
@section('title')
<title>My Notes | Trading Buddy</title>
@endsection
@section('style')
<link rel="stylesheet" type="text/css" href="../assets/css/vendors/date-picker.css">
<link rel="stylesheet" type="text/css" href="../assets/css/vendors/timepicker.css">
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
    .job-search .dropdown-basic .dropdown .dropdown-content{
        top: 15px;
    }
    .job-search .media-body p{
        display: contents;
    }
    .job-search .dropdown-content{
        cursor: pointer;
    }
    .note-description{
        max-height: 200px;
        white-space: pre-line;
        overflow: hidden;
    }
    input[type="color"]{
        height: 47px;
    }
</style>
@endsection
@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>My Notes</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">
                                <i data-feather="home"></i></a>
                        </li>
                        <li class="breadcrumb-item">My Notes</li>
                    </ol>
                    <a class="addnewnote pull-right" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg"><i data-feather="plus-circle"></i> Add New</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
        @foreach($notes as $note)
            <div class="col-xl-3 col-sm-6 xl-4">
                <div class="card">
                    <div class="job-search">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <div class="mb-3">
                                        <p>{{ date_format(date_create($note->datetime), "j F, Y") }}</p>
                                        @if($note->isnoti == 1)
                                            <i class="fa fa-bell"></i>
                                        @endif
                                        <div class="dropdown-basic pull-right m-l-5">
                                            <div class="dropdown m-0">
                                                <div class="btn-group m-0">
                                                    <button class="dropbtn p-0 bg-transparent text-dark" type="button"><span><i class="icon-more"></i></i></span></button>
                                                    <div class="dropdown-content"><a href="{{ url('/editnote') }}/{{ $note->id }}">Edit</a><a data-href="{{ url('/delnote') }}" dataid="{{ $note->id }}" class="notedel">Delete</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="badge pull-right" style="background:{{ $note->indexcolor }}">{{ $note->index }}</span>
                                    </div>
                                    <div>
                                        <h6 class="f-w-600"><a href="{{ url('/viewnote') }}/{{ $note->id }}">{{ strlen($note->title) < 30 ? $note->title : substr($note->title, 0, 30).'...' }}</a></h6>
                                    </div>                              
                                </div>
                            </div>
                            @if($note->image)
                            <img src="{{ $note->image }}">
                            @else
                            <p class="note-description">{{ strlen($note->description) < 270 ? $note->description : substr($note->description, 0, 270).'...' }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <form class="theme-form" method="post" action="{{ url('/addnote') }}" enctype="multipart/form-data">
            @csrf
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Add New Note</h4>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body date-picker">
                    <div class="mb-3 row g-3">
                        <label class="col-sm-3 col-form-label text-sm-end">Date</label>
                        <div class="col-xl-4 col-sm-4">
                            <div class="input-group">
                                <input class="datepicker-here form-control digits" name="datetime" type="text" data-language="en" required>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row g-3">
                        <label class="col-sm-3 col-form-label text-sm-end">Time</label>
                        <div class="col-xl-4 col-sm-4">
                            <div class="input-group">
                                <input class="form-control" type="time" name="time1">
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-4">
                            <div class="form-check checkbox checkbox-solid-primary">
                                <input class="form-check-input" id="some" type="checkbox" name="isnoti">
                                <label class="form-check-label" for="some">Email Noti</label>
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
                    <div class="mb-3 row g-3">
                        <label class="col-sm-3 col-form-label text-sm-end">Index</label>
                        <div class="col-xl-6 col-sm-9">
                            <div class="input-group">
                                <input class="form-control" type="text" name="index">
                                <input type="color" class="form-control" name="indexcolor">
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
    <script src="../assets/js/time-picker/jquery-clockpicker.min.js"></script>
    <script src="../assets/js/time-picker/highlight.min.js"></script>
    <script src="../assets/js/time-picker/clockpicker.js"></script>
    <script src="../assets/js/tools/note.js"></script>
@endsection
