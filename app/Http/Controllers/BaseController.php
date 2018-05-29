<?php

namespace Xmarket\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use View;
use Session;

use Xmarket\Category;
use Xmarket\Notification;

class BaseController extends Controller
{    
    public function __construct(){
        View::share('categories', Category::all());        

        if (Auth::check()){            
            $notifications = Notification::where('notification_receiver',Auth::user()->username)->orderBy('created_at','desc')->get();
            $notificationsCount = $notifications->where('notification_status','=',false)->count();

            View::share('notifications',$notifications);
            View::share('notificationsCount',$notificationsCount);
        }
    }
}
