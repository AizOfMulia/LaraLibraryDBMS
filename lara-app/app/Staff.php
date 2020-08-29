<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Authenticatable
{
    use Notifiable;

    /*
     *  Authentication guard
     */
    protected $guard        =   "staff";

    /*
     *  The attributes that can be mass assigned.
     *
     *  @var array
     */
    protected $fillable     =   [
        "email", "password",
    ];

    /*
     *  The attributes that should be hidden
     *
     *  @var array
     */
    protected $hidden       =   [
        "password", "remember_token",
    ];
}
