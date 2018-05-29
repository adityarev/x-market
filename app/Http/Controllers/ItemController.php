<?php

namespace Xmarket\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;

use Xmarket\User;
use Xmarket\Item;
use Xmarket\Transaction;
use Xmarket\Notification;
use Xmarket\ItemImage;

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
        if (Auth::check())return view('items.create');
        else return abort(404);
    }

    public function store(Request $request){                                                
        if(Auth::check()){
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
        } else return abort(404);
    }

    public function edit($username, $itemname){        
        if (Auth::check() && Auth::user()->username == $username){
            $user = User::where('username',$username)->first();
            $item = $user->item->where('item_name',$itemname)->first();

            return view('items.edit')->with('user',$user)->with('item',$item);
        } else return abort(404);
    }

    public function update($username, $itemname){        
        if (Auth::check()){
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
        } else return abort(404);
    }

    public function delete($username, $itemname){        
        $user = User::where('username',$username)->first();
        $item = $user->item->where('item_name',$itemname)->first();
        return view('items.delete')->with('user',$user)->with('item',$item);
    }

    public function destroy($username, $itemname){        
        if (Auth::check()){
            $user = Auth::user();
            $item = $user->item->where('item_name',$itemname)->first();

            $item->delete();

            return redirect('items/'.$user->username);
        } else return abort(404);
    }

    public function buy($username, $itemname){
        if (Auth::check()){
            $item = Item::where('item_name',$itemname)->first();            

            $transaction = Transaction::create([
                'seller' => $item->item_seller,
                'buyer' => Auth::user()->username,
                'item_id' => $item->id,                
            ]);

            Notification::create([
                'notification_receiver' => $item->item_seller,
                'notification_title' => "An Item Has Been Purchased",
                'notification_content' => $item->item_name." has been purchased by ".Auth::user()->username." please confirm this transaction.",
                'notification_hyperlink' => "transactions/".$transaction->id,
                'notification_status' => 0,
            ]);

            return redirect('transactions');
        } else return abort(404);
    }

    public function manageImages($username,$itemname){
        if (Auth::check() && Auth::user()->username == $username){
            $item = Item::where('item_name',$itemname)->first();
            return view('items.images.index')->with('item',$item);
        } else return abort(404);
    }

    public function addImage($username,$itemname){
        if (Auth::check() && Auth::user()->username == $username){
            $item = Item::where('item_name',$itemname)->first();
            return view('items.images.create')->with('item',$item);
        } else return abort(404);
    }

    public function storeImage($username,$itemname){
        if (Auth::check() && Auth::user()->username == $username){
            if (Input::file('item_image')!=null){                
                $item = Item::where('item_name',$itemname)->first();

                $path = Storage::putFile('public', Input::file('item_image'));
                $targetPath = date('Y-m-d-H-m-s').'-'.Input::file('item_image')->getClientOriginalName();            
                Storage::move($path,'public/item_images/'.$targetPath);                

                ItemImage::create([
                    'item_id'=>$item->id,
                    'image_path'=>$targetPath,
                ]);

                return redirect('items/'.Auth::user()->username.'/'.$item->item_name.'/manageimages');
            } else 
                return back();                                                    
        } else return abort(404);
    }

    public function search(){
        //var_dump(Input::all());

        echo "<br>";
        $items = DB::table('items')->select('items.*')
        ->join('sub_categories','items.sub_category_id','=','sub_categories.id')
        ->where('items.item_name','like','%'.Input::get('query').'%')
        ->orWhere('sub_categories.sub_category_name','like','%'.Input::get('query').'%')
        ->get();

        //Item::join('sub_categories','items.sub_category_id','=','sub_categories.id')->where('items.item_name','like','%'.Input::get('query').'%');

        //var_dump($items);

        /*foreach($items as $item){
            echo $item->item_name;
        }*/

        return view('items.search')->with('items',$items);
    }
}
