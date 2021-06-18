<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'datetime',
        'title',
        'description',
        'image',
        'index',
        'indexcolor',
        'isnoti',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
