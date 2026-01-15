<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    //
    public function index(){
        return view("front.index");
    }
    public function about(){
        return view("front.about");
    }
    public function services(){
        return view("front.services");
    }
    public function shop(){
        return view("front.shop");
    }
    public function education(){
        return view("front.education");
    }
    
    public function training(){
        return view("front.training");
    }
    public function products(){
        return view("front.products");
    }
    public function productDetails(){
        return view("front.product-details");
    }
    public function learn(){
        return view("front.learn-more");
    }
    public function contacts(){
        return view("front.contacts");
    }
    public function request(){
        return view("front.request");
    }
    //================Auth
    public function login(){
        return view("front.auth.login");
    }
    public function create(){
        return view("front.auth.create");
    }
}
