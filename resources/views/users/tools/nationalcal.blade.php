@extends('layouts.app')
@section('title')
<title>National Holidays Calendar | Trading Buddy</title>
@endsection
@section('style')
@endsection
@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>National Holidays Calendar</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">
                                <i data-feather="home"></i></a>
                        </li>
                        <li class="breadcrumb-item">National Holidays Calendar</li>
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
                        <script type="text/javascript">DukascopyApplet = {"type":"holiday_calendar","params":{"showHeader":false,"tableBorderColor":"#D92626","showPastItems":false,"defaultRegion":0,"width":"100%","height":"450","adv":"popup"}};</script><script type="text/javascript" src="https://freeserv-static.dukascopy.com/2.0/core.js"></script>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>
@endsection
@section('script')
@endsection
