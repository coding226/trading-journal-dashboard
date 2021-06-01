@extends('layouts.app')
@section('title')
    <title>Symbol Analytics | The Trading Buddy</title>
@endsection
@section('style')
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/datatables.css">
@endsection
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>Symbol Analytics</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">                                       
                                <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item">Symbol Analytics</li>
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
                        <div class="card-header">
                            <h5 class="mb-3">Symbols</h5>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="display" id="advance-12">
                                <thead>
                                    <tr>
                                        <th>Rank #</th>
                                        <th>Symbol:</th>
                                        <th>Total % Gain:</th>
                                        <th>Total £ Gain:</th>
                                        <th>Total Amount Of<br/> Wins</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($symbols as $key => $symbol)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $symbol->symbol->symbol }}</td>
                                        <td>{{ $symbol->percentage_gl_sum }}%</td>
                                        <td>£{{ $symbol->profit_gl_sum  }}</td>
                                        <td>{{ $symbol->symbol_count }}</td>
                                        <td><a href="{{ url('/symbolmore') }}/{{$symbol->symbol_id}}">See More</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
@endsection
@section('script')
    <script src="../assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/js/datatable/datatables/datatable.custom.js"></script>
@endsection