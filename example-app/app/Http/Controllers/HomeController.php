<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('layout.home');
    }

    public function shop(){
        return view('layout.shop');
    }

    public function contact(){
        return view('layout.contact');
    }

    public function checkout(){
        return view('layout.checkout');
    }

    public function blog(){
        return view('layout.blog');
    }

    
}
