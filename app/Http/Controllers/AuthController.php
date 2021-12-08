<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\CreateUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;

use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    //Login Authentication
    public function loginAuth(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended(route('tasks.index'));
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    //User logout
    function logout(Request $request)
    {
        Auth::logout();

        $request->session()->flush();  
        $request->session()->invalidate();

        return redirect(route('login'));
    }


    //Register/create a user
    public function createUser(CreateUser $request) {
        
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);


        return redirect(route('registerSuccess', ['email' => $request->email]));
    }

    //Successfull user registration
    public function registerSuccess(Request $request) {
        $email = $request->email;
        Mail::to($email)->send(new WelcomeMail);
        return view('registerSuccess', ['linkUrl'=>route('login'),'linkText'=>'Log in']);
    }

    //Dashboard, user has been logged in
    public function dashboard() {
        return view('dashboard', ['linkUrl'=>route('logout'),'linkText'=>'Log out']);
    }
}
