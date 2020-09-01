<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $table    =   'users_profile';

    protected $fillable =   [
        'description'
    ];

    public $timestamps  =   false;

    public function user()
    {
        return $this->belongsTo('App\User', 'id', 'id');
    }
}
