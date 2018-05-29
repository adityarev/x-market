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
    
    public function buyer(){
        return $this->belongsTo('Xmarket\User','buyer');
    }
    
    public function seller(){
        return $this->belongsTo('Xmarket\User','seller');
    }
}
