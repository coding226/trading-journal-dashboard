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
                        <h3>Analytics Page / All </h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">                                       <i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Analytics Page</li>
                            <li class="breadcrumb-item">All</li>
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
                            <h5>Total Trades </h5>
                        </div>
                        <div class="card-body apex-chart">
                            <div id="total-chart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-xl-4 box-col-4">
                    <div class="card">
                        <div class="card-header">
                            <h5>Short, Long, Break</h5>
                        </div>
                        <div class="card-body apex-chart">
                            <div id="short2long-chart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-xl-4 box-col-4">
                    <div class="card">
                        <div class="card-header">
                            <h5>Winning Short to Winning Long</h5>
                        </div>
                        <div class="card-body apex-chart">
                            <div id="wininshort2long-chart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 xl-50 appointment box-col-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="header-top">
                                <h5 class="m-0">Monthly Gains/Losses</h5>
                                <div class="card-header-right-icon">
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle" id="dropdownMenuButton" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">Year</button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Year</a>
                                            <a class="dropdown-item" href="#">Month</a>
                                            <a class="dropdown-item" href="#">Day</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-Body">
                            <div class="radar-chart">
                                <div id="winlossmonthly-graph"> </div>
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
    <script src="../assets/js/dashboard/default.js"></script>
    <script src="../assets/js/chart/apex-chart/apex-chart.js"></script>
    <script src="../assets/js/chart/apex-chart/stock-prices.js"></script>
    <script src="../assets/js/analytics/all-chart.js"></script>
    <script src="../assets/js/tooltip-init.js"></script>
@endsection