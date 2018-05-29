<?php

namespace Xmarket;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'seller',
        'buyer',
        'item_id',
        'status',
    ];
    
    public function userBuyer(){
        return $this->belongsTo('Xmarket\User','buyer','username');
    }
    
    public function userSeller(){
        return $this->belongsTo('Xmarket\User','seller','username');
    }

    public function item(){
        return $this->belongsTo('Xmarket\Item');
    }
}
