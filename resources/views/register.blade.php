@extends('layouts.auth_template')

@section('title','Cadastro')

@section('content')
<div class="container">
    <div class="bg-primary">
        <h1>Faça seu cadastro</h1>
    </div>
    <div style="background-color: white; padding: 20px;">
        <form action="{{route('signup')}}" method="post">
            @csrf
            <input type="text" class="form-control mt-3 mb-3" name="name" placeholder="Digite seu nome">
            <input type="email" class="form-control mt-3 mb-3" name="email" placeholder="Digite seu e-mail">
            <input type="password" class="form-control mt-3 mb-3" name="password" placeholder="Digite uma senha">
            <input type="submit" value="Fazer cadastro" class="btn btn-primary">
        </form>
    </div>
</div>

@endsection