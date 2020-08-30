<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Staff extends Authenticatable
{
    use Notifiable;

    protected $table        =   'staffs';

    /*
     *  Authentication guard
     */
    protected $guard        =   'staff';

    /*
     *  The attributes that can be mass assigned.
     *
     *  @var array
     */
    protected $fillable     =   [
        'email', 'password',
    ];

    /*
     *  The attributes that should be hidden
     *
     *  @var array
     */
    protected $hidden       =   [
        'password', 'remember_token',
    ];
}
