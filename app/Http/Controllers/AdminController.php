<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    
    public function admin_home(){
    	return view('admin.home');
    }

    public function admin_logout(){
    	Auth::logout();
    	return redirect()->route('login');
    }
}
