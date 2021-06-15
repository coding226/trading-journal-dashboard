<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Plan;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plan::create([
            'slug' => 'basicmonthly',
            'desc' => 'Basic Monthly',
            'acc_num' => '1',
            'price' => 799, //7.99
            'duration_in_days' => 30
        ]);

        Plan::create([
            'slug' => 'basicyearly',
            'desc' => 'Pro Monthly',
            'acc_num' => '1',
            'price' => 7600, //76.00
            'duration_in_days' => 365
        ]);

        Plan::create([
            'slug' => 'promonthly',
            'desc' => 'Premium Monthly',
            'acc_num' => '3',
            'price' => 1199, //11.99
            'duration_in_days' => 30
        ]);

        Plan::create([
            'slug' => 'proyearly',
            'desc' => 'Basic Yearly',
            'acc_num' => '3',
            'price' => 11500, //115.00
            'duration_in_days' => 365
        ]);

        Plan::create([
            'slug' => 'premiummonthly',
            'desc' => 'Pro Yearly',
            'acc_num' => 'UNLIMITED',
            'price' => 1999, //19.99
            'duration_in_days' => 30
        ]);

        Plan::create([
            'slug' => 'premiumyearly',
            'desc' => 'Premium Yearly',
            'acc_num' => 'UNLIMITED',
            'price' => 19100, //191.00
            'duration_in_days' => 365
        ]);
    }
}
