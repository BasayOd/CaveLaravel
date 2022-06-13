<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show()
    {
        if(Auth::check()){
            return redirect(route('main'));
        }
        return view('login');
    }


    public function logout()
    {

        Auth::logout();

        return redirect(route('main'));
    }

    public function login(LoginRequest $request)
    {

        $credentials = $request->validated();

        if(Auth::attempt($credentials)){
            return redirect()->intended(route('main'));
        }
        return redirect()->to(route('user.login'))->withErrors(['email'=>'mistake']);
    }
}
