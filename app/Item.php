<?php

namespace Xmarket;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{    
    protected $fillable = [
        'item_name',
        'item_price',
        'item_description',
    ];

    public function user(){
        return $this->belongsTo('Xmarket\User','item_seller','username');
    }

    public function subCategories(){
        return $this->belongsToMany('Xmarket\SubCategory');
    }

    public function images(){
        return $this->hasMany('Xmarket\Image');
    }
}
