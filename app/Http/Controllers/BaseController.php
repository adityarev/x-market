<?php

namespace Xmarket\Http\Controllers;

use Illuminate\Http\Request;
use View;
use Session;
use Xmarket\Category;

class BaseController extends Controller
{    
    public function __construct(){
        View::share('categories', Category::all());        

        if (Session::has('user')){            
            $notifications = Session::get('user')->notifications;
            $notificationsCount = $notifications->where('notification_status','=',false)->count();

            View::share('notifications',$notifications);
            View::share('notificationsCount',$notificationsCount);
        }
    }
}
