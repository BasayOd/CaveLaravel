<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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


}
