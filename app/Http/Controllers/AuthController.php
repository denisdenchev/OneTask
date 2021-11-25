<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\CreateUser;
use Illuminate\Support\Facades\Auth;
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

            return redirect()->intended(route('dashboard'));
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    //User logout
    function logout()
    {
     Auth::logout();
     return redirect(route('login'));
    }


    //Register/create a user
    public function createUser(CreateUser $request) {
        
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        
        return redirect('user/registerSuccess');
    }

    //Successfull user registration
    public function registerSuccess() {
        return view('registerSuccess', ['linkUrl'=>route('login'),'linkText'=>'Log in']);
    }

    //Dashboard, user has been logged in
    public function dashboard() {
        return view('dashboard', ['linkUrl'=>route('logout'),'linkText'=>'Log out']);
    }
}
