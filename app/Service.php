<?php

namespace Xmarket;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{    
    protected $timestamps = false;

    public function ServiceProvider() {
        return $this->belongsTo('Xmarket\ServiceProvider');
    }
}
