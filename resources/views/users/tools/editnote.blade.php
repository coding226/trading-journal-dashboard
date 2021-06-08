@extends('layouts.app')
@section('title')
<title>My Notes Edit | Trading Buddy</title>
@endsection
@section('style')
<link rel="stylesheet" type="text/css" href="../assets/css/vendors/date-picker.css">
<style>
    .job-search .card-body{
        height: 360px;
    }
    .card-body img{
        width: 100%;
        margin-top: 30px;
    }
</style>
@endsection
@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>Edit My Note</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="index.html">
                                <i data-feather="home"></i></a>
                        </li>
                        <li class="breadcrumb-item">Edit My Note</li>
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
                        <form class="theme-form" method="post" action="{{ url('/updatenote') }}" enctype="multipart/form-data">
                        @csrf
                            <input type="hidden" name="noteid" value="{{ $note->id }}">
                            <div class="modal-body date-picker">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="mb-3 row g-3">
                                            <label class="col-sm-3 col-form-label text-sm-end">Date</label>
                                            <div class="col-xl-5 col-sm-9">
                                                <div class="input-group">
                                                    <input class="datepicker-here form-control digits" name="datetime" type="text" data-language="en" required value="{{ date_format(date_create($note->datetime), 'm/d/Y') }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row g-3">
                                            <label class="col-sm-3 col-form-label text-sm-end">Title</label>
                                            <div class="col-xl-6 col-sm-9">
                                                <div class="input-group">
                                                    <input class="form-control" type="text" name="title" required value="{{ $note->title }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row g-3">
                                            <label class="col-sm-3 col-form-label text-sm-end">Description</label>
                                            <div class="col-xl-6 col-sm-9">
                                                <div class="input-group">
                                                    <textarea class="form-control" type="text" name="description" rows="4">{{ $note->description }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row g-3">
                                            <label class="col-sm-3 col-form-label text-sm-end">Image</label>
                                            <div class="col-xl-6 col-sm-9">
                                                <div class="input-group">
                                                    <input class="form-control noteimage" type="file" name="image">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row g-3">
                                            <label class="col-sm-3 col-form-label text-sm-end">Index</label>
                                            <div class="col-xl-6 col-sm-9">
                                                <div class="input-group">
                                                    <input class="form-control" type="text" name="index" value="{{ $note->index }}">
                                                    <select class="form-control {{ str_replace('badge', 'bg', $note->indexcolor) }} text-light" name="indexcolor" id="indexcolor">
                                                        <option class="bg-primary text-light" value="bg-primary"></option>
                                                        <option class="bg-secondary text-light" value="bg-secondary"></option>
                                                        <option class="bg-success text-light" value="bg-success"></option>
                                                        <option class="bg-info text-light" value="bg-info"></option>
                                                        <option class="bg-warning text-light" value="bg-warning"></option>
                                                        <option class="bg-danger text-light" value="bg-danger"></option>
                                                        <option class="bg-dark text-light" value="bg-dark"></option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <img class="noteimageshow" src="/{{ $note->image }}"/>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary" type="submit">Update</button>
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
    <script src="../assets/js/datepicker/date-picker/datepicker.js"></script>
    <script src="../assets/js/datepicker/date-picker/datepicker.en.js"></script>
    <script src="../assets/js/datepicker/date-picker/datepicker.custom.js"></script>
    <script src="../assets/js/tools/note.js"></script>
@endsection