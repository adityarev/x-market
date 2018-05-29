<?php

namespace Xmarket;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{    
    protected $fillable = [
        'notification_receiver',
        'notification_title',
        'notification_content',
        'notification_hyperlink',
        'notification_status',
    ];
    
    function user(){
        return $this->belongsTo('Xmarket\User');
    }
}
