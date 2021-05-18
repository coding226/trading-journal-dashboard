@extends('layouts.app')
@section('title')
<title>Analytics | The Trading Buddy</title>
@endsection
@section('style')
@endsection
@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>Analytics Page / Long </h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Analytics Page</li>
                        <li class="breadcrumb-item">Long</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-xl-3 box-col-3">
                <div class="card o-hidden">
                    <div class="card-body">
                        <div class="ecommerce-widgets media">
                            <div class="media-body">
                                <p class="f-w-500 font-roboto">Our Sale Value
                                <h4 class="f-w-500 mb-0 f-20">$<span class="counter">7454.25</span></h4>
                            </div>
                            <div class="ecommerce-box light-bg-primary"><i class="fa fa-heart" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-3 box-col-3">
                <div class="card o-hidden">
                    <div class="card-body">
                        <div class="ecommerce-widgets media">
                            <div class="media-body">
                                <p class="f-w-500 font-roboto">Our Sale Value
                                <h4 class="f-w-500 mb-0 f-20">$<span class="counter">7454.25</span></h4>
                            </div>
                            <div class="ecommerce-box light-bg-primary"><i class="fa fa-heart" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-3 box-col-3">
                <div class="card o-hidden">
                    <div class="card-body">
                        <div class="ecommerce-widgets media">
                            <div class="media-body">
                                <p class="f-w-500 font-roboto">Our Sale Value
                                <h4 class="f-w-500 mb-0 f-20">$<span class="counter">7454.25</span></h4>
                            </div>
                            <div class="ecommerce-box light-bg-primary"><i class="fa fa-heart" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-3 box-col-3">
                <div class="card o-hidden">
                    <div class="card-body">
                        <div class="ecommerce-widgets media">
                            <div class="media-body">
                                <p class="f-w-500 font-roboto">Our Sale Value
                                <h4 class="f-w-500 mb-0 f-20">$<span class="counter">7454.25</span></h4>
                            </div>
                            <div class="ecommerce-box light-bg-primary"><i class="fa fa-heart" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-header b-l-primary border-3">
                        <h5>Long Position Data Feed</h5>
                    </div>
                    <div class="card-body">
                        <p>Long Position Win Rate:</p>
                        <p>Long Position Percentage Account Gain (%):</p>
                        <p>Total Amount Of Pips from Long Trades:</p>
                        <p>Average Amount Of Long Positions Per Month:</p>
                        <p>Average Long Trade Duration (Time):</p>
                        <p>Average Long Trade Entry Time:</p>
                    </div>
                    </p>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-header b-l-primary border-3">
                        <h5>Best Trade(Calculated on Percentage Gain)</h5>
                    </div>
                    <div class="card-body">
                        <p>Symbol:</p>
                        <p>Long or Short:</p>
                        <p>Account Profit(£,$,€):</p>
                        <p>Percentage Account Gain (%):</p>
                        <p>Total Amount Of Pips:</p>
                        <p>Total Trade Duration:</p>
                        <p>Entry Time:</p>
                    </div>
                    </p>
                </div>
            </div>
            <div class="col-xl-6 xl-50 appointment box-col-6">
                <div class="card">
                    <div class="card-header">
                        <div class="header-top">
                            <h5 class="m-0">Long Trades Wins/Loss/BE Per Month</h5>
                        </div>
                    </div>
                    <div class="card-Body">
                        <div class="radar-chart">
                            <div id="winlossmonth-graph"> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 xl-50 appointment box-col-6">
                <div class="card">
                    <div class="card-header">
                        <div class="header-top">
                            <h5 class="m-0">Long Trades Percentage Gain Per Month Graph</h5>
                        </div>
                    </div>
                    <div class="card-Body">
                        <div class="radar-chart">
                            <div id="longgainmonth-graph"> </div>
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
<script src="../assets/js/analytics/long-chart.js"></script>
<script src="../assets/js/tooltip-init.js"></script>
@endsection
