@extends('layouts.app')
@section('title')
    <title>Active Trades | The Trading Buddy</title>
@endsection
@section('style')
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/datatables.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/daterange-picker.css">
    <style>
        .card-body.table-responsive{
            margin-top: -140px;
        }
        #sample_3_tools li{
            list-style-type: none;
        }
        .dropdown-basic .dropdown .dropdown-content{
            top: 43px !important;
        }
        ul.pagination li{
            min-width: 1.5em;
            padding: 0.5em 1em;
            -webkit-box-shadow: none;
            box-shadow: none;
        }
        ul.pagination li a{
            color: #000;
        }
        ul.pagination li.active{
            background: var(--theme-deafult);
            -webkit-box-shadow: none;
            box-shadow: none;
        }
        ul.pagination li.active a{
            color: #fff !important;
        }
        .trade-del{
            cursor: pointer;
        }
        .media{
            margin: 0 5px;
        }
    </style>
@endsection
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>Active Trades</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">                                       
                                <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item">Active Trades</li>
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
                            <h5 class="mb-3">Trade Page</h5><span>Select date range to view specific data.</span>
                            <div class="row form theme-form mt-3">
                                <div class="col">
                                    <div class="mb-3 row">
                                        <p class="col-sm-3 text-end pt-3 mt-0">Date Filter:</p>
                                        <div class="col-sm-5">
                                            <input class="form-control" id="reportrange" type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body table-responsive" id="trade-table">
                            <div class="portlet light portlet-fit portlet-datatable bordered">
                                <div class="portlet-body">
                                    <div class="table-container">
                                        <table class="table table-striped table-bordered table-hover" id="sample_2">
                                            <thead>
                                                <tr>
                                                    <th>Trade No</th>
                                                    <th>Symbol:</th>
                                                    <th>Long/Short</th>
                                                    <th class="text-center">Start Date</th>
                                                    <th class="text-center">current Duration</th>
                                                    <th>Open Price</th>
                                                    <th>Edit/Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($trades as $trade)
                                                <tr>
                                                    <td class="text-center">{{ $trade->trade_num }}</td>
                                                    <td class="text-center">{{ $trade->symbol->symbol }}</td>
                                                    <td class="text-center">{{ $trade->long_short }}</td>
                                                    <td class="text-center">{{ $trade->start_datetime }}</td>
                                                    <td class="text-center"></td>
                                                    <td class="text-center">{{ number_format($trade->open_price, 2, '.', '') }}</td>
                                                    <td class="d-flex">
                                                        <a href="{{ url('/edittrade') }}/{{ auth::user()->name }}?tradeid={{ $trade->id }}" class="pull-left">
                                                            <i data-feather="edit-3"></i>
                                                        </a>
                                                        <a data-href="{{ url('/deltrade') }}/{{ auth::user()->name }}" dataid="{{ $trade->id }}" class="trade-del pull-right">
                                                            <i data-feather="trash" data-bs-toggle="tooltip" data-bs-placement="right" title="View"></i>
                                                        </a>
                                                        <a href="{{ url('/viewtrade') }}/{{ auth::user()->name }}?tradeid={{ $trade->id }}" class="pull-left">
                                                            <p data-bs-toggle="tooltip" data-bs-placement="right" title="View"><i data-feather="eye"></i></p>
                                                        </a>
                                                    </td>
                                                </tr>
                                                @endforeach
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
    <script src="../assets/js/datatable/datatables/scripts/app.min.js" type="text/javascript"></script>
    <script src="../assets/js/trade/table-datatables-buttons.min.js" type="text/javascript"></script>
    <script src="../assets/js/trade/activetrade.js" type="text/javascript"></script>
@endsection