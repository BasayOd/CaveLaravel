<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function showLogin()
    {
        if(Auth::check()){
            return redirect(route('user.private'));
        }
        return view('login');
    }

    public function showRegister()
    {

        if(Auth::check()){
            return redirect(route('user.private'));
        }
        return view('register');
    }
    public function logout()
    {

        Auth::logout();

        return redirect(route('main'));
    }

    public function login(Request $request)
    {
        //$formFields = $request->validated();
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if(Auth::attempt($credentials)){
            return redirect()->intended(route('main'));
        }
        return redirect()->to(route('user.login'))->withErrors(['email'=>'mistake']);
    }


}
