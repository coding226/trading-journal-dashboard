@extends('layouts.app')
@section('title')
<title>Analytics Long | The Trading Buddy</title>
@endsection
@section('style')
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/chartist.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/date-picker.css">
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
            <div class="col-xl-3 xl-50 chart_data_right box-col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="media-body right-chart-content">
                                <h4>{{ $data['long_tcount'] }}                                    <!-- <span class="new-box">Hot</span> -->
                                </h4><span>Total Amount Of Long Positions</span>
                            </div>
                            <div class="knob-block text-center">
                                <input class="knob1" data-width="10" data-height="70" data-thickness=".3"
                                    data-angleoffset="0" data-linecap="round" data-fgcolor="#7366ff"
                                    data-bgcolor="#eef5fb" value="100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 xl-50 chart_data_right box-col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="media-body right-chart-content">
                                <h4>{{ $data['winlong_tcount'] }}</h4><span>Total Amount Of Winning Long Positions</span>
                            </div>
                            <div class="knob-block text-center">
                                <input class="knob1" data-width="10" data-height="70" data-thickness=".3"
                                    data-angleoffset="0" data-linecap="round" data-fgcolor="#7366ff"
                                    data-bgcolor="#eef5fb" value="{{ number_format($data['winlong_tcount']/$data['long_tcount']*100, 2, ',', '') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 xl-50 chart_data_right box-col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="media-body right-chart-content">
                                <h4>{{ $data['losslong_tcount'] }}</h4><span>Total Amount Of Losing Long Positions</span>
                            </div>
                            <div class="knob-block text-center">
                                <input class="knob1" data-width="10" data-height="70" data-thickness=".3"
                                    data-angleoffset="0" data-linecap="round" data-fgcolor="#7366ff"
                                    data-bgcolor="#eef5fb" value="{{ number_format($data['losslong_tcount']/$data['long_tcount']*100, 2, ',', '') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 xl-50 chart_data_right box-col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="media-body right-chart-content">
                                <h4>{{ $data['belong_tcount'] }}</h4><span>Total Amount Of Break Even Long Positions</span>
                            </div>
                            <div class="knob-block text-center">
                                <input class="knob1" data-width="10" data-height="70" data-thickness=".3"
                                    data-angleoffset="0" data-linecap="round" data-fgcolor="#7366ff"
                                    data-bgcolor="#eef5fb" value="{{ number_format($data['belong_tcount']/$data['long_tcount']*100, 2, ',', '') }}">
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
                        <p>Long Position Win Rate: {{ number_format($data['winlong_tcount']/$data['long_tcount']*100, 2, '.', '') }}</p>
                        <p>Long Position Percentage Account Gain (%): {{ $data['longtradesums']['percentage_gl_sum'] }}</p>
                        <p>Total Amount Of Pips from Long Trades: {{ $data['longtradesums']['pips_sum'] }}</p>
                        <p>Average Amount Of Long Positions Per Month: {{ $data['long_ave_per_month'] }}</p>
                        <p>Average Long Trade Duration (Time): {{ Carbon\CarbonInterval::seconds($data['longtradesums']['duration_sum']/$data['long_tcount'])->cascade()->forHumans() }}</p>
                    </div>
                    </p>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-header b-l-primary border-3">
                        <h5>Best Long Position (Calculated on Percentage Gain)</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 col-xl-6">
                                <p>Symbol: {{ $data['bestlongtrade']->symbol->symbol }}</p>
                                <p>Long or Short: {{ $data['bestlongtrade']->long_short }}</p>
                                <p>AccountProfit(£,$,€): {{ $data['bestlongtrade']->profit_gl }}</p>
                                <p>Percentage Account Gain (%): {{ $data['bestlongtrade']->percentage_gl }}</p>
                                <p>Total Amount Of Pips: {{ $data['bestlongtrade']->pips }}</p>
                                <p>Total Trade Duration: {{ Carbon\CarbonInterval::seconds($data['bestlongtrade']->duration)->cascade()->forHumans() }}</p>
                                <p>Entry Time: {{ $data['bestlongtrade']->created_at }}</p>
                            </div>
                            <div class="col-sm-12 col-xl-6">
                                @if($data['afterimage'])
                                {{-- <p>After Image: <a class="b-r-15 mt-3" href="{{ ($afterimage->after_link) ? $afterimage->after_link:'/'.$afterimage->after_file }}">Please click here to see After Images</a> --}}
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
                            <h5 class="m-0">Long Trades Wins/Loss/BE</h5>
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
                            <h5 class="m-0">Long Trades Percentage Gain Graph</h5>
                        </div>
                    </div>
                    <div class="card-Body">
                        <div class="radar-chart">
                            <div id="longgainmonth-graph"> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 xl-50 appointment box-col-6">
                <div class="card">
                    <div class="card-header">
                        <div class="header-top">
                            <h5 class="m-0">Total Amount of Long Trades Per symbol</h5>
                            <div class="card-header-right-icon">
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle" id="dropdownMenuButton1" type="button" data-bs-toggle="dropdown" aria-expanded="false">All</button>
                                    <div class="tsymbol-chart dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                        <a class="dropdown-item" href="javascript:;">This Week</a>
                                        <a class="dropdown-item" href="javascript:;">This Month</a>
                                        <a class="dropdown-item" href="javascript:;">This Year</a>
                                        <a class="dropdown-item" href="javascript:;">All</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-Body">
                        <div class="radar-chart">
                            <div id="long-trades-pairs-chart"> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 xl-50 appointment box-col-6">
                <div class="card">
                    <div class="card-header">
                        <div class="header-top">
                            <h5 class="m-0">Long Symbol Profitability</h5>
                            <div class="card-header-right-icon">
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle" id="dropdownMenuButton2" type="button" data-bs-toggle="dropdown" aria-expanded="false">All</button>
                                    <div class="psymbol-chart dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton2">
                                        <a class="dropdown-item" href="javascript:;">This Week</a>
                                        <a class="dropdown-item" href="javascript:;">This Month</a>
                                        <a class="dropdown-item" href="javascript:;">This Year</a>
                                        <a class="dropdown-item" href="javascript:;">All</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-Body">
                        <div class="radar-chart">
                            <div id="long-profit-pairs-chart"> </div>
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
<script src="../assets/js/chart/chartist/chartist.js"></script>
<script src="../assets/js/chart/knob/knob.min.js"></script>
<script src="../assets/js/chart/knob/knob-chart.js"></script>
<script src="../assets/js/dashboard/default.js"></script>
<script src="../assets/js/chart/apex-chart/apex-chart.js"></script>
<script src="../assets/js/analytics/long-chart.js"></script>
<script src="../assets/js/tooltip-init.js"></script>
@endsection
