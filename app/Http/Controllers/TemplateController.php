<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index(){
    	return view('user.home');
    }

    public function about(){
    	return view('user.about');
    }

    public function product(){
    	return view('user.product');
    }

    public function contact(){
    	return view ('user.contact');
    }

    public function adminIndex(){
    	return view('admin.home');
    }

    
}
