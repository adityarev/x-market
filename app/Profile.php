<?php

namespace Xmarket;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'user_fullname',
        'user_city',
        'user_address',
        'user_description',
    ];

    public function user(){
        return $this->belongsTo('Xmarket\User');
    }
}
