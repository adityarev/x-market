<?php

namespace Xmarket;

use Illuminate\Database\Eloquent\Model;

class ItemImage extends Model
{
    //

    public function item(){
        return $this->belongsTo('Xmarket\Item');
    }
}
