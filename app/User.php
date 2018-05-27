<?php

namespace Xmarket;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public $timestamps = false;

    protected $guard = 'user';

    protected $fillable = [
        'user_name', 'user_email','user_password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function profile(){
        return $this->hasOne('Xmarket\Profile','user_name','user_name');
    }

    public function item(){
        return $this->hasMany('Xmarket\Item','item_seller','user_name');
    }
}
