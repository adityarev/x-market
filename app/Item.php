<?php

namespace Xmarket;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //

    protected $fillable = [
        'item_name',
        'item_price',
        'item_description',
    ];

    public function user(){
        return $this->belongsTo('Xmarket\User','item_seller');
    }
}
