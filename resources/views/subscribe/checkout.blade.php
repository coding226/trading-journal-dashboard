@extends('layouts.app')
@section('title')
<title>Subscription Checkout | The Trading Buddy</title>
@endsection
@section('style')
<style type="text/css">
    .StripeElement {
      box-sizing: border-box;

      height: 40px;

      padding: 10px 12px;

      border: 1px solid transparent;
      border-radius: 4px;
      background-color: white;

      box-shadow: 0 1px 3px 0 #e6ebf1;
      -webkit-transition: box-shadow 150ms ease;
      transition: box-shadow 150ms ease;
    }

    .StripeElement--focus {
      box-shadow: 0 1px 3px 0 #cfd7df;
    }

    .StripeElement--invalid {
      border-color: #fa755a;
    }

    .StripeElement--webkit-autofill {
      background-color: #fefde5 !important;
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
                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
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
                        <h5>Become member</h5>
                    </div>
                    <div class="card-body row pricing-block justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="pricingtable">
                                <div class="pricingtable-header">
                                    <h3 class="title">{{ $plan->acc_num }} TRADING ACCOUNT</h3>
                                </div>
                                <div class="price-value"><span class="currency">£</span><span class="amount">{{ $plan->visual_price }}</span><span class="duration">/{{ $plan->duraction_in_days == 30 ? 'PM' : 'Per Year' }}</span></div>
                                <ul class="pricing-content">
                                    <li>Unlimited Trade Entries</li>
                                    <li>Personalised Account</li>
                                    <li>Account Analytics</li>
                                    <li>Refined Analytics</li>
                                    <li>Symbol Analytics</li>
                                    <li>Import/Export Data</li>
                                    <li>Trading Buddy Support</li>
                                </ul>
                                <form action="{{ route('subscribe.store') }}" method="POST" id="paymentForm">
                                    @csrf
                                    <div class="row mt-3">
                                        <div class="col">
                                            <label>
                                                Select the desired payment platform
                                            </label>
                                            <div class="form-group" id="toggler">
                                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                    @foreach ($paymentPlatforms as $paymentPlatform)
                                                        <label class="btn btn-outline-light-2x collapsed rounded m-2 p-1" data-bs-target="#{{ $paymentPlatform->name }}Collapse" data-bs-toggle="collapse" aria-expanded="false" aria-controls="{{ $paymentPlatform->name }}Collapse">
                                                            <input type="radio" name="payment_platform" value="{{ $paymentPlatform->id }}" required>
                                                            <img class="img-thumbnail" src="{{ url('assets/'.$paymentPlatform->image) }}">
                                                        </label>
                                                    @endforeach
                                                </div>
                                                @foreach ($paymentPlatforms as $paymentPlatform)
                                                    <div id="{{ $paymentPlatform->name }}Collapse" class="collapse" data-bs-parent="#toggler">
                                                        @includeIf ('components.' . strtolower($paymentPlatform->name) . '-collapse')
                                                    </div>
                                                @endforeach
                                                <input type="hidden" name="plan" value="{{ $plan->slug }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center mt-3">
                                        <button type="submit" id="payButton" class="btn btn-primary btn-lg">Subscribe</button>
                                    </div>
                                </form>
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
<script src="https://js.stripe.com/v3/"></script>
<script>
    const stripe = Stripe('{{ config('services.stripe.key') }}');

    const elements = stripe.elements({ locale: 'en' });
    const cardElement = elements.create('card');

    cardElement.mount('#cardElement');
</script>

<script>
    const form = document.getElementById('paymentForm');
    const payButton = document.getElementById('payButton');

    payButton.addEventListener('click', async(e) => {
        if (form.elements.payment_platform.value === "{{ $paymentPlatform->id }}") {
            e.preventDefault();

            const { paymentMethod, error } = await stripe.createPaymentMethod(
                'card', cardElement, {
                    billing_details: {
                        "name": "{{ auth()->user()->name }}",
                        "email": "{{ auth()->user()->email }}"
                    }
                }
            );

            if (error) {
                const displayError = document.getElementById('cardErrors');

                displayError.textContent = error.message;
            } else {
                const tokenInput = document.getElementById('paymentMethod');

                tokenInput.value = paymentMethod.id;
                form.submit();
            }
        }
    });
</script>
@endsection