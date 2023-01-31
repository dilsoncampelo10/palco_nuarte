@extends('layouts.auth_template')

@section('title','Login')

@section('content')
<div class="container">
    <div style="background-color: white; width: 50%; position: absolute; left: 0; height: 100%;" class="text-center pb-4">
        <h1>Login</h1>
        <form class="rd-form rd-form-variant-2 rd-mailform" data-form-output="form-output-global" method="post" action="{{route('signin')}}">
            @csrf
            <div class="row row-14 gutters-14 d-flex justify-content-center">
                <div class="col-md-7">
                    <div class="form-wrap">
                        <input class="form-input" id="email" type="email" name="email" placeholder="E-mail">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="form-wrap">
                        <input class="form-input" id="password" type="password" name="password" data-constraints="" placeholder="Senha">
                    </div>
                </div>
            </div>
            <div style="margin-left: 140px; margin-top: 30px; margin-bottom: 30px;">
                <button class="button button-primary button-pipaluk" type="submit">Fazer login</button>
            </div>
            <a href="{{route('register')}}" style="margin-left: 140px;">Não possui conta? Cadastre-se</a>
        </form>
    </div>
    <div class="banner">

    </div>
</div>
@endsection