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
        $password2 = $request->password2;

        if ($name && $email && $password) {

            if ($password != $password2) {
                return redirect()->route('register')->with('danger', 'Senhas não conferem');
            }
            User::create([
                'name' => $name,
                'email' => $email,
                'password' => Hash::make($password)
            ]);

            return redirect()->route('login')->with('success', 'Cadastro realizado com sucesso!');
        } else {
            return redirect()->route('register')->with('danger', 'Não foi possível realizar cadastro');
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
