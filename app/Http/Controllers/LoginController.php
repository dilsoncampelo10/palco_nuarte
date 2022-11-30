<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function signup(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;

        if ($name && $email && $password) {
            User::create([
                'name' => $name,
                'email' => $email,
                'password' => Hash::make($password)
            ]);

            return redirect()->route('login')->with('flash', 'Cadastro realizado com sucesso!');
        } else {
            return redirect()->route('register')->with('flash', 'Não foi possível realizar cadastro');
        }
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('home');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
