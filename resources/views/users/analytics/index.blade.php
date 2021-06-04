@extends('layouts.app')
@section('title')
<title>Analytics All | The Trading Journal</title>
@endsection
@section('style')
<link rel="stylesheet" type="text/css" href="../assets/css/vendors/daterange-picker.css">
<style>
    .after_img{
        width: 100%;
        max-height: 270px;
        margin-top: 5px;
    }
    #reportrange{
        width: 220px;
        margin: 0 20px;
    }
</style>
@endsection
@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-8 d-flex">
                    <h3 class="d-flex align-items-center">Analytics Page / All </h3>
                    <input class="form-control daterangefilter" id="reportrange" type="text">
                    <p class="m-0 p-3">Please select daterange</p>
                </div>
                <div class="col-4">
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
                        <div class="header-top">
                            <h5>Win/Loss/Breakeven</h5>
                        </div>
                    </div>
                    <div class="card-body apex-chart">
                        <div id="short2long-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-4 box-col-4">
                <div class="card">
                    <div class="card-header">
                        <h5>Winning Short To Winning Long Positions</h5>
                    </div>
                    <div class="card-body apex-chart">
                        <div id="wininshort2long-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-header b-l-primary border-3">
                        <h5>Account Data</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 col-xl-6">
                                <p>Starting Balance: {{ number_format(Auth::user()->current_user->starting_bal, 2, '.', '') }}</p>
                                <p>Current Balance: {{ number_format(Auth::user()->current_user->starting_bal + Auth::user()->current_user->balance + $data['tradesums'][0]->profit_gl_sum - $data['tradesums'][0]->fees_sum, 2, '.', '') }}</p>
                                <p>Account Profit/Loss (£,$,€): {{ $data['tradesums'][0]->profit_gl_sum }}</p>
                                <p>Total Amount Of Fees: {{ $data['tradesums'][0]->fees_sum }}</p>
                                <p>Percentage Account Gain (%): {{ $data['tradesums'][0]->percentage_gl_sum }}</p>
                                <p>Total Amount Of Pips: {{ $data['tradesums'][0]->pips_sum }}</p>
                                <p>Total Amount Of Trades: {{ $data['all_count'] }}</p>
                                <p>Total Amount Of Wins: {{ $data['winshort_count']+$data['winlong_count'] }}</p>
                            </div>
                            <div class="col-sm-12 col-xl-6">
                                <p>Total Amount of Losses: {{ $data['lossess_count'] }}</p>
                                <p>Total Amount of Break Evens: {{ $data['break_count'] }}</p>
                                <p>Win Rate (%): {{ $data['all_count'] ? number_format(($data['winshort_count']+$data['winlong_count'])/($data['all_count'] - $data['active_count'])*100, 2, '.', ',') : 0 }}</p>
                                <p>Average Trade Gain (%): {{ $data['all_count'] ? $data['ave_percentage_gain'] : 0 }}</p>
                                <p>Average Daily Gain (%): {{ $data['all_count'] ? $data['ave_daily'] : 0 }}</p>
                                <p>Average Weekly Gain (%): {{ $data['all_count'] ? $data['ave_weekly'] : 0 }} </p>
                                <p>Average Monthly Gain (%): {{ $data['all_count'] ? $data['ave_monthly'] : 0 }}</p>
                                <p>Average Trade Duration (Time): {{ $data['all_count'] ? Carbon\CarbonInterval::seconds($data['ave_duration'])->cascade()->forHumans() : 0}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-header b-l-primary border-3">
                        <h5>Best Trade(Calculated on Percentage Gain)</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                        @if($besttrade)
                            <div class="col-sm-12 col-xl-6">
                                <p>Symbol: {{ $besttrade->symbol->symbol }}</p>
                                <p>Long or Short: {{ $besttrade->long_short }}</p>
                                <p>AccountProfit(£,$,€): {{ $besttrade->profit_gl }}</p>
                                <p>Percentage Account Gain (%): {{ $besttrade->percentage_gl }}</p>
                                <p>Total Amount Of Pips: {{ $besttrade->pips }}</p>
                                <p>Total Trade Duration: {{ Carbon\CarbonInterval::seconds($besttrade->duration)->cascade()->forHumans() }}</p>
                                <p>Entry Time: {{ $besttrade->created_at }}</p>
                            </div>
                            <div class="col-sm-12 col-xl-6">
                            @if($data['afterimage'])
                                <p>After Image: <a class="b-r-15 mt-3" href="{{ ($data['afterimage']->after_link) ? $data['afterimage']->after_link:'/'.$data['afterimage']->after_file }}" target="_blank"><img class="after_img" src="{{ ($data['afterimage']->after_link) ? $data['afterimage']->after_link:'/'.$data['afterimage']->after_file }}"></a></p>
                            @endif
                            </div>
                        @endif
                        </div>                        
                    </div>
                    </p>
                </div>
            </div>
            <div class="col-xl-6 xl-50 appointment box-col-6">
                <div class="card">
                    <div class="card-header">
                        <div class="header-top">
                            <h5 class="m-0">Equity Gain</h5>
                        </div>
                    </div>
                    <div class="card-Body">
                        <div class="radar-chart">
                            <div id="equity-graph"> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 xl-50 appointment box-col-6">
                <div class="card">
                    <div class="card-header">
                        <div class="header-top">
                            <h5 class="m-0">Win Rate</h5>
                        </div>
                    </div>
                    <div class="card-Body">
                        <div class="radar-chart">
                            <div id="winrate-graph"> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 xl-50 appointment box-col-6">
                <div class="card">
                    <div class="card-header">
                        <div class="header-top">
                            <h5 class="m-0">Wins/Loss/BE</h5>
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
                            <h5 class="m-0">Percentage Gain</h5>
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
<script>
    var analytics_all_data = {!! json_encode($data, JSON_HEX_TAG) !!};
    var daterange2 = {!! json_encode($daterange, JSON_HEX_TAG) !!};
</script>
<script src="../assets/js/chart/apex-chart/apex-chart.js"></script>
<script src="../assets/js/analytics/all-chart.js"></script>
<script src="../assets/js/datepicker/daterange-picker/moment.min.js"></script>
<script src="../assets/js/datepicker/daterange-picker/daterangepicker.js"></script>
<script src="../assets/js/datepicker/daterange-picker/daterange-picker.custom.js"></script>
<script src="../assets/js/tooltip-init.js"></script>
@endsection