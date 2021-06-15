<?php

namespace App\Http\Controllers;

use App\Models\PaymentPlatform;
use App\Models\Plan;
use App\Resolvers\PaymentPlatformResolver;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Auth;

class SubscriptionController extends Controller
{
    protected $paymentPlatformResolver;

    public function __construct(PaymentPlatformResolver $paymentPlatformResolver)
    {
        $this->middleware(['auth', 'unsubcribed']);
        $this->paymentPlatformResolver = $paymentPlatformResolver;
    }

    public function show(Request $request)
    {
        $paymentPlatforms = PaymentPlatform::where('subscriptions_enabled', true)->get();
        return view('subscribe.checkout')->with([
            'plan' => Plan::where('slug', $request->plan)->first(),
            'paymentPlatforms' => $paymentPlatforms,
        ]);
    }

    public function upgradesub(Request $request)
    {
        return view('subscribe.upgrade');
    }

    public function store(Request $request)
    {
        $rules = [
            'plan' => ['required', 'exists:plans,slug'],
            'payment_platform' => ['required', 'exists:payment_platforms,id'],
        ];

        $request->validate($rules);
        $paymentPlatform = $this->paymentPlatformResolver->resolveService($request->payment_platform);
        session()->put('subscriptionPlatformId', $request->payment_platform);
        return $paymentPlatform->handleSubscription($request);
    }

    public function approval(Request $request)
    {
        $rules = [
            'plan' => ['required', 'exists:plans,slug'],
        ];

        $request->validate($rules);
        if (session()->has('subscriptionPlatformId')) {
            $paymentPlatform = $this->paymentPlatformResolver->resolveService(session()->get('subscriptionPlatformId'));
            if ($paymentPlatform->validateSubscription($request)) {
                $plan = Plan::where('slug', $request->plan)->firstOrFail();
                $user = $request->user();
                $subscription = Subscription::create([
                    'active_until' => now()->addDays($plan->duration_in_days),
                    'user_id' => $user->id,
                    'plan_id' => $plan->id,
                ]);
                return redirect()->back()->withSuccess(['payment' => "Thanks, {$user->name}. You have now a {$plan->slug} subscription. Start using it now."]);
            }
        }
        return redirect()->route('subscribe.show')->withErrors('We cannot check your subscription. Try again, please.');
    }

    public function cancelled()
    {
        return redirect()->route('subscribe.show')->withErrors('You cancelled. Come back whenever you\'re ready');
    }
}