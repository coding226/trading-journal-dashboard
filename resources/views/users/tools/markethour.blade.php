@extends('layouts.app')
@section('title')
<title>Market Hours | Trading Buddy</title>
@endsection
@section('style')
@endsection
@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>Market Hours</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">
                                <i data-feather="home"></i></a>
                        </li>
                        <li class="breadcrumb-item">Market Hours</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                    <script type="text/javascript">DukascopyApplet = {"type":"fxmarkethours","params":{"showHeader":false,"displayMainMenu":true,"displayTimezoneChange":true,"displayInstrumentChange":true,"displaySpreadIndicator":true,"displayVolumeIndicator":true,"displayVolatilityIndicator":true,"displayFollowButton":true,"allowTimezoneChange":true,"allowInstrumentChange":true,"defaultTimezone":0,"showIndicator":"0","defaultFollowMode":false,"worldMapColor":"red","hoursBackground":"#444f5f","hoursActiveBackground":"#7d92b0","hoursTextColor":"#ffffff","currentHourBGColor":"#f9fdff","dstHourColor":"#0cf6ff","indicatorBarColor":"#5090c6","graphPointsColor":"#ffffff","spreadTopGraphColor":"#208c1c","spreadBottomGraphColor":"#dc0e0e","volatilityGraphColor":"#146fba","availableInstruments":"AUD/USD,EUR/USD,GBP/USD,NZD/USD,USD/CAD,USD/CHF,USD/JPY,USD/NOK,USD/SEK,USD/SGD,XAG/USD,XAU/USD,AUD/CAD,AUD/CHF,AUD/JPY,AUD/NZD,CAD/CHF,CAD/JPY,CHF/JPY,EUR/AUD,EUR/CAD,EUR/CHF,EUR/DKK,EUR/GBP,EUR/HKD,EUR/JPY,EUR/NOK,EUR/NZD,EUR/SEK,GBP/AUD,GBP/CAD,GBP/CHF,GBP/JPY,GBP/NZD,NZD/CAD,NZD/CHF,NZD/JPY,AUD/SGD,CAD/HKD,CHF/SGD,EUR/PLN,EUR/SGD,EUR/TRY,HKD/JPY,SGD/JPY,USD/DKK,USD/HKD,USD/MXN,USD/PLN,USD/RUB,USD/TRY,USD/ZAR","instrument":"EUR/USD","width":"100%","height":"530","adv":"popup"}};</script><script type="text/javascript" src="https://freeserv-static.dukascopy.com/2.0/core.js"></script>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>
@endsection
@section('script')
@endsection
