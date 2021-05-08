<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trade extends Model
{
    use HasFactory;

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
        return $this->belongsTo(symbol::class);
    }
}
