<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class CustomerController extends Controller
{
    public function user_home(){
    	return view('customer.home');
    }

    public function user_logout(){
    	Auth::logout();
    	return redirect()->route('login');
    }
}
