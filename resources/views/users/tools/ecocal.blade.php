@extends('layouts.app')
@section('title')
<title>Economic News Calendar | Trading Buddy</title>
@endsection
@section('style')
<script>
frame.addEventListener("load", ev => {
    const new_style_element = document.createElement("style");
    new_style_element.textContent = "#ad { width: 0 !important; }"
    ev.target.contentDocument.head.appendChild(new_style_element);
});
</script>
@endsection
@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>Economic News Calendar</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">
                                <i data-feather="home"></i></a>
                        </li>
                        <li class="breadcrumb-item">Economic News Calendar</li>
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
                        <script type="text/javascript">DukascopyApplet = {"type":"economic_calendar_new","params":{"showHeader":false,"tableBorderColor":"#D92626","defaultTimezone":0,"defaultCountries":"c:AU,CA,CH,CN,EU,GB,JP,NZ,US,DE,FR,IT,ES","impacts":[1,2],"dateTab":2,"dateFrom":1459036800000,"dateTo":1459555200000,"showColCountry":true,"showColCurrency":true,"showColImpact":true,"showColPrevious":true,"showColForecast":true,"width":"100%","height":"500","adv":"popup"}};</script><script type="text/javascript" src="https://freeserv-static.dukascopy.com/2.0/core.js"></script>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>
@endsection
@section('script')
<script src="../assets/js/tools/ecocal.js"></script>
@endsection
