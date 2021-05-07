@extends('layouts.app')
@section('title')
    <title>Symbol Analytics | Trading Buddy</title>
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
                                  <tr>
                                    <td>1</td>
                                    <td>GBP/USD</td>
                                    <td>20.6%</td>
                                    <td>£3,876</td>
                                    <td>30</td>
                                    <td><a href="{{ url('/symbolmore') }}">See More</a></td>
                                  </tr>
                                  <tr>
                                    <td>2</td>
                                    <td>EUR/USD</td>
                                    <td>17.8%</td>
                                    <td>£2,378</td>
                                    <td>22</td>
                                    <td><a href="{{ url('/symbolmore') }}">See More</a></td>
                                  </tr>
                                  <tr>
                                    <td>3</td>
                                    <td>USD/CAD</td>
                                    <td>12.4%</td>
                                    <td>£1,890</td>
                                    <td>15</td>
                                    <td><a href="{{ url('/symbolmore') }}">See More</a></td>
                                  </tr>
                                  <tr>
                                    <td>4</td>
                                    <td>AUD/USD</td>
                                    <td>9.3%</td>
                                    <td>£4,545</td>
                                    <td>12</td>
                                    <td><a href="{{ url('/symbolmore') }}">See More</a></td>
                                  </tr>
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