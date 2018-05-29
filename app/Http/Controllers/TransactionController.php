<?php

namespace Xmarket\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;

use Xmarket\User;
use Xmarket\Item;
use Xmarket\Transaction;

use Session;
use Image;
use Storage;

class TransactionController extends Controller
{
    public function index(){
        if (Auth::check()){
            $buyTransactions = Transaction::where('buyer',Auth::user()->username)->get();

            echo "Buy : <br>"; 
            foreach ($buyTransactions as $transaction){
                echo $transaction->item->item_name."<br>";
            }

            $sellTransactions = Transaction::where('seller',Auth::user()->username)->get();
            echo "Sell : <br>";
            foreach ($sellTransactions as $transaction){
                echo $transaction->item->item_name."<br>";
            }            
        } else 
            return abort(404);
    }

    public function show(){
        if (Auth::check){

        } else 
            return abort(404);
    }

    public function store(){

    }

    public function updateStatus(){
        
    }
}
