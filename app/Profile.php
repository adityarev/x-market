<?php

namespace Xmarket;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'username',
        'user_profile_pict',
        'user_fullname',
        'user_city',
        'user_address',
        'user_description',
        'user_phone_number',
        'user_date_of_birth',
    ];

    public function user(){
        return $this->belongsTo('Xmarket\User','username','username');
    }
}
