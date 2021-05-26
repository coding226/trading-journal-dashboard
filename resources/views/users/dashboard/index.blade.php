@extends('layouts.app')
@section('title')
<title>Dashbaord | The Trading Buddy</title>
@endsection
@section('style')
<link rel="stylesheet" type="text/css" href="../assets/css/vendors/animate.css">
<link rel="stylesheet" type="text/css" href="../assets/css/vendors/chartist.css">
<link rel="stylesheet" type="text/css" href="../assets/css/vendors/date-picker.css">
<link rel="stylesheet" type="text/css" href="../assets/css/vendors/datatables.css">
@endsection
@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>Dashboard</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row second-chart-list third-news-update">
            <div class="col-xl-4 col-lg-12 xl-50 morning-sec box-col-12">
                <div class="card o-hidden profile-greeting">
                    <div class="card-body">
                        <div class="media">
                            <div class="badge-groups w-100">
                                <div class="badge f-12"><i class="me-1" data-feather="clock"></i><span id="txt"></span>
                                </div>
                                <div class="badge f-12"><a href="{{ url('/account-setting') }}" class="text-white"><i class="fa fa-spin fa-cog f-14"></i></a></div>
                            </div>
                        </div>
                        <div class="greeting-user text-center">
                            <div class="profile-vector"><img class="img-fluid"
                                    src="../assets/images/dashboard/welcome.png" alt=""></div>
                            <h4 class="f-w-600"><span id="greeting">Good Morning</span><span>,
                                    {{Auth::user()->firstname}}</span> <span class="right-circle"><i
                                        class="fa fa-check-circle f-14 middle"></i></span></h4>
                            <p><span> Todays profit is <span class="daily_percentage_gain">+3.5</span>% which makes your Total Percentage <span class="monthly_percentage_gain">+12</span>% this month.</span>
                            </p>
                            <div class="whatsnew-btn"><a class="btn btn-primary" href="{{ url('/new-trade') }}">Create
                                    New Trade</a></div>
                            <!-- <div class="left-icon"><i class="fa fa-bell"> </i></div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 xl-100 dashboard-sec box-col-12">
                <div class="card earning-card">
                    <div class="card-body p-0">
                        <div class="row m-0">
                            <div class="col-xl-3 earning-content p-0">
                                <div class="row m-0 chart-left">
                                    <div class="col-xl-12 p-0 left_side_earning">
                                        <h5>{{ $acc_num }}</h5>
                                        <p class="font-roboto">Account Number</p>
                                    </div>
                                    <div class="col-xl-12 p-0 left_side_earning">
                                        <h5><span id="current_currecny">$</span> {{ number_format(Auth::user()->current_user->balance) }} </h5>
                                        <p class="font-roboto">Account Balance</p>
                                    </div>
                                    <div class="col-xl-12 p-0 left_side_earning">
                                        <h5>${{ $tprofit }}</h5>
                                        <p class="font-roboto">Total Profit ($)</p>
                                    </div>
                                    <div class="col-xl-12 p-0 left_side_earning">
                                        <h5>{{ $tpecen }}%</h5>
                                        <p class="font-roboto">Total Percentage Gain</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-9 p-0">
                                <div class="chart-right">
                                    <div class="row m-0 p-tb">
                                        <div class="col-xl-8 col-md-8 col-sm-8 col-12 p-0">
                                            <div class="inner-top-left">
                                                <ul class="d-flex list-unstyled">
                                                    <li>Daily</li>
                                                    <li class="active">Weekly</li>
                                                    <li>Monthly</li>
                                                    <li>Yearly</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-4 col-sm-4 col-12 p-0 justify-content-end">
                                            <div class="inner-top-right">
                                                <ul class="d-flex list-unstyled justify-content-end">
                                                    <li>Growth</li>
                                                    <li>Equity</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="card-body p-0">
                                                <div class="current-sale-container">
                                                    <div id="chart-currently"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="col-xl-3 xl-50 chart_data_right box-col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="media-body right-chart-content">
                                    <h4>$95,900</h4><span>Yearly Percentage Gain</span>
                                </div>
                                <div class="knob-block text-center">
                                    <input class="knob1" data-width="10" data-height="70" data-thickness=".3" data-angleoffset="0" data-linecap="round" data-fgcolor="#7366ff" data-bgcolor="#eef5fb" value="60">
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
                                    <h4>$95,900</h4><span>Monthly Percentage Gain</span>
                                </div>
                                <div class="knob-block text-center">
                                    <input class="knob1" data-width="10" data-height="70" data-thickness=".3" data-angleoffset="0" data-linecap="round" data-fgcolor="#7366ff" data-bgcolor="#eef5fb" value="60">
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
                                    <h4>$95,900</h4><span>Weekly Percentage Gain</span>
                                </div>
                                <div class="knob-block text-center">
                                    <input class="knob1" data-width="10" data-height="70" data-thickness=".3" data-angleoffset="0" data-linecap="round" data-fgcolor="#7366ff" data-bgcolor="#eef5fb" value="60">
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
                                    <h4>$95,900</h4><span>Daily Percentage Gain</span>
                                </div>
                                <div class="knob-block text-center">
                                    <input class="knob1" data-width="10" data-height="70" data-thickness=".3" data-angleoffset="0" data-linecap="round" data-fgcolor="#7366ff" data-bgcolor="#eef5fb" value="60">
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden">
                    <div class="bg-primary b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="align-self-center text-center"><i data-feather="database"></i></div>
                            <div class="media-body"><span class="m-0">Yearly Percentage Gain</span>
                                <h4 class="mb-0 counter"><span class="yearly_percentage_gain">0</span><span>%</span></h4><i class="icon-bg" data-feather="database"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden">
                    <div class="bg-primary b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="align-self-center text-center"><i data-feather="shopping-bag"></i></div>
                            <div class="media-body"><span class="m-0">Monthly Percentage Gain</span>
                                <h4 class="mb-0 counter"><span class="monthly_percentage_gain">0</span><span>%</span></h4><i class="icon-bg" data-feather="shopping-bag"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden">
                    <div class="bg-primary b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="align-self-center text-center"><i data-feather="message-circle"></i></div>
                            <div class="media-body"><span class="m-0">Weekly Percentage Gain</span>
                                <h4 class="mb-0 counter"><span class="weekly_percentage_gain">0</span><span>%</span></h4><i class="icon-bg" data-feather="message-circle"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden">
                    <div class="bg-primary b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="align-self-center text-center"><i data-feather="user-plus"></i></div>
                            <div class="media-body"><span class="m-0">Daily Percentage Gain</span>
                                <h4 class="mb-0 counter"><span class="daily_percentage_gain">0</span><span>%</span></h4><i class="icon-bg" data-feather="user-plus"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-6 xl-50 appointment box-col-6">
                <div class="card">
                    <div class="card-header">
                        <div class="header-top">
                            <h5 class="m-0">Recent Trades</h5>
                            <div class="card-header-right-icon">
                            </div>
                        </div>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Symbol:</th>
                                    <th scope="col">Long/Short</th>
                                    <th scope="col">Trade Duration</th>
                                    <th scope="col">Profit/Loss($)</th>
                                    <th scope="col">Profit/Loss(%)</th>
                                    <th scope="col">Win/Loss/BE</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($recents as $trade)
                                <tr>
                                    <td class="text-center">{{ $trade->trade_num }}</td>
                                    <td class="text-center">{{ $trade->symbol->symbol }}</td>
                                    <td class="text-center">{{ $trade->long_short }}</td>
                                    <td class="text-center">{{ $trade->duration }}</td>
                                    @if( $trade->profit_gl > 0 )
                                    <td class="font-success text-center">{{ $trade->profit_gl }}</td>
                                    @else
                                    <td class="font-danger text-center">{{ $trade->profit_gl }}</td>
                                    @endif
                                    @if( $trade->percentage_gl > 0 )
                                    <td class="font-success text-center">{{ $trade->percentage_gl }}</td>
                                    @else
                                    <td class="font-danger text-center">{{ $trade->percentage_gl }}</td>
                                    @endif
                                    @if( $trade->profit_gl > 0 )
                                    <td class="font-success text-center">Win</td>
                                    @else
                                    <td class="font-danger text-center">Loss</td>
                                    @endif
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 xl-50 appointment box-col-6">
                <div class="card">
                    <div class="card-header">
                        <div class="header-top">
                            <h5 class="m-0">Profitability</h5>
                        </div>
                    </div>
                    <div class="card-Body apex-chart">
                        <div class="radar-chart">
                            <div id="profitablility-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 xl-50 appointment box-col-6">
                <div class="card">
                    <div class="card-header">
                        <div class="header-top">
                            <h5 class="m-0">Trades Pairs</h5>
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
                            <div id="trades-pairs-chart"> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 xl-50 appointment box-col-6">
                <div class="card">
                    <div class="card-header">
                        <div class="header-top">
                            <h5 class="m-0">Symbol Profitability</h5>
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
                            <div id="profit-pairs-chart"> </div>
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
<!-- <script src="../assets/js/chart/chartist/chartist.js"></script>
<script src="../assets/js/chart/chartist/chartist-plugin-tooltip.js"></script> -->
<script src="../assets/js/chart/knob/knob.min.js"></script>
<script src="../assets/js/chart/knob/knob-chart.js"></script>
<script src="../assets/js/chart/apex-chart/apex-chart.js"></script>
<script src="../assets/js/chart/apex-chart/stock-prices.js"></script>
<script src="../assets/js/notify/bootstrap-notify.min.js"></script>
<script src="../assets/js/dashboard/default.js"></script>
<script src="../assets/js/notify/index.js"></script>
<!-- <script src="../assets/js/chart/apex-chart/apex-chart.js"></script> -->
<script>
    var wins = {!! json_encode($wins_num, JSON_HEX_TAG) !!};
    var loses = {!! json_encode($loses_num, JSON_HEX_TAG) !!};
</script>
<script src="../assets/js/dashboard/chart_dash.js"></script>
<script src="../assets/js/datepicker/date-picker/datepicker.js"></script>
<script src="../assets/js/datepicker/date-picker/datepicker.en.js"></script>
<script src="../assets/js/datepicker/date-picker/datepicker.custom.js"></script>
<script src="../assets/js/typeahead/handlebars.js"></script>
<script src="../assets/js/typeahead/typeahead.bundle.js"></script>
<script src="../assets/js/typeahead/typeahead.custom.js"></script>
<script src="../assets/js/general-widget.js"></script>
<script src="../assets/js/typeahead-search/handlebars.js"></script>
<script src="../assets/js/typeahead-search/typeahead-custom.js"></script>
<script src="../assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
<script src="../assets/js/datatable/datatables/datatable.custom.js"></script>
@endsection
