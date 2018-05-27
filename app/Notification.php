<?php

namespace Xmarket;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{    
    function user(){
        return $this->belongsTo('Xmarket\User');
    }
}
