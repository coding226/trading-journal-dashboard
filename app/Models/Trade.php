<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trade extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'trade_num',
        'subuser_id',
        'symbol_id',
        'start_datetime',
        'end_datetime',
        'duration',
        'long_short',
        'positionsize',
        'pips',
        'fees',
        'profit_gl',
        'percentage_gl',
        'stoplossval',
        'open_price',
        'close_price',
        'description'
    ];

    public function subuser()
    {
        return $this->belongsTo(Subuser::class);
    }

    public function image()
    {
        return $this->belongsTo(Image::class);
    }

    public function symbol()
    {
        return $this->belongsTo(Symbol::class);
    }

    public function beimage()
    {
        return $this->hasMany(Beimage::class);
    }

    public function afimage()
    {
        return $this->hasMany(Afimage::class);
    }
}
