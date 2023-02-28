<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            dd(true);
            return redirect()->intended('dashboard');
        }

        dd(false);
        return redirect()->back()->withInput($request->only('email'));
    }
}
