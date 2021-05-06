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
                            <h5>Short Position Data Feed</h5>
                        </div>
                        <div class="card-body">
                            <p>Short Position Win Rate:</p>
                            <p>Short Position Percentage Account Gain (%):</p>
                            <p>Total Amount Of Pips from Short Trades:</p>
                            <p>Average Amount Of Short Positions Per Month:</p>
                            <p>Average Short Trade Duration (Time):</p>
                            <p>Average Short Trade Entry Time:</p>
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