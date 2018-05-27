<?php

namespace Xmarket;

use Illuminate\Database\Eloquent\Model;

class ServiceProvider extends Model
{    
    public $timestamps = false;

    public function service(){
        return $this->hasMany('Xmarket\Service');
    }
}
