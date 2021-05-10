@extends('layouts.app')
@section('title')
<title>Admin Dashbaord | Trading Buddy</title>
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
            <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden">
                    <div class="bg-primary b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="align-self-center text-center"><i data-feather="database"></i></div>
                            <div class="media-body"><span class="m-0">Daily Income($)</span>
                                <h4 class="mb-0 counter">6659</h4><i class="icon-bg" data-feather="database"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden">
                    <div class="bg-secondary b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="align-self-center text-center"><i data-feather="shopping-bag"></i></div>
                            <div class="media-body"><span class="m-0">Weekly Income($)</span>
                                <h4 class="mb-0 counter">9856</h4><i class="icon-bg" data-feather="shopping-bag"></i>
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
                            <div class="media-body"><span class="m-0">Monthly Income($)</span>
                                <h4 class="mb-0 counter">893</h4><i class="icon-bg" data-feather="message-circle"></i>
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
                            <div class="media-body"><span class="m-0">Yearly Income($)</span>
                                <h4 class="mb-0 counter">45631</h4><i class="icon-bg" data-feather="user-plus"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 xl-100 box-col-12">
                <div class="widget-joins card widget-arrow">
                    <div class="row">
                        <div class="col-sm-6 pe-0">
                            <div class="media border-after-xs">
                                <div class="align-self-center me-3 text-start"><span class="mb-1">New Paying Members</span>
                                    <h5 class="mb-0">Today</h5>
                                </div>
                                <div class="media-body align-self-center"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-arrow-down font-primary">
                                        <line x1="12" y1="5" x2="12" y2="19"></line>
                                        <polyline points="19 12 12 19 5 12"></polyline>
                                    </svg></div>
                                <div class="media-body">
                                    <h5 class="mb-0">$<span class="counter">25698</span></h5><span
                                        class="mb-1">-$2658(36%)</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 ps-0">
                            <div class="media">
                                <div class="align-self-center me-3 text-start"><span class="mb-1">New Paying Members</span>
                                    <h5 class="mb-0">Month</h5>
                                </div>
                                <div class="media-body align-self-center"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-arrow-up font-primary">
                                        <line x1="12" y1="19" x2="12" y2="5"></line>
                                        <polyline points="5 12 12 5 19 12"></polyline>
                                    </svg></div>
                                <div class="media-body ps-2">
                                    <h5 class="mb-0">$<span class="counter">6954</span></h5><span
                                        class="mb-1">+$369(15%)</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 pe-0">
                            <div class="media border-after-xs">
                                <div class="align-self-center me-3 text-start"><span class="mb-1">New Paying Members</span>
                                    <h5 class="mb-0">Week</h5>
                                </div>
                                <div class="media-body align-self-center"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-arrow-up font-primary">
                                        <line x1="12" y1="19" x2="12" y2="5"></line>
                                        <polyline points="5 12 12 5 19 12"></polyline>
                                    </svg></div>
                                <div class="media-body">
                                    <h5 class="mb-0">$<span class="counter">63147</span></h5><span
                                        class="mb-1">+$69(65%)</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 ps-0">
                            <div class="media">
                                <div class="align-self-center me-3 text-start"><span class="mb-1">New Paying Members</span>
                                    <h5 class="mb-0">Year</h5>
                                </div>
                                <div class="media-body align-self-center ps-3"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-arrow-up font-primary">
                                        <line x1="12" y1="19" x2="12" y2="5"></line>
                                        <polyline points="5 12 12 5 19 12"></polyline>
                                    </svg></div>
                                <div class="media-body ps-2">
                                    <h5 class="mb-0">$<span class="counter">96198</span></h5><span
                                        class="mb-1">+$654(90%) </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 xl-100 box-col-12">
                <div class="widget-joins card widget-arrow">
                    <div class="row">
                        <div class="col-sm-6 pe-0">
                            <div class="media border-after-xs">
                                <div class="align-self-center me-3 text-start">
                                    <h5 class="mb-0">Total Paying Memebers</h5>
                                </div>
                                <div class="media-body align-self-center"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-arrow-down font-primary">
                                        <line x1="12" y1="5" x2="12" y2="19"></line>
                                        <polyline points="19 12 12 19 5 12"></polyline>
                                    </svg></div>
                                <div class="media-body">
                                    <h5 class="mb-0"><span class="counter">98</span></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 ps-0">
                            <div class="media">
                                <div class="align-self-center me-3 text-start">
                                    <h5 class="mb-0">Total additional accounts</h5>
                                </div>
                                <div class="media-body align-self-center"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-arrow-up font-primary">
                                        <line x1="12" y1="19" x2="12" y2="5"></line>
                                        <polyline points="5 12 12 5 19 12"></polyline>
                                    </svg></div>
                                <div class="media-body ps-2">
                                    <h5 class="mb-0"><span class="counter">154</span></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 pe-0">
                            <div class="media border-after-xs">
                                <div class="align-self-center me-3 text-start">
                                    <h5 class="mb-0">Total Free Members</h5>
                                </div>
                                <div class="media-body align-self-center"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-arrow-up font-primary">
                                        <line x1="12" y1="19" x2="12" y2="5"></line>
                                        <polyline points="5 12 12 5 19 12"></polyline>
                                    </svg></div>
                                <div class="media-body">
                                    <h5 class="mb-0"><span class="counter">347</span></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 ps-0">
                            <div class="media">
                                <div class="align-self-center me-3 text-start">
                                    <h5 class="mb-0">Total Users</h5>
                                </div>
                                <div class="media-body align-self-center ps-3"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-arrow-up font-primary">
                                        <line x1="12" y1="19" x2="12" y2="5"></line>
                                        <polyline points="5 12 12 5 19 12"></polyline>
                                    </svg></div>
                                <div class="media-body ps-2">
                                    <h5 class="mb-0"><span class="counter">6198</span></h5>
                                </div>
                            </div>
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
