<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subuser extends Model
{
    use HasFactory;


        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'acc_num',
        'username',
        'desc'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function trade()
    {
        return $this->hasMany(Trade::class);
    }
}
