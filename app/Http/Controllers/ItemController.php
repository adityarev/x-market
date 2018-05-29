<?php

namespace Xmarket\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;

use Xmarket\User;
use Xmarket\Item;

use Session;
use Image;
use Storage;

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
        if (Auth::check())
            return view('items.create');
        else 
            return abort(404);
    }

    public function store(Request $request){                                                
        if (Input::file('item_image')!=null){            
            $path = Storage::putFile('public', Input::file('item_image'));
            $targetPath = date('Y-m-d-H-m-s').'-'.Input::file('item_image')->getClientOriginalName();            
            Storage::move($path,'public/item_images/'.$targetPath);
            Input::merge(['item_image' => $targetPath]);
        } else {
            Input::merge(['item_image' => null]);
        }        
        Item::create([
            'item_seller'       => Auth::user()->username,
            'sub_category_id'   => Input::get('sub_category_id'),
            'item_name'         => Input::get('item_name'),
            'item_image'        => Input::get('item_image'),
            'item_description'  => Input::get('item_description'),
            'item_price'        => Input::get('item_price'),
        ]);        

        return redirect('items/'.Auth::user()->username);
    }

    public function edit($username, $itemname){        
        if (Auth::check() && Auth::user()->username == $username){
            $user = User::where('username',$username)->first();
            $item = $user->item->where('item_name',$itemname)->first();

            return view('items.edit')->with('user',$user)->with('item',$item);
        } 
        else 
            return abort(404);
    }

    public function update($username, $itemname){        
        $user = Auth::user();
        $item = $user->item->where('item_name',$itemname)->first();
        
        if (Input::file('item_image')!=null){            
            $path = Storage::putFile('public', Input::file('item_image'));
            $targetPath = date('Y-m-d-H-m-s').'-'.Input::file('item_image')->getClientOriginalName();
            $oldfile = $item->item_image;
            if($oldfile != null){                
                Storage::delete('public/item_images/'.$oldfile);
            }
            Storage::move($path,'public/item_images/'.$targetPath);
            Input::merge(['item_image' => $targetPath]);
        } else {
            Input::merge(['item_image' => $item->item_image]);
        }

        $item->update([
            'sub_category_id'   => Input::get('sub_category_id'),
            'item_name'         => Input::get('item_name'),
            'item_image'        => Input::get('item_image'),
            'item_description'  => Input::get('item_description'),
            'item_price'        => Input::get('item_price'),
        ]);

        return redirect('items/'.$user->username.'/'.$item->item_name);
    }

    public function delete($username, $itemname){        
        $user = User::where('username',$username)->first();
        $item = $user->item->where('item_name',$itemname)->first();
        return view('items.delete')->with('user',$user)->with('item',$item);
    }

    public function destroy($username, $itemname){        
        $user = User::where('username',$username)->first();
        $item = $user->item->where('item_name',$itemname)->first();

        $item->delete();

        return redirect('items/'.$user->username);
    }

    public function buy($username, $itemname){
        $tmp = str_replace("_"," ",$itemname);
        $user = User::where('username',$username)->first();
        $item = $user->item->where('item_name',$tmp)->first();

        echo $item . " purchased by ". $user;
    }

    public function addImage(){
        echo "Bla";
    }

    public function deleteImage(){
        echo "del";
    }
}
