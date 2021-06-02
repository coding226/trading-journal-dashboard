<?php

namespace App\Imports;

use App\Models\Trade;
use Maatwebsite\Excel\Concerns\ToModel;

class TradesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $start_datetime = Carbon::createFromFormat('m/d/Y H:i A', $row[1])->format("Y-m-d H:i:s");
        $duration = '';
        if($row[2]){
            $end_datetime = Carbon::createFromFormat('m/d/Y H:i A',  $row[2])->format("Y-m-d H:i:s");
            $duration = abs(strtotime($request->start_date) - strtotime($request->end_date));
        }
        return new Trade([
            'trade_num' => count(Trade::where('subuser_id', Auth::user()->current_subuser)->get())+1,
            'subuser_id' => Auth::user()->current_subuser,
            'symbol_id' => $row[0],
            'start_datetime' => $start_datetime,
            'end_datetime' => $end_datetime,
            'duration' => $duration,
            'long_short' => $row[4],
            'pips' => $row[5],
            'fees' => $row[6],
            'profit_gl' => $row[7],
            'percentage_gl' => $row[8],
            'open_price' => $row[9],
            'close_price' => $row[10],
            'description' => $row[11]
        ]);
    }
}
