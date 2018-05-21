<?php namespace Xmarket\Http\Controllers;

use Illuminate\Http\Request as Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Xmarket\User as User;
use Xmarket\Profile;
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
            $request->session()->put('user', $user);
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
        return view('users.register');
    }

    public function store(){
        Input::merge(['user_password' => bcrypt(Input::get('user_password'))]);
        User::create(Input::all());
        Profile::create(['user_name' => Input::get('user_name')]);
        return redirect('welcome');
    }

    public function profileShow($username){
        $profile = Profile::where('user_name',$username)->first();
        echo $profile->user_fullname;
    }

    public function profileEdit($username){
        $profile = Profile::where('user_name',$username)->first();
        return view('profiles.edit')->with('profile', $profile);
    }

    public function profileUpdate($username){
        $profile = Profile::where('user_name',$username)->first();        
        $profile->update(Input::all());

        return redirect('users/'.$username);
    }
}