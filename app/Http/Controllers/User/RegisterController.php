<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function store(RegisterRequest $request){


       $validateFields = $request->validated();


       $user = User::create($validateFields);

       if ($user) {
           auth()->login($user);
           return redirect()->to(route('main'));
       }
       return redirect()->to(route('user.register'))->withErrors(['regError'=>'mistake']);

    }
    public function show()
    {

        if(Auth::check()){
            return redirect(route('main'));
        }
        return view('register');
    }
}
