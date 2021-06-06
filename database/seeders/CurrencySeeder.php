<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Currency;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currencies = [
            'aud',
            'gbp',            
            'cad',
            'cny',
            'czk',
            'dkk',
            'eur',
            'hkd',
            'jpy',
            'nzd',
            'nok',
            'chf',
            'sgd',
            'zar',
            'sek',
            'usd',
        ];
        $descriptions = [
            'Australian Dollar (AUD)',
            'British Pound (GBP)',
            'Canadian Dollar (CAD)',
            'Chinese Yuan (CNY)',
            'Czech Koruna (CZK)',
            'Danish Krone (DKK)',
            'Euro (EUR)',
            'Hong Kong Dollar (HKD)',
            'Japanese Yen (JPY)',
            'New Zealand Dollar (NZD)',
            'Norwegian Krone (CHF)',
            'Singapore Dollar (SGD)',
            'South African Rand (ZAR)',
            'Swedish Krona (SEK)',
            'United States Dollar (USD)',
        ];
        $signs = [
            '$',
            '£',            
            '$',
            '¥',
            'Kč',
            'kr',
            '€',
            '$',
            '¥',
            '$',
            'kr',
            'CHF',
            '$',
            'R',
            'kr',
            '$',
        ];
        for( $i=0; $i<count($currencies); $i++ ) {
            Currency::create([
                'iso' => $currencies[$i],
                'desc' => $descriptions[$i],
                'sign' => $signs[$i],
            ]);
        }
    }
}
