@extends('layouts.app')
@section('title')
    <title>Dashbaord | Trading Journal</title>
@endsection
@section('style')
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/animate.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/chartist.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/date-picker.css">
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
                                    <div class="badge f-12"><i class="me-1" data-feather="clock"></i><span id="txt"></span></div>
                                    <div class="badge f-12"><i class="fa fa-spin fa-cog f-14"></i></div>
                                </div>
                            </div>
                            <div class="greeting-user text-center">
                                <div class="profile-vector"><img class="img-fluid" src="../assets/images/dashboard/welcome.png" alt=""></div>
                                <h4 class="f-w-600"><span id="greeting">Good Morning</span> <span class="right-circle"><i class="fa fa-check-circle f-14 middle"></i></span></h4>
                                <p><span> Today's earrning is $405 & your sales increase rate is 3.7 over the last 24 hours</span>
                                </p>
                                <div class="whatsnew-btn"><a class="btn btn-primary">Whats New !</a></div>
                                <div class="left-icon"><i class="fa fa-bell"> </i></div>
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
                                            <h5>Dashboard</h5>
                                            <p class="font-roboto">Overview of last month</p>
                                        </div>
                                        <div class="col-xl-12 p-0 left_side_earning">
                                            <h5>$4055.56 </h5>
                                            <p class="font-roboto">This Month Earning</p>
                                        </div>
                                        <div class="col-xl-12 p-0 left_side_earning">
                                            <h5>$1004.11</h5>
                                            <p class="font-roboto">This Month Profit</p>
                                        </div>
                                        <div class="col-xl-12 p-0 left_side_earning">
                                            <h5>90%</h5>
                                            <p class="font-roboto">This Month Sale</p>
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
                                                        <li>Online</li>
                                                        <li>Store</li>
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
                                    <div class="row border-top m-0">
                                        <div class="col-xl-4 ps-0 col-md-6 col-sm-6">
                                            <div class="media p-0">
                                                <div class="media-left"><i class="icofont icofont-crown"></i></div>
                                                <div class="media-body">
                                                    <h6>Referral Earning</h6>
                                                    <p>$5,000.20</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6 col-sm-6">
                                            <div class="media p-0">
                                                <div class="media-left bg-secondary"><i class="icofont icofont-heart-alt"></i></div>
                                                <div class="media-body">
                                                    <h6>Cash Balance</h6>
                                                    <p>$2,657.21</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-12 pe-0">
                                            <div class="media p-0">
                                                <div class="media-left"><i class="icofont icofont-cur-dollar"></i></div>
                                                <div class="media-body">
                                                    <h6>Sales forcasting</h6>
                                                    <p>$9,478.50 </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                                    <h4>$95,900<span class="new-box">Hot</span></h4><span>Yearly Percentage Gain</span>
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
                                    <h4>$95,900<span class="new-box">Hot</span></h4><span>Monthly Percentage Gain</span>
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
                                    <h4>$95,900<span class="new-box">Hot</span></h4><span>Weekly Percentage Gain</span>
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
                                    <h4>$95,900<span class="new-box">Hot</span></h4><span>Daily Percentage Gain</span>
                                </div>
                                <div class="knob-block text-center">
                                    <input class="knob1" data-width="10" data-height="70" data-thickness=".3" data-angleoffset="0" data-linecap="round" data-fgcolor="#7366ff" data-bgcolor="#eef5fb" value="60">
                                </div>
                            </div>
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
                        <div class="card-Body">
                            <div class="radar-chart">
                                <div id="basic-bar"> </div>
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
                                        <button class="btn dropdown-toggle" id="dropdownMenuButton" type="button" data-bs-toggle="dropdown" aria-expanded="false">Year</button>
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
                                <div id="column-chart"> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 xl-50 appointment box-col-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="header-top">
                                <h5 class="m-0">Profitable Pairs</h5>
                                <div class="card-header-right-icon">
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle" id="dropdownMenuButton" type="button" data-bs-toggle="dropdown" aria-expanded="false">Year</button>
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
                                <div id="stepline"> </div>
                            </div>
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
                                        <button class="btn dropdown-toggle" id="dropdownMenuButton" type="button" data-bs-toggle="dropdown" aria-expanded="false">Year</button>
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
                                <div id="marketchart"> </div>
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
    <script src="../assets/js/chart/chartist/chartist.js"></script>
    <script src="../assets/js/chart/chartist/chartist-plugin-tooltip.js"></script>
    <script src="../assets/js/chart/knob/knob.min.js"></script>
    <script src="../assets/js/chart/knob/knob-chart.js"></script>
    <script src="../assets/js/chart/apex-chart/apex-chart.js"></script>
    <script src="../assets/js/chart/apex-chart/stock-prices.js"></script>
    <script src="../assets/js/notify/bootstrap-notify.min.js"></script>
    <script src="../assets/js/dashboard/default.js"></script>
    <script src="../assets/js/notify/index.js"></script>
    <script src="../assets/js/chart/apex-chart/apex-chart.js"></script>
    <script src="../assets/js/chart/apex-chart/chart-custom.js"></script>
    <script src="../assets/js/datepicker/date-picker/datepicker.js"></script>
    <script src="../assets/js/datepicker/date-picker/datepicker.en.js"></script>
    <script src="../assets/js/datepicker/date-picker/datepicker.custom.js"></script>
    <script src="../assets/js/typeahead/handlebars.js"></script>
    <script src="../assets/js/typeahead/typeahead.bundle.js"></script>
    <script src="../assets/js/typeahead/typeahead.custom.js"></script>
    <script src="../assets/js/typeahead-search/handlebars.js"></script>
    <script src="../assets/js/typeahead-search/typeahead-custom.js"></script>
@endsection