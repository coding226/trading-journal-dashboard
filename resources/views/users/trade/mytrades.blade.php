@extends('layouts.app')
@section('title')
    <title>My Trades | Trading Buddy</title>
@endsection
@section('style')
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/datatables.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/daterange-picker.css">
@endsection
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>My Trades</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">                                       
                                <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item">My Trades</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header pb-3">
                            <h5 class="mb-3">Trade Page</h5><span>Select Daterange to view specific date data.</span>
                            <div class="row form theme-form mt-3">
                                <div class="col">
                                    <div class="mb-3 row">
                                        <p class="col-sm-3 text-end pt-3 mt-0">Date Filter:</p>
                                        <div class="col-sm-5">
                                            <input class="form-control" id="reportrange" type="text">
                                        </div>
                                        <div class="col-sm-4 dropdown-basic text-end">
                                            <div class="dropdown mb-0">
                                                <div class="btn-group mb-0">
                                                    <button class="dropbtn btn-secondary btn-round" type="button">Export <span><i class="icofont icofont-airplane"></i></span></button>
                                                    <div class="dropdown-content"><a href="#">Print</a><a href="#">As PDF</a><a href="#">As CSV</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body table-responsive">
                            {{-- <table class="display" id="advance-12">
                                <thead>
                                    <tr>
                                        <th>Trade No</th>
                                        <th>Symbol:</th>
                                        <th>Long/Short</th>
                                        <th>Trade Duration</th>
                                        <th>Profit/Loss($)</th>
                                        <th>Profit/Loss(%)</th>
                                        <th>Win/Loss/BE</th>
                                        <th>Edit/Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 0;?>
                                    @foreach($trades as $trade)
                                    <tr>
                                        <td class="text-center">{{ $trade->trade_num }}</td>
                                        <td class="text-center">{{ $trade->symbol->symbol }}</td>
                                        <td class="text-center">{{ $trade->long_short }}</td>
                                        <td class="text-center">{{ $trade->duration }}</td>
                                        <td class="font-success text-center">{{ $trade->profit_gl }}</td>
                                        <td class="font-success text-center">{{ $trade->percentage_gl }}</td>
                                        <td class="font-success text-center"></td>
                                        <td><a href="#">Edit</a><br/><a href="#">Delete</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table> --}}
                            <div class="portlet light portlet-fit portlet-datatable bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-settings font-green"></i>
                                        <span class="caption-subject font-green sbold uppercase">Trigger Tools From Dropdown Menu</span>
                                    </div>
                                    <div class="actions">
                                        <div class="btn-group btn-group-devided" data-toggle="buttons">
                                            <label class="btn btn-transparent grey-salsa btn-outline btn-circle btn-sm active">
                                                <input type="radio" name="options" class="toggle" id="option1">Actions</label>
                                            <label class="btn btn-transparent grey-salsa btn-outline btn-circle btn-sm">
                                                <input type="radio" name="options" class="toggle" id="option2">Settings</label>
                                        </div>
                                        <div class="btn-group">
                                            <a class="btn red btn-outline btn-circle" href="javascript:;" data-toggle="dropdown">
                                                <i class="fa fa-share"></i>
                                                <span class="hidden-xs"> Trigger Tools </span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <ul class="dropdown-menu pull-right" id="sample_3_tools">
                                                <li>
                                                    <a href="javascript:;" data-action="0" class="tool-action">
                                                        <i class="icon-printer"></i> Print</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;" data-action="1" class="tool-action">
                                                        <i class="icon-check"></i> Copy</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;" data-action="2" class="tool-action">
                                                        <i class="icon-doc"></i> PDF</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;" data-action="3" class="tool-action">
                                                        <i class="icon-paper-clip"></i> Excel</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;" data-action="4" class="tool-action">
                                                        <i class="icon-cloud-upload"></i> CSV</a>
                                                </li>
                                                <li class="divider"> </li>
                                                <li>
                                                    <a href="javascript:;" data-action="5" class="tool-action">
                                                        <i class="icon-refresh"></i> Reload</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-container">
                                        <table class="table table-striped table-bordered table-hover" id="sample_3">
                                            <thead>
                                                <tr>
                                                    <th> Rendering engine </th>
                                                    <th> Browser </th>
                                                    <th> Platform(s) </th>
                                                    <th> Engine version </th>
                                                    <th> CSS grade </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td> Trident </td>
                                                    <td> Internet Explorer 4.0 </td>
                                                    <td> Win 95+ </td>
                                                    <td> 4 </td>
                                                    <td> X </td>
                                                </tr>
                                                <tr>
                                                    <td> Trident </td>
                                                    <td> Internet Explorer 5.0 </td>
                                                    <td> Win 95+ </td>
                                                    <td> 5 </td>
                                                    <td> C </td>
                                                </tr>
                                                <tr>
                                                    <td> Trident </td>
                                                    <td> Internet Explorer 5.5 </td>
                                                    <td> Win 95+ </td>
                                                    <td> 5.5 </td>
                                                    <td> A </td>
                                                </tr>
                                                <tr>
                                                    <td> Trident </td>
                                                    <td> Internet Explorer 6 </td>
                                                    <td> Win 98+ </td>
                                                    <td> 6 </td>
                                                    <td> A </td>
                                                </tr>
                                                <tr>
                                                    <td> Trident </td>
                                                    <td> Internet Explorer 7 </td>
                                                    <td> Win XP SP2+ </td>
                                                    <td> 7 </td>
                                                    <td> A </td>
                                                </tr>
                                            </tbody>
                                        </table>
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
    <script src="../assets/js/datatable/datatables/datatable.js" type="text/javascript"></script>
    <script src="../assets/js/datatable/datatables/datatables.min.js" type="text/javascript"></script>
    <script src="../assets/js/datatable/datatables/datatables.bootstrap.js" type="text/javascript"></script>
    <script src="../assets/js/datepicker/daterange-picker/moment.min.js"></script>
    <script src="../assets/js/datepicker/daterange-picker/daterangepicker.js"></script>
    <script src="../assets/js/datepicker/daterange-picker/daterange-picker.custom.js"></script>
    <script src="../assets/js/trade/table-datatables-buttons.min.js" type="text/javascript"></script>
@endsection