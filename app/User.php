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
        'username', 'email','password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function profile(){
        return $this->hasOne('Xmarket\Profile','user_name','username');
    }

    public function item(){
        return $this->hasMany('Xmarket\Item','item_seller','username');
    }

    public function notifications(){
        return $this->hasMany('Xmarket\Notification','notification_receiver','username');
    }
}
