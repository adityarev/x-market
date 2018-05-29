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

class TransactionController extends BaseController
{
    public function index(){
        if (Auth::check()){
            $buyTransactions = Transaction::where('buyer',Auth::user()->username)->get();            

            $sellTransactions = Transaction::where('seller',Auth::user()->username)->get();            
            
            return view('transactions.index')->with('buyTransactions',$buyTransactions)->with('sellTransactions',$sellTransactions);
        } else 
            return abort(404);
    }

    public function show($transactionid){
        if (Auth::check()){            
            $transaction = Transaction::find($transactionid);            

            if ($transaction->userSeller->username == Auth::user()->username || $transaction->userBuyer->username == Auth::user()->username)
                return view('transactions.show')->with('transaction',$transaction);
            else 
                return abort(404);
        } else 
            return abort(404);
    }    

    public function update($transactionid){        
        if (Auth::check()){
            $transaction = Transaction::find($transactionid);

            $transaction->status = Input::get('status')+1;

            $transaction->save();

            return redirect('transactions');
        } else return abort(404);
    }

    public function destroy($transactionid){
        if(Auth::check()){
            $transaction = Transaction::find($transactionid);
            $transaction->delete();
            return redirect('transactions');
        } else return abort(404);
    }
}
