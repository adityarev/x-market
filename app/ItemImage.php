<?php

namespace Xmarket;

use Illuminate\Database\Eloquent\Model;

class ItemImage extends Model
{
    //

    protected $fillable = [];

    public function item(){
        return $this->belongsTo('Xmarket\Item');
    }
}
