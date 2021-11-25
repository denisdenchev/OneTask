<?php

namespace App\Http\Controllers;


class LandingPageController extends Controller
{
    public function index() {
        return view('home',['linkUrl'=>route('register'),'linkText'=>'Register']);
    }

    public function register() {
        return view('register', ['linkUrl'=>route('login'),'linkText'=>'Log in']);
    }
}
