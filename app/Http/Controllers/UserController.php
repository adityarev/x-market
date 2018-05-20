<?php namespace Xmarket\Http\Controllers;

use Illuminate\Http\Request as Request;
use Illuminate\Support\Facades\Auth;
use Xmarket\User as User;
use Xmarket\Http\Controllers\Controller;

class UserController extends Controller {

    public function index(){
        return 'Index';
    }

    public function loginPage(){
        return view('auth.login');
    }

    public function login(Request $request){
        $credentials = $request->only('email','password');

        if ($login = Auth::guard('user')->attempt($credentials)){
            $email = $request->only('email')['email'];
            $user = User::where('email','=',$email)->first();
            //echo $user->name;
            $request->session()->put('user', $user);
            //print_r($request->session()->get('user'));
            echo $request->session()->get('user')->name;
        } else 
            echo 'gagal';
    }

    public function logout(Request $request){
        if ($request->session()->has('user')){
            $request->session()->flush();
        }
        if ($request->session()->has('user')){
            echo 'Gagal';
        }
    }

    public function register(){
        echo 'Register';
    }
}