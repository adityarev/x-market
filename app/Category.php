<?php

namespace Xmarket;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public $timestamps = false;

    public function subCategory(){
        return $this->hasMany('Xmarket\SubCategory');
    }
}
