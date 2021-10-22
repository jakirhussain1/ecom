<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    function welcome(){
        return view('welcome');
    }
    function about(){
        return view('frontend_router/about');
    }
    function shop(){
        return view('frontend_router/shop');
    }
    function blog(){
        return view('frontend_router/blog');
    }
    function contact(){
        return view('frontend_router/contact');
    }
    function cart(){
        return view('frontend_router/cart');
    }
}
