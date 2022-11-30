@extends('layouts.auth_template')

@section('title','Login')

@section('content')
<div class="container ">
    <form class="rd-form rd-form-variant-2 rd-mailform" data-form-output="form-output-global" method="post" action="{{route('signin')}}">
        @csrf
        <div class="row row-14 gutters-14">
            <div class="col-md-4">
                <div class="form-wrap">

                    <input class="form-input" id="email" type="email" name="email" placeholder="E-mail">

                </div>
            </div>
            <div class="col-md-4">
                <div class="form-wrap">
                    <input class="form-input" id="password" type="password" name="password" data-constraints="" placeholder="Senha">
                </div>
            </div>

        </div>
        <button class="button button-primary button-pipaluk" type="submit">Fazer login</button>
    </form>
</div>
@endsection