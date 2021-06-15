@extends('layouts.app')
@section('title')
<title>Subscription Checkout | The Trading Buddy</title>
@endsection
@section('style')
<style>
.yearly{
    display: none;
}
</style>
@endsection
@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>Subscription</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Subscription</li>
                        <li class="breadcrumb-item active">CheckOut</li>
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
                        <h5>Upgrade Subscription</h5>
                    </div>
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-center mt-5">
                            <h4>Yearly</h4>
                            <label class="switch m-l-20 m-r-20">
                                <input type="checkbox" id="monthoryear" checked><span class="switch-state"></span>
                            </label>
                            <h4>Monthly</h4>
                        </div>
                    </div>
                    <div class="card-body row pricing-block justify-content-center">
                        <!-- <div class="col-lg-3 col-md-6">
                            <div class="pricingtable">
                                <div class="pricingtable-header">
                                    <h3 class="title">Free</h3>
                                </div>
                                <div class="price-value"><span class="amount">Free</span></div>
                                <ul class="pricing-content">
                                    <li>1 Trading Account</li>
                                    <li>10 Trade Entries</li>
                                    <li>Personalised Account</li>
                                    <li>Account Analytics</li>
                                    <li>Refined Analytics</li>
                                    <li>Symbol Analytics</li>
                                    <li>Import/Export Data</li>
                                    <li>Trading Buddy Support</li>
                                </ul>
                                <div class="pricingtable-signup"><a class="btn btn-primary btn-lg" href="{{ url('/subscribe-checkout/downgrade') }}">Downgrade</a></div>
                            </div>
                        </div> -->
                        <div class="col-lg-4 col-md-6 month">
                            <div class="pricingtable">
                                <div class="pricingtable-header">
                                    <h3 class="title">Basic</h3>
                                </div>
                                <div class="price-value"><span class="currency">£</span><span class="amount">7.99</span><span class="duration">/PM</span></div>
                                <ul class="pricing-content">
                                    <li>1 Trading Account</li>
                                    <li>Unlimited Trade Entries</li>
                                    <li>Personalised Account</li>
                                    <li>Account Analytics</li>
                                    <li>Refined Analytics</li>
                                    <li>Symbol Analytics</li>
                                    <li>Import/Export Data</li>
                                    <li>Trading Buddy Support</li>
                                </ul>
                                <div class="pricingtable-signup"><a class="btn btn-primary btn-lg" href="{{ url('/subscribe-checkout/basicmonthly') }}">Upgrade</a></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 month">
                            <div class="pricingtable">
                                <div class="pricingtable-header">
                                    <h3 class="title">Professional</h3>
                                </div>
                                <div class="price-value"><span class="currency">£</span><span class="amount">11.99</span><span class="duration">/PM</span></div>
                                <ul class="pricing-content">
                                    <li>3 Trading Accounts</li>
                                    <li>Unlimited Trade Entries</li>
                                    <li>Personalised Account</li>
                                    <li>Account Analytics</li>
                                    <li>Refined Analytics</li>
                                    <li>Symbol Analytics</li>
                                    <li>Import/Export Data</li>
                                    <li>Trading Buddy Support</li>
                                </ul>
                                <div class="pricingtable-signup"><a class="btn btn-primary btn-lg" href="{{ url('/subscribe-checkout/promonthly') }}">Upgrade</a></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 month">
                            <div class="pricingtable">
                                <div class="pricingtable-header">
                                    <h3 class="title">Premium</h3>
                                </div>
                                <div class="price-value"><span class="currency">£</span><span class="amount">19.99</span><span class="duration">/PM</span></div>
                                <ul class="pricing-content">
                                    <li>Unlimited Trading Accounts</li>
                                    <li>Unlimited Trade Entries</li>
                                    <li>Personalised Account</li>
                                    <li>Account Analytics</li>
                                    <li>Refined Analytics</li>
                                    <li>Symbol Analytics</li>
                                    <li>Import/Export Data</li>
                                    <li>Trading Buddy Support</li>
                                </ul>
                                <div class="pricingtable-signup"><a class="btn btn-primary btn-lg" href="{{ url('/subscribe-checkout/premiummonthly') }}">Upgrade</a></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 yearly">
                            <div class="pricingtable">
                                <div class="pricingtable-header">
                                    <h3 class="title">Basic</h3>
                                </div>
                                <div class="price-value"><span class="currency">£</span><span class="amount">76</span><span class="duration">/PM</span></div>
                                <ul class="pricing-content">
                                    <li>1 Trading Account</li>
                                    <li>Unlimited Trade Entries</li>
                                    <li>Personalised Account</li>
                                    <li>Account Analytics</li>
                                    <li>Refined Analytics</li>
                                    <li>Symbol Analytics</li>
                                    <li>Import/Export Data</li>
                                    <li>Trading Buddy Support</li>
                                </ul>
                                <div class="pricingtable-signup"><a class="btn btn-primary btn-lg" href="{{ url('/subscribe-checkout/basicyearly') }}">Upgrade</a></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 yearly">
                            <div class="pricingtable">
                                <div class="pricingtable-header">
                                    <h3 class="title">Professional</h3>
                                </div>
                                <div class="price-value"><span class="currency">£</span><span class="amount">115</span><span class="duration">/PM</span></div>
                                <ul class="pricing-content">
                                    <li>3 Trading Accounts</li>
                                    <li>Unlimited Trade Entries</li>
                                    <li>Personalised Account</li>
                                    <li>Account Analytics</li>
                                    <li>Refined Analytics</li>
                                    <li>Symbol Analytics</li>
                                    <li>Import/Export Data</li>
                                    <li>Trading Buddy Support</li>
                                </ul>
                                <div class="pricingtable-signup"><a class="btn btn-primary btn-lg" href="{{ url('/subscribe-checkout/proyearly') }}">Upgrade</a></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 yearly">
                            <div class="pricingtable">
                                <div class="pricingtable-header">
                                    <h3 class="title">Premium</h3>
                                </div>
                                <div class="price-value"><span class="currency">£</span><span class="amount">191</span><span class="duration">/PM</span></div>
                                <ul class="pricing-content">
                                    <li>Unlimited Trading Accounts</li>
                                    <li>Unlimited Trade Entries</li>
                                    <li>Personalised Account</li>
                                    <li>Account Analytics</li>
                                    <li>Refined Analytics</li>
                                    <li>Symbol Analytics</li>
                                    <li>Import/Export Data</li>
                                    <li>Trading Buddy Support</li>
                                </ul>
                                <div class="pricingtable-signup"><a class="btn btn-primary btn-lg" href="{{ url('/subscribe-checkout/premiumyearly') }}">Upgrade</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $('#monthoryear').on('change', function() {
        $('.month').toggle();
        $('.yearly').toggle();
    });
</script>
@endsection