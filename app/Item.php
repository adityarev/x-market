<?php

namespace Xmarket;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{    
    protected $fillable = [
        'sub_category_id',
        'item_seller',
        'item_name',
        'item_price',
        'item_description',
    ];

    public function user(){
        return $this->belongsTo('Xmarket\User','item_seller','username');
    }

    public function subCategories(){
        return $this->belongsTo('Xmarket\SubCategory');
    }

    public function images(){
        return $this->hasMany('Xmarket\ItemImage');
    }
}
