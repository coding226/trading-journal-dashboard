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
            'acc_num' => '1',
            'price' => 799, //7.99
            'duration_in_days' => 30
        ]);

        Plan::create([
            'slug' => 'basicyearly',
            'acc_num' => '1',
            'price' => 7600, //76.00
            'duration_in_days' => 365
        ]);

        Plan::create([
            'slug' => 'promonthly',
            'acc_num' => '3',
            'price' => 1199, //11.99
            'duration_in_days' => 30
        ]);

        Plan::create([
            'slug' => 'proyearly',
            'acc_num' => '3',
            'price' => 11500, //115.00
            'duration_in_days' => 365
        ]);

        Plan::create([
            'slug' => 'premiummonthly',
            'acc_num' => 'UNLIMITED',
            'price' => 1999, //19.99
            'duration_in_days' => 30
        ]);

        Plan::create([
            'slug' => 'premiumyearly',
            'acc_num' => 'UNLIMITED',
            'price' => 19100, //191.00
            'duration_in_days' => 365
        ]);
    }
}
