<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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
                'password' => $password
            ]);

            return redirect()->route('login')->with('flash', 'Cadastro realizado com sucesso!');
        } else {
            return redirect()->route('register')->with('flash', 'Não foi possível realizar cadastro');
        }
    }
}
