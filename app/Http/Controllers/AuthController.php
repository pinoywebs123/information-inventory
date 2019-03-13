<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    
    public function login(){
    	return view('auth.login');
    }

    public function login_check(Request $request){
    	if(Auth::attempt($request->except('_token'))){
    		if(Auth::user()->role_id == 1){
    			return redirect()->route('admin_home');
    		}else{
    			return redirect()->route('user_home');
    		}
    	}else{
    		return 'invalid';
    	}
    }

    public function register(){
    	return view('auth.register');
    }
}
