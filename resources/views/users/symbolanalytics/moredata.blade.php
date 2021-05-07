@extends('layouts.app')
@section('title')
    <title>Symbol Analytics | Trading Buddy</title>
@endsection
@section('style')
@endsection
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>Analytics Page / GBP/USD </h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
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
                <div class="col-sm-12 col-xl-6">
                    <div class="card">
                        <div class="card-header b-l-primary border-3">
                            <h5>GBP/USD Data Feed</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12 col-xl-6">
                                    <p>Symbol Rank (Calculated on Percentage Gain):</p>
                                    <p>Total Amount Of Trades:</p>
                                    <p>Total Amount Of Pips:</p>
                                    <p>Total Amount Of Long Positions:</p>
                                    <p>Total Amount Of Short Positions:</p>
                                    <p>Total Amount Of Wins:</p>
                                    <p>Total Amount of Losses:</p>
                                    <p>Total Amount of Break Evens:</p>
                                    <p>Win Rate (%):</p>
                                    <p>Percentage Account Gain (%):</p>
                                    <p>Average Trade Gain (%):</p>
                                    <p>Average Trade Duration (Time):</p>
                                    <p>Average Entry Time: </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-xl-6">
                    <div class="card">
                        <div class="card-header b-l-primary border-3">
                            <h5>GBP/USD Best Trade(20.6%)</h5>
                        </div>
                        <div class="card-body">
                            <p>Symbol:</p>
                            <p>Long or Short:</p>
                            <p>AccountProfit(£,$,€):</p>
                            <p>Percentage Account Gain (%):</p>
                            <p>Total Amount Of Pips:</p>
                            <p>Total Entry Date:</p>
                            <p>Entry Time:</p>
                            <p>Total Trade Duration:</p>
                        </div>
                        </p>
                    </div>
                </div>
                <div class="col-xl-6 xl-50 appointment box-col-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="header-top">
                                <h5 class="m-0">GBP/USD Wins/Loss/BE per Month</h5>
                            </div>
                        </div>
                        <div class="card-Body">
                            <div class="radar-chart">
                                <div id="winlossmonthly-graph"> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 xl-50 appointment box-col-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="header-top">
                                <h5 class="m-0">GBP/USD Gain Per Month</h5>
                            </div>
                        </div>
                        <div class="card-Body">
                            <div class="radar-chart">
                                <div id="gainpermonth-graph"> </div>
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
    <script src="../assets/js/chart/apex-chart/apex-chart.js"></script>
    <script src="../assets/js/symbol-analytics/symbol-data.js"></script>
    <script src="../assets/js/tooltip-init.js"></script>
@endsection