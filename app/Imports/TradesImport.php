<?php

namespace App\Imports;

use App\Models\Trade;
use App\Models\Symbol;
use App\Models\Afimage;
use App\Models\Beimage;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
// use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Auth;
use Carbon\Carbon;


class TradesImport implements ToCollection, WithStartRow
{

    public function transformDate($value, $format = 'm/d/Y H:i')
    {
        try {
            return \Carbon\Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($value));
        } catch (\ErrorException $e) {
            return \Carbon\Carbon::createFromFormat($format, $value);
        }
    }

    /**
     * @return int
     */
    public function startRow(): int
    {
        return 2;
    }

    public function collection(Collection $rows)
    {   
        foreach($rows as $row)
        {   
            $symbol = Symbol::where('symbol',$row[1])->first();
            $start_datetime = $this->transformDate($row[3])->format("Y-m-d H:i:s");
            $duration = '';
            $end_datetime = '';
            if($row[4]){
                $end_datetime = $this->transformDate($row[4])->format("Y-m-d H:i:s");
                $duration = abs(strtotime($start_datetime) - strtotime($end_datetime));
            }
            if($symbol){
                $newimported = Trade::create([
                    'trade_num' => $row[0],
                    'subuser_id' => Auth::user()->current_subuser,
                    'symbol_id' => $symbol->id,
                    'start_datetime' => $start_datetime,
                    'end_datetime' => $end_datetime,
                    'duration' => $duration,
                    'long_short' => $row[2],
                    'pips' => $row[5],
                    'fees' => $row[6],
                    'profit_gl' => $row[7],
                    'percentage_gl' => $row[8],
                    'open_price' => $row[9],
                    'close_price' => $row[10],
                    'description' => $row[13]
                ]);
                
                Beimage::create([
                    'trade_id' => $newimported->id,
                    'before_link' => $row[11]
                ]);

                Afimage::create([
                    'trade_id' => $newimported->id,
                    'after_link' => $row[12]
                ]);
            }
            else{
                return redirect()->back()->with('message', 'Fields are not matched');
            }
        }
    }
}
