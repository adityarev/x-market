<?php

namespace Xmarket;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    public $timestamps = false;

    public function items(){
        return $this->belongsToMany('Xmarket\Item');
    }
}
