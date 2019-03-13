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

    public function admin_product(){
    	return view('admin.product.list');
    }

    public function admin_product_apparel(){
    	return view('admin.product.apparel');
    }

    public function admin_reports(){
    	return view('admin.report.list');
    }

    public function admin_order_pending(){
    	return view('admin.order.pending');
    }

    public function admin_order_approve(){
    	return view('admin.order.approve');
    }

    public function admin_order_delivery(){
    	return view('admin.order.delivery');
    }
}
