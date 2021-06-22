@extends('layouts.app')
@section('title')
    <title>My Trades | The Trading Buddy</title>
@endsection
@section('style')
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/datatables.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/daterange-picker.css">
    <style>
        .card-body.table-responsive{
            margin-top: -130px;
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
        #importbtn{
            padding: 12px 35px;
            border: none;
            border-radius: 20px 0 0 20px;   
        }
        #exportbtn{
            padding: 12px 35px;
            border: none;
            border-radius: 0 20px 20px 0;  
        }
        @media (max-width: 991px){
            #trade-table{
                margin-top: -110px;
            }
            .action .dropdown-basic{
                margin-bottom: 30px !important;
            }
        }
        @media (max-width: 767px){
            .card .theme-form .datefilter{
                margin-bottom: 70px;
            }
        }
    </style>
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
                            <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">                                       
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
                            @if(session()->has('message'))
                                <div class="alert alert-danger" role="alert">
                                        {{ session()->get('message') }}
                                </div>
                            @endif
                        <div class="card-header pb-3">
                            <h5 class="mb-3">Trade Page</h5><span>Select Daterange to view specific date data.</span>
                            <div class="row form theme-form mt-3">
                                <div class="datefilter col-md-8 col-sm-12">
                                    <div class="mb-3 row">
                                        <p class="col-md-3 col-sm-6 xl-4 text-end pt-3 mt-0">Date Filter:</p>
                                        <div class="col-md-5 col-sm-6 xl-4">
                                            <input class="form-control" id="reportrange" type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body table-responsive" id="trade-table">
                            <div class="portlet light portlet-fit portlet-datatable bordered">
                                <div class="portlet-title">
                                    <div class="actions">
                                        <div class="btn-group dropdown-basic mb-5 pull-right">
                                            <button class="btn btn-primary" id="importbtn" type="button" data-bs-toggle="modal" data-bs-target="#importformmoal">Import
                                                <span><i class="icofont icofont-upload"></i></span>
                                            </button>
                                            <div class="dropdown mb-5">
                                                <div class="btn-group">
                                                    <button class="dropbtn btn btn-secondary" type="button" id="exportbtn">Export
                                                        <span><i class="icofont icofont-airplane"></i></span>
                                                    </button>
                                                    <div class="dropdown-content pull-right" id="sample_3_tools">
                                                        <li><a href="javascript:;" data-action="0" class="tool-action"><i class="icon-printer"></i> Print</a></li>
                                                        <li><a href="javascript:;" data-action="1" class="tool-action"><i class="icon-check"></i> Copy</a></li>
                                                        <!-- <li><a href="javascript:;" data-action="2" class="tool-action"><i class="icon-doc"></i> PDF</a></li> -->
                                                        <li><a href="javascript:;" data-action="3" class="tool-action"><i class="icon-paper-clip"></i> Excel</a></li>
                                                        <li><a href="javascript:;" data-action="4" class="tool-action"><i class="icon-cloud-upload"></i> CSV</a></li>
                                                        <!-- <li><a href="javascript:;" data-action="5" class="tool-action"><i class="icon-refresh"></i> Reload</a></li> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-container">
                                        <table class="table table-striped table-bordered table-hover" id="sample_2">
                                            <thead>
                                                <tr>
                                                    <th>Trade No</th>
                                                    <th>Symbol:</th>
                                                    <th>Long/Short</th>
                                                    <th class="text-center">Start Date</th>
                                                    <th class="d-none">End Date</th>
                                                    <th class="text-center">Trade Duration</th>
                                                    <th class="d-none">Position Size</th>
                                                    <th class="d-none">Pips</th>
                                                    <th class="d-none">Fees</th>
                                                    <th>Profit/Loss($)</th>
                                                    <th>Profit/Loss(%)</th>
                                                    <th class="d-none">Stop Loss Val</th>
                                                    <th class="d-none">Open Price</th>
                                                    <th class="d-none">Close Price</th>
                                                    <th>Win/Loss/BE</th>
                                                    <th>Edit/Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($trades as $key => $trade)
                                                <tr>
                                                    <td class="text-center">{{ $key+1 }}</td>
                                                    <td class="text-center">{{ $trade->symbol->symbol }}</td>
                                                    <td class="text-center">{{ $trade->long_short }}</td>
                                                    <td class="text-center">{{ $trade->start_datetime }}</td>
                                                    <td class="d-none">{{ $trade->end_datetime }}</td>
                                                    <td class="text-center">{{ Carbon\CarbonInterval::seconds($trade->duration)->cascade()->forHumans() }}</td>
                                                    <td class="d-none">{{ $trade->positionsize }}</td>
                                                    <td class="d-none">{{ $trade->pips }}</td>
                                                    <td class="d-none">{{ $trade->fees }}</td>
                                                    @if( $trade->profit_gl > 0 )
                                                    <td class="font-success text-center">{{ $trade->profit_gl }}</td>
                                                    @else
                                                    <td class="font-danger text-center">{{ $trade->profit_gl }}</td>
                                                    @endif
                                                    @if( $trade->profit_gl > 0 )
                                                    <td class="font-success text-center">{{ number_format($trade->percentage_gl, 2, '.', '') }}</td>
                                                    @else
                                                    <td class="font-danger text-center">{{ number_format($trade->percentage_gl, 2, '.', '') }}</td>
                                                    @endif
                                                    <td class="d-none">{{ $trade->stoplossval }}</td>
                                                    <td class="d-none">{{ $trade->open_price }}</td>
                                                    <td class="d-none">{{ $trade->close_price }}</td>
                                                    @if( $trade->profit_gl > 0 )
                                                    <td class="font-success text-center">Win</td>
                                                    @elseif( $trade->profit_gl < 0 )
                                                    <td class="font-danger text-center">Loss</td>
                                                    @else
                                                    <td class="font-warning text-center">Break Even</td>
                                                    @endif
                                                    <td class="d-flex">
                                                        <a href="{{ url('/edittrade') }}/{{ auth::user()->name }}?tradeid={{ $trade->id }}" class="pull-left">
                                                            <i data-feather="edit-3"></i>
                                                        </a>
                                                        <a data-href="{{ url('/deltrade') }}/{{ auth::user()->name }}" dataid="{{ $trade->id }}" class="trade-del pull-right">
                                                            <i data-feather="trash"></i>
                                                        </a>
                                                        <a href="{{ url('/viewtrade') }}/{{ auth::user()->name }}?tradeid={{ $trade->id }}" class="pull-left">
                                                            <p data-bs-toggle="tooltip" data-bs-placement="right" title="View"><i data-feather="eye"></i></p>
                                                        </a>
                                                        <a href="{{ url('/downloadpdf') }}/{{ auth::user()->name }}?tradeid={{ $trade->id }}" target="_blank" class="pull-left">
                                                            <i data-feather="download-cloud"></i>
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

    <div class="modal fade" id="importformmoal" tabindex="-1" role="dialog" aria-labelledby="importformmoal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form action="{{ route('trade.import') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Import Trades From Excel or CSV</h5>
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="custom-file text-left">
                            <input type="file" name="file" class="custom-file-input" id="customFile" required>
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</a>
                        <button type="submit" class="btn btn-primary" type="button">Ok</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
@section('script')
    <script src="../assets/js/datatable/datatables/datatable.js" type="text/javascript"></script>
    <script src="../assets/js/datatable/datatables/datatables.min.js" type="text/javascript"></script>
    <script src="../assets/js/datatable/datatables/datatables.bootstrap.js" type="text/javascript"></script>
    <script src="../assets/js/datepicker/daterange-picker/moment.min.js"></script>
    <script src="../assets/js/datepicker/daterange-picker/daterangepicker.js"></script>
    <script src="../assets/js/datepicker/daterange-picker/daterange-picker.custom.js"></script>
    <!-- <script src="../assets/js/datatable/datatables/scripts/app.min.js" type="text/javascript"></script> -->
    <script src="../assets/js/trade/table-datatables-buttons.min.js" type="text/javascript"></script>
    <script src="../assets/js/trade/mytrade.js" type="text/javascript"></script>
@endsection