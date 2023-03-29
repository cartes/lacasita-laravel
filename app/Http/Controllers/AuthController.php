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
            return redirect()->intended('dashboard');
        }

        return redirect()->back()
            ->withInput($request->only('email'))
            ->withErrors([
                'email' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
            ]);
    }

    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();
        return redirect('/');
    }

}
