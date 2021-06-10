@extends('layouts.app')
@section('title')
<title>New Trade | The Trading Buddy</title>
@endsection
@section('style')
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/select2.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/date-time-picker.html">
    <style>
        .before_preview img, .after_preview img{
            max-width: 320px;
            max-height: 240px;
            border: 1px solid;
            padding: 5px;
            border-radius: 10px;
            margin: 5px;
        }
    </style>
@endsection
@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>New Trade</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">New Trade</li>
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
                        <h5>Trade Information</h5>
                    </div>
                    <form class="form theme-form" method="POST" action="{{ route('newtrade.create') }}" enctype="multipart/form-data">
                    @csrf
                        <div class="card-body">
                            @if(session()->has('message'))
                                <div class="alert alert-success" role="alert">
                                        {{ session()->get('message') }} Go to <a href="{{ url('/mytrades') }}">My Trades</a> to view added trades
                                </div>
                            @endif
                            <div class="row">
                                <div class="col datetime-picker">
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Start Date and Time <span class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <div class="input-group date" id="dt-minimum" data-target-input="nearest">
                                                <input class="form-control datetimepicker-input digits" type="text" data-target="#dt-minimum" data-bs-original-title="" title="" id="start_date" name="start_date" required>
                                                <div class="input-group-text" data-target="#dt-minimum" data-toggle="datetimepicker"><i class="fa fa-calendar"> </i></div>
                                            </div>
                                            <!-- <div class="input-group">
                                                <input class="datepicker-here form-control digits" type="text" data-language="en" id="start_date" name="start_date">
                                            </div> -->
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">End Date and Time</label>
                                        <div class="col-sm-9">
                                            <div class="input-group date" id="dt-minimum1" data-target-input="nearest">
                                                <input class="form-control datetimepicker-input digits" type="text" data-target="#dt-minimum1" data-bs-original-title="" title="" id="end_date" name="end_date">
                                                <div class="input-group-text" data-target="#dt-minimum1" data-toggle="datetimepicker"><i class="fa fa-calendar"> </i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label" for="validationTooltip04">Symbol <span class="text-danger">*</span></label>
                                        <div class="col-sm-9 select2-drpdwn">
                                            <select class="js-example-basic-single form-select" name="symbol_id" required>
                                            @foreach($symbols as $key => $symbol)
                                                @if( $key == 0 || $symbols[$key]->category != $symbols[$key-1]->category)
                                                    <optgroup label="{{ $symbol->category }}">
                                                @endif                                                
                                                    <option value="{{ $symbol->id }}">{{ $symbol->symbol }}</option>
                                                @if( $key == 107 || $symbols[$key]->category != $symbols[$key+1]->category)
                                                    </optgroup>
                                                @endif
                                            @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label" for="validationTooltip04">Long or Short <span class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <div class="m-t-15 m-checkbox-inline custom-radio-ml">
                                                <div class="form-check form-check-inline radio radio-primary">
                                                    <input class="form-check-input" id="radioinline1" type="radio" name="long_short" checked value="long">
                                                    <label class="form-check-label mb-0" for="radioinline1">Long</label>
                                                </div>
                                                <div class="form-check form-check-inline radio radio-primary">
                                                    <input class="form-check-input" id="radioinline2" type="radio" name="long_short" value="short">
                                                    <label class="form-check-label mb-0" for="radioinline2">Short</label>
                                                </div>
                                            </div>
                                            <!-- <select class="form-select" name="long_short">
                                                <option selected="" disabled="" value="">Choose...</option>
                                                <option>LONG</option>
                                                <option>SHORT</option>
                                            </select> -->
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Position Size</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="number" step="any" id="positionsize" name="positionsize" placeholder="Type here information" autocomplete="off" >
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Pips Profit or Loss</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="number" step="any" id="pips" name="pips" placeholder="Type here information" autocomplete="off" >
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Fees</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <span class="input-group-text">{{ Auth::user()->current_user->current_currency->sign }}</span>
                                                <input class="form-control" type="number" step="any" id="fees" name="fees" aria-describedby="validationTooltipUsernamePrepend" data-bs-original-title="" title="" placeholder="Type here information">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Profit Gain/Loss</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <span class="input-group-text">{{ Auth::user()->current_user->current_currency->sign }}</span>
                                                <input class="form-control" type="number" step="any" id="profit_gl" name="profit_gl" aria-describedby="validationTooltipUsernamePrepend" data-bs-original-title="" title="" placeholder="Type here information">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Percentage Gain/Loss On Account</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="number" step="any" id="percentage_gl" name="percentage_gl" autocomplete="off" placeholder="Type here information">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Stop Loss Value</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="number" step="any" id="stoplossval" name="stoplossval" autocomplete="off" placeholder="Type here information">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Open Price <span class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="number" step="any" id="open_price" name="open_price" autocomplete="off" placeholder="Type here information" required>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Close Price</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="number" step="any" id="close_price" name="close_price" autocomplete="off" placeholder="Type here information">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Before Image Upload</label>
                                        <div class="col-sm-9 before_input">
                                            <input class="form-control before_img_link" type="text" id="before_img_link_1" name="before_img_link_1">
                                            <input class="form-control mt-3 before_img_file" type="file" id="before_img_file_1" name="before_img_file_1">
                                            <a class="btn btn-success pull-right mt-3 m-l-5" id="add_before"><i class="fa fa-plus"></i></a>
                                            <a class="btn btn-primary pull-right mt-3" id="remove_before"><i class="fa fa-minus"></i></a>
                                            <input type="hidden" name="before_img_count" id="before_img_count" value="1">
                                        </div>
                                    </div>
                                    <div class="mb-3 row justify-content-center before_preview"></div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">After Image Upload</label>
                                        <div class="col-sm-9 after_input">
                                            <input class="form-control after_img_link" type="text" id="after_img_link_1" name="after_img_link_1">
                                            <input class="form-control mt-3 after_img_file" type="file" id="after_img_file_1" name="after_img_file_1">
                                            <a class="btn btn-success pull-right mt-3 m-l-5" id="add_after"><i class="fa fa-plus"></i></a>
                                            <a class="btn btn-primary pull-right mt-3" id="remove_after"><i class="fa fa-minus"></i></a>
                                            <input type="hidden" name="after_img_count" id="after_img_count" value="1">
                                        </div>
                                    </div>
                                    <div class="mb-3 row justify-content-center after_preview"></div>
                                    <div class="row">
                                        <label class="col-sm-3 col-form-label">Description</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" rows="5" cols="5" id="description" name="description" placeholder="Type here information"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <div class="col-sm-9 offset-sm-3">
                                <button class="btn btn-primary" type="submit">Submit</button>
                                <input class="btn btn-light" type="reset" value="Cancel">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>
@endsection
@section('script')

<!-- <script src="../assets/js/dashboard/default.js"></script> -->
<script src="../assets/js/select2/select2.full.min.js"></script>
<script src="../assets/js/select2/select2-custom.js"></script>
<script src="../assets/js/datepicker/date-time-picker/moment.min.js"></script>
<script src="../assets/js/datepicker/date-time-picker/tempusdominus-bootstrap-4.min.js"></script>
<script src="../assets/js/datepicker/date-time-picker/datetimepicker.custom.js"></script>
<script src="../assets/js/tooltip-init.js"></script>
<script src="../assets/js/trade/new-trade.js"></script>
<script>
    var balance = {!! json_encode($account_balance, JSON_HEX_TAG) !!};

    function set_percentage() {
        var profit = $('#profit_gl').val() - $('#fees').val();
        var percentage = (profit/balance*100).toFixed(2);
        $('#percentage_gl').val(percentage);
    };

    $('#profit_gl').on('change', function() {
        set_percentage();
    });
    
    $('#fees').on('change', function() {
        set_percentage();
    });
</script>
@endsection
