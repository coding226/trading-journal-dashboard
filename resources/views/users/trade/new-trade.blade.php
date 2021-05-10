@extends('layouts.app')
@section('title')
<title>New Trade | Trading Buddy</title>
@endsection
@section('style')
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
                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
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
                    <form class="form theme-form" method="POST" action="{{ route('newtrade.create') }}">
                    @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Start Data and Time</label>
                                        <div class="col-sm-9">
                                            <input class="form-control digits" id="start_date" name="start_date" type="datetime-local" require>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">End Data and Time</label>
                                        <div class="col-sm-9">
                                            <input class="form-control digits" id="end_date" name="end_date" type="datetime-local" require>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label" for="validationTooltip04">Symbol</label>
                                        <div class="col-sm-9">
                                            <select class="form-select" required="" name="symbol_id">
                                                <option selected="" disabled="" value="">Choose...</option>
                                                @foreach($symbols as $symbol)
                                                <option value="{{ $symbol->id }}">{{ $symbol->symbol }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label" for="validationTooltip04">Long or Short</label>
                                        <div class="col-sm-9">
                                            <select class="form-select" required="" name="long_short">
                                                <option selected="" disabled="" value="">Choose...</option>
                                                <option>LONG</option>
                                                <option>SHORT</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Pips Profit or Loss</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" id="pips" name="pips" type="text" placeholder="Type here information">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Fees</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <span class="input-group-text">$</span>
                                                <input class="form-control" type="number" id="fees" name="fees" aria-describedby="validationTooltipUsernamePrepend" required="" data-bs-original-title="" title="" placeholder="Type here information">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Profit Gain/Loss</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <span class="input-group-text">$</span>
                                                <input class="form-control" type="number" id="profit_gl" name="profit_gl" aria-describedby="validationTooltipUsernamePrepend" required="" data-bs-original-title="" title="" placeholder="Type here information">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Percentage Gain/Loss On Account</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" id="percentage_gl" name="percentage_gl" placeholder="Type here information">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Open Price</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" id="open_price" name="open_price" placeholder="Type here information">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Close Price</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" id="close_price" name="close_price" placeholder="Type here information">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Before Image Upload</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" id="before_img" name="before_img" data-bs-original-title="" title="">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">After Image Upload</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" id="after_img" name="after_img" data-bs-original-title="" title="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-3 col-form-label">Description</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" rows="5" cols="5" id="description" name="description"
                                                placeholder="Default textarea"></textarea>
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
<script src="../assets/js/dashboard/default.js"></script>
<script src="../assets/js/tooltip-init.js"></script>
@endsection
