<?php namespace Xmarket\Http\Controllers;

use Illuminate\Http\Request as Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Xmarket\User as User;
use Xmarket\Profile;
use Xmarket\Http\Controllers\Controller;
use Xmarket\Category;
use Xmarket\Notification;
use Session;

class UserController extends BaseController {
    
    public function username()
    {
        return 'username';
    }

    public function index(){
        return 'Index';
    }

    public function loginPage(){
        return view('auth.login');
    }

    public function login(Request $request){                        
        $credentials = $request->only('username','password');        

        if ($login = Auth::guard('user')->attempt($credentials)){
            $username = $request->only('username')['username'];
            $user = User::where('username','=',$username)->first();            
            $request->session()->put('user', $user);            
            return back();
        } else 
            return back();
    }

    public function logout(Request $request){
        if ($request->session()->has('user')){
            $request->session()->flush();
        }
        if ($request->session()->has('user')){
            echo 'Gagal';
        }
        return redirect()->back();
    }

    public function register(){
        return view('users.register');
    }

    public function store(){
        Input::merge(['password' => bcrypt(Input::get('password'))]);
        User::create(Input::all());
        Profile::create(['username' => Input::get('username')]);
        $user = User::where('username','=',Input::get('username'))->first();            
        Session::put('user', $user);  
        return redirect('category');
    }

    public function profileShow($username){
        $user = User::where('username',$username)->first();        
        return view('profiles.show')->with('user',$user);
    }

    public function profileEdit($username){
        $profile = Profile::where('username',$username)->first();
        return view('profiles.edit')->with('profile', $profile);
    }

    public function profileUpdate($username){        
        $profile = Profile::where('username',$username)->first();        
        $profile->update(Input::all());

        return redirect('users/'.$username);
    }
}