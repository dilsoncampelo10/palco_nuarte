@extends('layouts.auth_template')

@section('title','Login')

@section('content')
<div class="container">


    <div class="px-3" id="login">
        <h1 class="text-center">Login</h1>
        <form action="{{route('signin')}}" method="post">
            @csrf
            <input type="email" class="form-input mt-3 mb-3" name="email" placeholder="Digite seu e-mail">
            <input type="password" class="form-input mt-3 mb-3" name="password" placeholder="Digite sua senha">
            <div style="margin-bottom: 30px;">
                <button class="button button-primary button-pipaluk" type="submit">Fazer login</button>
            </div>
            <a href="{{route('register')}}">Não possui conta? Cadastre-se</a>
        </form>
    </div>

    <div class="banner">

    </div>
</div>
@endsection