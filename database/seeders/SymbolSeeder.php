<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Symbol;

class SymbolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Symbol::create([
            'symbol' => 'AUS200',
            'category' => 'INDICES',
        ]);
        Symbol::create([
            'symbol' => 'CHN50',
            'category' => 'INDICES',
        ]);
        Symbol::create([
            'symbol' => 'ESP35',
            'category' => 'INDICES',
        ]);
        Symbol::create([
            'symbol' => 'EUSTX50',
            'category' => 'INDICES',
        ]);
        Symbol::create([
            'symbol' => 'FRA40',
            'category' => 'INDICES',
        ]);
        Symbol::create([
            'symbol' => 'GER30',
            'category' => 'INDICES',
        ]);
        Symbol::create([
            'symbol' => 'HKG33',
            'category' => 'INDICES',
        ]);
        Symbol::create([
            'symbol' => 'JPN225',
            'category' => 'INDICES',
        ]);
        Symbol::create([
            'symbol' => 'NAS100',
            'category' => 'INDICES',
        ]);
        Symbol::create([
            'symbol' => 'SPX500',
            'category' => 'INDICES',
        ]);
        Symbol::create([
            'symbol' => 'UK100',
            'category' => 'INDICES',
        ]);
        Symbol::create([
            'symbol' => 'US2000',
            'category' => 'INDICES',
        ]);
        Symbol::create([
            'symbol' => 'US20',
            'category' => 'INDICES',
        ]);
        Symbol::create([
            'symbol' => 'VOLX',
            'category' => 'INDICES',
        ]);
        Symbol::create([
            'symbol' => 'Crude Oil',
            'category' => 'COMMODITIES',
        ]);
        Symbol::create([
            'symbol' => 'Brent',
            'category' => 'COMMODITIES',
        ]);
        Symbol::create([
            'symbol' => 'Natural gas',
            'category' => 'COMMODITIES',
        ]);
        Symbol::create([
            'symbol' => 'Gasoline',
            'category' => 'COMMODITIES',
        ]);
        Symbol::create([
            'symbol' => 'Heating oil',
            'category' => 'COMMODITIES',
        ]);
        Symbol::create([
            'symbol' => 'Gold Silver',
            'category' => 'COMMODITIES',
        ]);
        Symbol::create([
            'symbol' => 'Copper',
            'category' => 'COMMODITIES',
        ]);
        Symbol::create([
            'symbol' => 'Palladium',
            'category' => 'COMMODITIES',
        ]);
        Symbol::create([
            'symbol' => 'Soybeans',
            'category' => 'COMMODITIES',
        ]);
        Symbol::create([
            'symbol' => 'Wheat',
            'category' => 'COMMODITIES',
        ]);
        Symbol::create([
            'symbol' => 'Coffee',
            'category' => 'COMMODITIES',
        ]);
        Symbol::create([
            'symbol' => 'Cotton',
            'category' => 'COMMODITIES',
        ]);
        Symbol::create([
            'symbol' => 'Sugar',
            'category' => 'COMMODITIES',
        ]);
        Symbol::create([
            'symbol' => 'Oat',
            'category' => 'COMMODITIES',
        ]);
        Symbol::create([
            'symbol' => 'Corn',
            'category' => 'COMMODITIES',
        ]);
        Symbol::create([
            'symbol' => 'AUDCAD',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'AUDCHF',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'AUDCNY',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'AUDJPY',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'AUDNZD',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'AUDSGD',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'AUDUSD',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'AUDZAR',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'CADCHF',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'CADCNY',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'CADHKD',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'CADJPY',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'CHFCNY',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'CHFDKK',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'CHFJPY',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'CHFNOK',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'CHFSEK',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'CHFZAR',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'EURAUD',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'EURCAD',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'EURCHF',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'EURCNY',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'EURCZK',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'EURGBP',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'EURHKD',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'EURHUF',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'EURILS',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'EURJPY',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'EURMXN',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'EURNOK',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'EURNZD',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'EURPLN',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'EURRUB',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'EURSEK',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'EURSGD',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'EURTRY',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'EURUSD',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'EURZAR',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'GBPAUD',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'GBPCAD',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'GBPCHF',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'GBPCNY',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'GBPDKK',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'GBPHKD',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'GBPJPY',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'GBPMXN',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'GBPNOK',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'GBPNZD',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'GBPSEK',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'GBPUSD',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'GBPZAR',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'HKDJPY',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'MXNJPY',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'NOKJPY',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'NZDCAD',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'NZDCHF',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'NZDJPY',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'NZDUSD',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'SEKJPY',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'SGDCNY',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'SGDJPY',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'USDCAD',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'USDCHF',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'USDCNY',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'USDCZK',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'USDDKK',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'USDHKD',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'USDHUF',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'USDILS',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'USDJPY',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'USDKRW',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'USDMXN',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'USDNOK',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'USDPLN',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'USDRUB',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'USDSEK',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'USDSGD',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'USDTRY',
            'category' => 'FOREX PAIRS',
            ]);
        Symbol::create([
            'symbol' => 'USDZAR',
            'category' => 'FOREX PAIRS',
            ]);
    }
}
