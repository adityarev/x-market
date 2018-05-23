<?php

namespace Xmarket;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //

    protected $timestamp = false;

    public function ServiceProvider() {
        return $this->belongsTo('Xmarket\ServiceProvider');
    }
}
