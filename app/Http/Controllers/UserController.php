<?php namespace Xmarket\Http\Controllers;

use Xmarket\User;
use Xmarket\Profile;
use Xmarket\Http\Controllers\Controller;
use Xmarket\Category;
use Xmarket\Notification;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;

use Session;
use Image;
use Storage;

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

        if (Auth::guard('user')->attempt($credentials)){
            $username = $request->only('username')['username'];
            $user = User::where('username','=',$username)->first();
            Auth::login($user);            
        }
        return back();
    }

    public function logout(Request $request){
        if (Auth::check()){
            Auth::logout();                       
        }
        return redirect()->back();
    }

    public function register(){
        return view('users.register');
    }

    public function store(){
        $user = User::where('username','=',Input::get('username'))->first();
        //var_dump($user);
        if ($user == null){
            Input::merge(['password' => bcrypt(Input::get('password'))]);
            User::create(Input::all());
            Profile::create(['username' => Input::get('username')]);
            $user = User::where('username','=',Input::get('username'))->first();
            Auth::login($user);
        }        
        return back();
    }

    public function profileShow($username){
        $user = User::where('username',$username)->first();        
        return view('profiles.show')->with('user',$user);
    }

    public function profileEdit($username){
        if (Auth::check() && Auth::user()->username == $username){
            $user = Auth::user();
            $profile = Profile::where('username',$username)->first();
            return view('profiles.edit')->with('profile', $profile)->with('user',$user);
        } else {
            return abort(404);
        }
    }

    public function profileUpdate(Request $request){                
        $profile = Profile::where('username',Session::get('user')->username)->first();
        
        if ($request->file('user_profile_pict')!=null){            
            $path = Storage::putFile('public', $request->file('user_profile_pict'));
            $targetPath = date('Y-m-d-H-m-s').'-'.$request->file('user_profile_pict')->getClientOriginalName();
            $oldfile = $profile->user_profile_pict;
            if($oldfile != null){                
                Storage::delete('public/user_profile_picts/'.$oldfile);
            }
            Storage::move($path,'public/user_profile_picts/'.$targetPath);
            Input::merge(['user_profile_pict' => $targetPath]);
        } else {            
            Input::merge(['user_profile_pict' => $profile->user_profile_pict]);
        }        

        $profile->update([            
            'user_profile_pict'=>Input::get('user_profile_pict'),
            'user_fullname'=>Input::get('user_fullname'),
            'user_city'=>Input::get('user_city'),
            'user_address'=>Input::get('user_address'),
            'user_description'=>Input::get('user_description'),
            'user_phone_number'=>Input::get('user_phone_number'),
            'user_date_of_birth'=>Input::get('user_date_of_birth'),
        ]);

        return redirect('users/'.Session::get('user')->username);
    }
}