<?php

namespace Xmarket\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Xmarket\User;
use Xmarket\Item;

class ItemController extends Controller
{
    public function index($username){
        $items = User::where('user_name',$username)->first()->item;
        
        return view('items.index')->with('items',$items);
    }

    public function show($username, $itemname){
        $tmp = str_replace("_"," ",$itemname);
        $user = User::where('user_name',$username)->first();
        $item = $user->item->where('item_name',$tmp)->first();
        
        return view('items.show')->with('user',$user)->with('item',$item);
    }

    public function create($username){
        $user = User::where('user_name',$username)->first();

        return view('items.create')->with('user',$user);
    }

    public function store($username){
        $user = User::where('user_name',$username)->first();

        Item::create([
            'item_seller'       => $user->user_name,
            'item_name'         => Input::get('item_name'),
            'item_description'  => Input::get('item_description'),
            'item_price' => Input::get('item_price'),
        ]);

        return redirect('items/'.$user->user_name);
    }

    public function edit($username, $itemname){
        $tmp = str_replace("_"," ",$itemname);
        $user = User::where('user_name',$username)->first();
        $item = $user->item->where('item_name',$tmp)->first();

        return view('items.edit')->with('user',$user)->with('item',$item);
    }

    public function update($username, $itemname){
        $tmp = str_replace("_"," ",$itemname);
        $user = User::where('user_name',$username)->first();
        $item = $user->item->where('item_name',$tmp)->first();

        $item->update([
            'item_name'         => Input::get('item_name'),
            'item_description'  => Input::get('item_description'),
            'item_price' => Input::get('item_price'),
        ]);

        return redirect('items/'.$user->user_name.'/'.$item->item_name);
    }

    public function delete($username, $itemname){
        $tmp = str_replace("_"," ",$itemname);
        $user = User::where('user_name',$username)->first();
        $item = $user->item->where('item_name',$tmp)->first();
        return view('items.delete')->with('user',$user)->with('item',$item);
    }

    public function destroy($username, $itemname){
        $tmp = str_replace("_"," ",$itemname);
        $user = User::where('user_name',$username)->first();
        $item = $user->item->where('item_name',$tmp)->first();

        $item->delete();

        return redirect('items/'.$user->user_name);
    }
}
