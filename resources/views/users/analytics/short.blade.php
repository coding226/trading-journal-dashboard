@extends('layouts.app')
@section('title')
    <title>Analytics Short | The Trading Buddy</title>
@endsection
@section('style')
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/chartist.css">
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
                <div class="col-6">
                    <h3 class="d-flex align-items-center">Analytics Page / Short </h3>
                    <input class="form-control daterangefilter" id="reportrange" type="text">
                    <p class="m-0 p-3">Please select daterange</p>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}"> <i data-feather="home"></i></a></li>
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
            <div class="col-xl-3 xl-50 chart_data_right box-col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="media-body right-chart-content">
                                <h4>{{ $data['short_tcount'] }}                                    <!-- <span class="new-box">Hot</span> -->
                                </h4><span>Total Amount Of Short Positions</span>
                            </div>
                            <div class="knob-block text-center">
                                <input class="knob1" data-width="10" data-height="70" data-thickness=".3"
                                    data-angleoffset="0" data-linecap="round" data-fgcolor="#7366ff"
                                    data-bgcolor="#eef5fb" value="{{ $data['short_tcount'] ? 100 : 0 }}">
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
                                <h4>{{ $data['winshort_tcount'] }}</h4><span>Total Amount Of Winning Short Positions</span>
                            </div>
                            <div class="knob-block text-center">
                                <input class="knob1" data-width="10" data-height="70" data-thickness=".3"
                                    data-angleoffset="0" data-linecap="round" data-fgcolor="#7366ff"
                                    data-bgcolor="#eef5fb" value="{{ $data['short_tcount'] ? number_format($data['winshort_tcount']/$data['short_tcount']*100, 2, ',', '') : 0 }}">
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
                                <h4>{{ $data['lossshort_tcount'] }}</h4><span>Total Amount Of Losing Short Positions</span>
                            </div>
                            <div class="knob-block text-center">
                                <input class="knob1" data-width="10" data-height="70" data-thickness=".3"
                                    data-angleoffset="0" data-linecap="round" data-fgcolor="#7366ff"
                                    data-bgcolor="#eef5fb" value="{{ $data['short_tcount'] ? number_format($data['lossshort_tcount']/$data['short_tcount']*100, 2, ',', '') : 0 }}">
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
                                <h4>{{ $data['beshort_tcount'] }}</h4><span>Total Amount Of Break Even Short Positions</span>
                            </div>
                            <div class="knob-block text-center">
                                <input class="knob1" data-width="10" data-height="70" data-thickness=".3"
                                    data-angleoffset="0" data-linecap="round" data-fgcolor="#7366ff"
                                    data-bgcolor="#eef5fb" value="{{ $data['short_tcount'] ? number_format($data['beshort_tcount']/$data['short_tcount']*100, 2, ',', '') : 0 }}">
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
                    @if($data['short_tcount'])
                        <p>Short Position Win Rate: {{ number_format($data['winshort_tcount']/$data['short_tcount'], 2, '.', '') }}</p>
                        <p>Short Position Percentage Account Gain (%): {{ number_format($data['shorttradesums']['percentage_gl_sum'], 2, '.', '') }}</p>
                        <p>Total Amount Of Pips from Short Trades: {{ $data['shorttradesums']['pips_sum'] }}</p>
                        <p>Average Amount Of Short Positions Per Month: {{ $data['short_ave_per_month'] }}</p>
                        <p>Average Short Trade Duration (Time): {{ Carbon\CarbonInterval::seconds($data['shorttradesums']['duration_sum']/$data['short_tcount'])->cascade()->forHumans() }}</p>
                    @endif
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-header b-l-primary border-3">
                        <h5>Best Short Trade(Calculated on Percentage Gain)</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                        @if($data['short_tcount'])
                            <div class="col-sm-12 col-xl-6">
                                <p>Symbol: {{ $data['bestshorttrade']->symbol->symbol }}</p>
                                <p>Long or Short: {{ $data['bestshorttrade']->long_short }}</p>
                                <p>AccountProfit({{ Auth::user()->current_user->current_currency->sign }}): {{ $data['bestshorttrade']->profit_gl }}</p>
                                <p>Percentage Account Gain (%): {{ number_format($data['bestshorttrade']->percentage_gl, 2, '.', '') }}</p>
                                <p>Total Amount Of Pips: {{ $data['bestshorttrade']->pips }}</p>
                                <p>Total Trade Duration: {{ Carbon\CarbonInterval::seconds($data['bestshorttrade']->duration)->cascade()->forHumans() }}</p>
                                <p>Entry Time: {{ $data['bestshorttrade']->created_at }}</p>
                            </div>
                            <div class="col-sm-12 col-xl-6">
                                @if($data['afterimage'])
                                {{-- <p>After Image: <a class="b-r-15 mt-3" href="{{ ($afterimage->after_link) ? $afterimage->after_link:'/'.$afterimage->after_file }}">Please click here to see After Images</a> --}}
                                <p>After Image: <a class="b-r-15 mt-3" href="{{ ($data['afterimage']->after_link) ? $data['afterimage']->after_link:'/'.$data['afterimage']->after_file }}" target="_blank"><img class="after_img" src="{{ ($data['afterimage']->after_link) ? $data['afterimage']->after_link:'/'.$data['afterimage']->after_file }}"></a></p>
                                @endif
                            </div>
                        @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 xl-50 appointment box-col-6">
                <div class="card">
                    <div class="card-header">
                        <div class="header-top">
                            <h5 class="m-0">Short Trades Wins/Loss/BE</h5>
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
                            <h5 class="m-0">Short Trades Percentage Gain Graph</h5>
                        </div>
                    </div>
                    <div class="card-Body">
                        <div class="radar-chart">
                            <div id="shortgainmonth-graph"> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 xl-50 appointment box-col-6">
                <div class="card">
                    <div class="card-header">
                        <div class="header-top">
                            <h5 class="m-0">Total Amount of Short Trades Per symbol</h5>
                        </div>
                    </div>
                    <div class="card-Body">
                        <div class="radar-chart">
                            <div id="short-trades-pairs-chart"> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 xl-50 appointment box-col-6">
                <div class="card">
                    <div class="card-header">
                        <div class="header-top">
                            <h5 class="m-0">Short Symbol Profitability</h5>
                        </div>
                    </div>
                    <div class="card-Body">
                        <div class="radar-chart">
                            <div id="short-profit-pairs-chart"> </div>
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
    var analytics_short_data = {!! json_encode($data, JSON_HEX_TAG) !!};
    var daterange2 = {!! json_encode($daterange, JSON_HEX_TAG) !!};
</script>
<script src="../assets/js/chart/chartist/chartist.js"></script>
<script src="../assets/js/chart/knob/knob.min.js"></script>
<script src="../assets/js/chart/knob/knob-chart.js"></script>
<script src="../assets/js/chart/apex-chart/apex-chart.js"></script>
<script src="../assets/js/analytics/short-chart.js"></script>
<script src="../assets/js/datepicker/daterange-picker/moment.min.js"></script>
<script src="../assets/js/datepicker/daterange-picker/daterangepicker.js"></script>
<script src="../assets/js/datepicker/daterange-picker/daterange-picker.custom.js"></script>
<script src="../assets/js/tooltip-init.js"></script>
@endsection