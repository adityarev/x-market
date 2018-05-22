<?php

namespace Xmarket\Http\Controllers;

use Illuminate\Http\Request;
use Xmarket\User;
use Xmarket\Item;

class ItemController extends Controller
{
    public function index($username){
        $items = User::where('user_name',$username)->first()->item;
        
        return view('items.index')->with('items',$items);
    }
}
