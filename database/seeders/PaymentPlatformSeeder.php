<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PaymentPlatform;

class PaymentPlatformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PaymentPlatform::create([
            'name' => 'PayPal',
            'image' => 'images/payment-platforms/paypal.jpg',
            'subscriptions_enabled' => true
        ]);

        PaymentPlatform::create([
            'name' => 'Stripe',
            'image' => 'images/payment-platforms/stripe.jpg',
            'subscriptions_enabled' => true
        ]);
    }
}
