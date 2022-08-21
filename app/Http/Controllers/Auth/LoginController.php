<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function showLogin(){
        return view('Auth.login');
    }

    public function login(LoginRequest $request){

        if(!auth()->attempt($request->only('email','password'),$request->remember)){
            return back()->with('status','Invalid Login Details');
        };

        return redirect()->route('dashboard');
    }
}
