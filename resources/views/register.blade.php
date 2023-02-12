@extends('layouts.auth_template')

@section('title','Cadastro')

@section('content')
<div class="container">
    <div class="banner" style="left: 0;">

    </div>
    <div class="px-3" id="register">
        <h1 class="text-center">Cadastro</h1>
        <form action="{{route('signup')}}" method="post">
            @csrf
            <input type="text" class="form-input mt-3 mb-3" name="name" placeholder="Digite seu nome">
            <input type="email" class="form-input mt-3 mb-3" name="email" placeholder="Digite seu e-mail">
            <input type="password" class="form-input mt-3 mb-3" name="password" placeholder="Digite uma senha" minlength="8">
            <input type="password" class="form-input mt-3 mb-3" name="password2" placeholder="Confirme sua senha" minlength="8">
            <div style="margin-bottom: 30px;">
                <button class="button button-primary button-pipaluk" type="submit">Fazer cadastro</button>
            </div>
            <a href="{{route('login')}}">Já possui conta? Faça login</a>
        </form>
    </div>
</div>

@endsection