@extends('layouts.app')
@section('title')
<title>View Trade | The Trading Buddy</title>
@endsection
@section('style')
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/select2.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/date-time-picker.html">
    <style>
        .preview img{
            max-width: 100%;
        }
    </style>
@endsection
@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>Trade Report</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item"><a href="{{ url('/mytrades') }}">My Trades</a></li>
                        <li class="breadcrumb-item">No.{{ $trade->trade_num }} Trade</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card" id="topdf">
                    <div class="card-header">
                        <h5 class="pull-left">Trade No: {{ $trade->trade_num }}</h5>
                        {{-- <button class="btn btn-primary pull-right export2pdf">Export to PDF</button> --}}
                        <a href="{{ url('/downloadpdf') }}/{{ Auth::user()->name }}?tradeid={{ $trade->id }}" target="_blank" class="btn btn-primary pull-right">Export to PDF</a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col">Data</th>
                                            <th scope="col"></th>
                                            <th scope="col">Data</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">Start Date and Time</th>
                                            <td>{{ date_format(date_create($trade->start_datetime),'m/d/Y H:i A') }}</td>
                                            <th scope="row">End Date and Time</th>
                                            <td>{{ $trade->end_datetime == '' ? '' : date_format(date_create($trade->end_datetime),'m/d/Y H:i A') }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Symbol</th>
                                            <td>{{ $trade->symbol->symbol }}</td>
                                            <th scope="row">Long or Short</th>
                                            <td>{{ $trade->long_short }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Position Size</th>
                                            <td>{{ $trade->positionsize }}</td>
                                            <th scope="row">Pips Profit or Loss</th>
                                            <td>{{ $trade->pips }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Fees</th>
                                            <td>{{ $trade->fees }}</td>
                                            <th scope="row">Profit Gain/Loss</th>
                                            <td>{{ $trade->profit_gl }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Percentage Gain/Loss On Account</th>
                                            <td>{{ number_format($trade->percentage_gl, 2, '.', '') }}</td>
                                            <th scope="row">Stop Loss Value</th>
                                            <td>{{ $trade->stoplossval }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Open Price</th>
                                            <td>{{ $trade->open_price }}</td>
                                            <th scope="row">Close Price</th>
                                            <td>{{ $trade->close_price }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row mt-4 preview">
                            <h6>Description</h6>
                            <p class="p-l-20" style="white-space: pre-line">{{ $trade->description }}</p>
                        </div>
                        <div class="row mt-5 preview">
                            <h6>Before Images</h6>
                            @foreach($beimages as $key => $beimage)
                            @if($beimage->before_link || $beimage->before_file)
                                <a href="{{ ($beimage->before_link) ? $beimage->before_link:'/'.$beimage->before_file }}" target="_blank"><img class="b-r-15 mt-3" src="{{ ($beimage->before_link) ? $beimage->before_link:'/'.$beimage->before_file }}" alt="Unknown Image"></a>
                            @endif
                            @endforeach
                        </div>
                        <div class="row mt-5 preview">
                            <h6>After Images</h6>
                            @foreach($afimages as $key => $afimage)
                            @if($afimage->after_link || $afimage->after_file)
                                <a href="{{ ($afimage->after_link) ? $afimage->after_link:'/'.$afimage->after_file }}" target="_blank"><img class="b-r-15 mt-3" src="{{ ($afimage->after_link) ? $afimage->after_link:'/'.$afimage->after_file }}" alt="Unknown Image"></a>
                            @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <div class="col-sm-9 offset-sm-3">
                            {{-- <button class="btn btn-primary export2pdf">Export to PDF</button> --}}
                            <a href="{{ url('/downloadpdf') }}/{{ Auth::user()->name }}?tradeid={{ $trade->id }}" target="_blank" class="btn btn-primary">Export to PDF</a>
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

<script type="text/javascript">
        $(".export2pdf").on("click", function () {
            $('.export2pdf').hide();
            var divContents = $("#topdf").html();
            var printWindow = window.open('', '', 'height=600,width=900');
            printWindow.document.write('<html><head><title>The trading Buddy</title>');
            printWindow.document.write('</head><body >');
            printWindow.document.write(divContents);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
            $('.export2pdf').show();
        });
</script>

<!-- <script src="../assets/js/dashboard/default.js"></script> -->
<script src="../assets/js/select2/select2.full.min.js"></script>
<script src="../assets/js/select2/select2-custom.js"></script>

<script src="../assets/js/datepicker/date-time-picker/moment.min.js"></script>
<script src="../assets/js/datepicker/date-time-picker/tempusdominus-bootstrap-4.min.js"></script>
<script src="../assets/js/datepicker/date-time-picker/datetimepicker.custom.js"></script>

<script src="../assets/js/tooltip-init.js"></script>
<script src="../assets/js/trade/new-trade.js"></script>
@endsection
