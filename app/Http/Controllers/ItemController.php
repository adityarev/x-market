<?php

namespace Xmarket\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Xmarket\User;
use Xmarket\Item;

class ItemController extends BaseController
{
    public function index($username){
        $user = User::where('username',$username)->first();
        $items = User::where('username',$username)->first()->item;
        
        return view('items.index')->with('items',$items)->with('user',$user);
    }

    public function show($username, $itemname){        
        $user = User::where('username',$username)->first();
        $item = $user->item->where('item_name',$itemname)->first();
        
        return view('items.show')->with('user',$user)->with('item',$item);
    }

    public function create(){
        //$user = User::where('username',$username)->first();

        return view('items.create');
    }

    public function store($username){
        $user = User::where('username',$username)->first();

        Item::create([
            'item_seller'       => $user->username,
            'item_name'         => Input::get('item_name'),
            'item_description'  => Input::get('item_description'),
            'item_price' => Input::get('item_price'),
        ]);

        return redirect('items/'.$user->username);
    }

    public function edit($username, $itemname){        
        $user = User::where('username',$username)->first();
        $item = $user->item->where('item_name',$itemname)->first();

        return view('items.edit')->with('user',$user)->with('item',$item);
    }

    public function update($username, $itemname){
        $tmp = str_replace("_"," ",$itemname);
        $user = User::where('username',$username)->first();
        $item = $user->item->where('item_name',$tmp)->first();

        $item->update([
            'item_name'         => Input::get('item_name'),
            'item_description'  => Input::get('item_description'),
            'item_price' => Input::get('item_price'),
        ]);

        return redirect('items/'.$user->username.'/'.$item->item_name);
    }

    public function delete($username, $itemname){
        $tmp = str_replace("_"," ",$itemname);
        $user = User::where('username',$username)->first();
        $item = $user->item->where('item_name',$tmp)->first();
        return view('items.delete')->with('user',$user)->with('item',$item);
    }

    public function destroy($username, $itemname){
        $tmp = str_replace("_"," ",$itemname);
        $user = User::where('username',$username)->first();
        $item = $user->item->where('item_name',$tmp)->first();

        $item->delete();

        return redirect('items/'.$user->username);
    }

    public function buy($username, $itemname){
        $tmp = str_replace("_"," ",$itemname);
        $user = User::where('username',$username)->first();
        $item = $user->item->where('item_name',$tmp)->first();

        echo $item . " purchased by ". $user;
    }
}
