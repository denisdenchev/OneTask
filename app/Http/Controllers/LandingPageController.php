<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\CreateUser;

class LandingPageController extends Controller
{
    public function index() {
        return view('home',['linkUrl'=>route('register'),'linkText'=>'Register']);
    }

    public function register() {
        return view('register', ['linkUrl'=>route('login'),'linkText'=>'Log in']);
    }

    public function registerSuccess() {
        return view('registerSuccess', ['linkUrl'=>route('login'),'linkText'=>'Log in']);
    }

    //linkUrl & linkText are properties that are being passed to the header
    // thats included in the home & register page

    //CreateUser is the request validation. Can be found in http/requests

    public function createUser(CreateUser $request) {

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->userEmail;
        $user->password = $request->userPassword;
        $user->save();

        return redirect('/registerSuccess');
    }
}
