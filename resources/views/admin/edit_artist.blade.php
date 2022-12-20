@extends('layouts.admin')
@section('title','Adicionar artista')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-3">
            @include('components.sidebar')
        </div>
        <div class="col-9">
            <h1 class="text-bg-success mt-2">Editar artista</h1>
            <form action="{{route('insert.artist')}}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="name" class="form-label">Nome</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Digite nome do artista" value="{{$artist->name}}">
                <label for="function" class="form-label">Função</label>
                <input type="text" name="function" id="function" class="form-control" placeholder="Digite a função do artista" value="{{$artist->function}}">
                <label for="contact" class="form-label">Forma de contato</label>
                <input type="text" name="contact" id="contact" class="form-control" placeholder="Digite telefone ou e-mail" value="{{$artist->contact}}">
                <div class="form-group">
                    <label class="form-label">Faz parte da equipe?</label>
                    <input type="radio" name="team" id="yes" value="1" class="form-check-input">
                    <label for="yes">Sim</label>
                    <input type="radio" name="team" id="no" value="0" class="form-check-input" checked>
                    <label for="no">Não</label>

                </div>
                <label for="photo" class="form-label">Foto ou banner</label>
                <input type="file" name="photo" id="photo" class="form-control">
                <input type="submit" class="btn btn btn-primary mt-2" value="Cadastrar">
            </form>
        </div>
    </div>
</div>
@endsection