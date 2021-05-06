@extends('layouts.app')
@section('title')
    <title>Analytics | Trading Buddy</title>
@endsection
@section('style')
@endsection
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>Analytics Page / Short </h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">                                       <i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Analytics Page</li>
                            <li class="breadcrumb-item">Short</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-xl-4 box-col-4">
                    <div class="card">
                        <div class="card-header">
                            <h5>Pie Chart </h5>
                        </div>
                        <div class="card-body apex-chart">
                            <div id="piechart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-xl-4 box-col-4">
                    <div class="card">
                        <div class="card-header">
                            <h5>Donut Chart</h5>
                        </div>
                        <div class="card-body apex-chart">
                            <div id="donutchart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-xl-4 box-col-4">
                    <div class="card">
                        <div class="card-header">
                            <h5>Radial Bar Chart</h5>
                        </div>
                        <div class="card-body">
                            <div id="circlechart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
@endsection
@section('script')
    <script src="../assets/js/dashboard/default.js"></script>
    <script src="../assets/js/chart/apex-chart/apex-chart.js"></script>
    <script src="../assets/js/chart/apex-chart/stock-prices.js"></script>
    <script src="../assets/js/chart/apex-chart/chart-custom.js"></script>
    <script src="../assets/js/tooltip-init.js"></script>
@endsection