@extends('layouts.app')
@section('title')
    <title>Symbol Analytics | The Trading Buddy</title>
@endsection
@section('style')
<style>
    .after_img{
        width: 100%;
        max-height: 270px;
        margin-top: 5px;
    }
</style>
@endsection
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>Analytics Page / {{ $symbol }} </h3>
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
                            <h5>{{ $symbol }} Data Feed</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12 col-xl-6">
                                    <p>Symbol Rank (Calculated on Percentage Gain): {{ $data['rank'] }}</p>
                                    <p>Total Amount Of Trades: {{ $data['tradesums']['tcount'] }}</p>
                                    <p>Total Amount Of Pips: {{ $data['tradesums']['pips_sum'] }}</p>
                                    <p>Total Amount Of Long Positions: {{ $data['tlong'] }}</p>
                                    <p>Total Amount Of Short Positions: {{ $data['tshort'] }}</p>
                                    <p>Total Amount Of Wins: {{ $data['twin'] }}</p>
                                    <p>Total Amount of Losses: {{ $data['tloss'] }}</p>
                                    <p>Total Amount of Break Evens: {{ $data['tbe'] }}</p>
                                </div>
                                <div class="col-sm-12 col-xl-6">
                                    <p>Win Rate (%): {{ number_format($data['twin']/$data['tradesums']['tcount']*100, 2, '.','') }}</p>
                                    <p>Percentage Account Gain (%): {{ $data['tradesums']['percentage_gl_sum'] }}</p>
                                    <p>Average Trade Gain (%): {{ number_format($data['tradesums']['percentage_gl_sum']/$data['tradesums']['tcount'], 2, '.', '') }}</p>
                                    <p>Average Trade Duration (Time): {{ Carbon\CarbonInterval::seconds($data['tradesums']['duration_sum']/$data['tradesums']['tcount'])->cascade()->forHumans() }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-xl-6">
                    <div class="card">
                        <div class="card-header b-l-primary border-3">
                            <h5>{{ $symbol }} Best Trade(Calculated on Percentage Gain)</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12 col-xl-6">
                                    <p>Symbol: {{ $symbol }}</p>
                                    <p>Long or Short: {{ $data['besttrade']->long_short }}</p>
                                    <p>AccountProfit(£,$,€): {{ $data['besttrade']->profit_gl }}</p>
                                    <p>Percentage Account Gain (%): {{ $data['besttrade']->percentage_gl }}</p>
                                    <p>Total Amount Of Pips: {{ $data['besttrade']->pips }}</p>
                                    <p>Total Entry Date: {{ $data['besttrade']->created_at }}</p>
                                    <p>Entry Time: {{ $data['besttrade']->created_at }}</p>
                                    <p>Total Trade Duration: {{ Carbon\CarbonInterval::seconds($data['besttrade']->duration)->cascade()->forHumans() }}</p>
                                </div>
                                <div class="col-sm-12 col-xl-6">
                                @if($data['afterimage'])
                                    <p>After Image: <a class="b-r-15 mt-3" href="{{ ($data['afterimage']->after_link) ? $data['afterimage']->after_link:'/'.$data['afterimage']->after_file }}" target="_blank"><img class="after_img" src="{{ ($data['afterimage']->after_link) ? $data['afterimage']->after_link:'/'.$data['afterimage']->after_file }}"></a></p>
                                @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 xl-50 appointment box-col-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="header-top">
                                <h5 class="m-0">{{ $symbol }} Wins/Loss/BE</h5>
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
                                <h5 class="m-0">{{ $symbol }} Profitability</h5>
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
        var symbol_data = {!! json_encode($data, JSON_HEX_TAG) !!};
    </script>
    <script src="../assets/js/chart/apex-chart/apex-chart.js"></script>
    <script src="../assets/js/symbol-analytics/symbol-data.js"></script>
    <script src="../assets/js/tooltip-init.js"></script>
@endsection