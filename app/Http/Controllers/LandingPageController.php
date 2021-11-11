<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index() {
        return view('home',['linkUrl'=>'/register','linkText'=>'Register']);
    }

    public function register() {
        return view('register', ['linkUrl'=>'/','linkText'=>'Log in']);
    }
}
