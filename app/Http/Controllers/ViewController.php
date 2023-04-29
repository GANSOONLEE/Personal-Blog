<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller{
    public function index(){
        return view('index');
    }

    public function about_me(){
        return view('frontend/about-me');
    }

    public function service(){
        return view('frontend/service');
    }

    public function contact_me(){
        return view('frontend/contact-me');
    }

    public function register(){
        return view('frontend/register');
    }

    public function login(){
        return view('frontend/login');
    }
}

