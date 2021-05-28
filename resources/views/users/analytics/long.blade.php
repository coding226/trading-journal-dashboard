@extends('layouts.app')
@section('title')
<title>Analytics Long | The Trading Buddy</title>
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
                        <li class="breadcrumb-item"><a href="{{ url('/') }}"> <i data-feather="home"></i></a></li>
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
                                <p class="f-w-500 font-roboto">Total Amount Of Long Positions
                                <h4 class="f-w-500 mb-0 f-20"><span class="counter">{{ $data['long_tcount'] }}</span></h4>
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
                                <p class="f-w-500 font-roboto">Total Amount Of Winning Long Positions
                                <h4 class="f-w-500 mb-0 f-20"><span class="counter">{{ $data['winlong_tcount'] }}</span></h4>
                            </div>
                            <div class="align-self-center"><i class="font-primary" data-feather="arrow-up"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-3 box-col-3">
                <div class="card o-hidden">
                    <div class="card-body">
                        <div class="ecommerce-widgets media">
                            <div class="media-body">
                                <p class="f-w-500 font-roboto">Total Amount Of Losing Long Positions
                                <h4 class="f-w-500 mb-0 f-20"><span class="counter">{{ $data['losslong_tcount'] }}</span></h4>
                            </div>
                            <div class="align-self-center"><i class="font-primary" data-feather="arrow-down"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-3 box-col-3">
                <div class="card o-hidden">
                    <div class="card-body">
                        <div class="ecommerce-widgets media">
                            <div class="media-body">
                                <p class="f-w-500 font-roboto">Total Amount Of Break Even Long Positions
                                <h4 class="f-w-500 mb-0 f-20"><span class="counter">{{ $data['belong_tcount'] }}</span></h4>
                            </div>
                            <div class="align-self-center"><i class="font-primary" data-feather="minus"></i></div>
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
                        <p>Long Position Win Rate: {{ number_format($data['winlong_tcount']/$data['long_tcount'], 2, '.', '') }}</p>
                        <p>Long Position Percentage Account Gain (%): {{ $data['longtradesums']['percentage_gl_sum'] }}</p>
                        <p>Total Amount Of Pips from Long Trades: {{ $data['longtradesums']['pips_sum'] }}</p>
                        <p>Average Amount Of Long Positions Per Month: {{ $data['long_ave_per_month'] }}</p>
                        <p>Average Long Trade Duration (Time): {{ Carbon\CarbonInterval::seconds($data['longtradesums']['duration_sum']/$data['long_tcount'])->cascade()->forHumans() }}</p>
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
                        <p>Symbol: {{ $data['bestlongtrade']->symbol->symbol }}</p>
                        <p>Long or Short: {{ $data['bestlongtrade']->long_short }}</p>
                        <p>AccountProfit(£,$,€): {{ $data['bestlongtrade']->profit_gl }}</p>
                        <p>Percentage Account Gain (%): {{ $data['bestlongtrade']->percentage_gl }}</p>
                        <p>Total Amount Of Pips: {{ $data['bestlongtrade']->pips }}</p>
                        <p>Total Trade Duration: {{ Carbon\CarbonInterval::seconds($data['bestlongtrade']->duration)->cascade()->forHumans() }}</p>
                        <p>Entry Time: {{ $data['bestlongtrade']->created_at }}</p>
                        <p>After Images:
                        @foreach($data['afterimages'] as $afterimage)
                            <a class="b-r-15 mt-3" href="{{ ($afterimage->after_link) ? $afterimage->after_link:'/'.$afterimage->after_file }}">Please click here to see After Images</a>, 
                        @endforeach
                        </p>
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
<script>
    var analytics_long_data = {!! json_encode($data, JSON_HEX_TAG) !!};
</script>
<script src="../assets/js/chart/apex-chart/apex-chart.js"></script>
<script src="../assets/js/analytics/long-chart.js"></script>
<script src="../assets/js/tooltip-init.js"></script>
@endsection
