<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ControllerLogin extends Controller
{
    public function login()
    {
        return view('pengguna.login');
    }
    public function postlogin(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/dashboard');
        }
        return redirect('login');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
