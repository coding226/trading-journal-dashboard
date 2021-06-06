@extends('layouts.app')
@section('title')
<title>Currency Indexes | Trading Buddy</title>
@endsection
@section('style')
@endsection
@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>Currency Indexes</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">
                                <i data-feather="home"></i></a>
                        </li>
                        <li class="breadcrumb-item">Currency Indexes</li>
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
                        <script type="text/javascript">DukascopyApplet = {"type":"currency_index","params":{"showHeader":false,"bType":0,"bDate":1617580800000,"bXDays":"360","sType":0,"sDate":1586736000000,"sXDays":"360","sbXDays":"1","eType":3,"eDate":1617840000000,"eXDays":"1","ebXDays":"1","esXDays":"360","CHFColor":"#d17918","EURColor":"#0000ff","GBPColor":"#117e11","JPYColor":"#6700ce","USDColor":"#ff0000","width":"100%","height":"500","adv":"popup"}};</script><script type="text/javascript" src="https://freeserv-static.dukascopy.com/2.0/core.js"></script>
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
