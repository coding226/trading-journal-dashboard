<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'firstname',
        'lastname',
        'email',
        'location',
        'number',
        'password',
        'payment',
        'subscription',
        'avatar',
        'status',
        'currency',
        'current_subuser',
        'darkmode',
        'ipaddress',
        'timezone',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function subuser()
    {
        return $this->hasMany(Subuser::class);
    }

    public function note()
    {
        return $this->hasMany(Note::class);
    }

    public function current_user()
    {
        return $this->belongsTo(Subuser::class, 'current_subuser');
    }

    public function subscription()
    {
        return $this->hasOne(Subscription::class);
    }

    public function hasActiveSubscription()
    {
        // return true;
        return optional($this->subscription)->isActive() ?? false;
    }
}
