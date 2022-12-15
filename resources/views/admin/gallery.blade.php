@extends('layouts.admin')
@section('title','Adicionar imagem na galeria')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-3">
            @include('components.sidebar')
        </div>
        <div class="col-9">
            <h1 class="text-bg-primary mt-2">Galeria de imagens</h1>
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <label for="images">Selecione imagens para galeria</label>
                <input type="file" name="images[]" id="images" class="form-control" multiple>
                <input type="submit" value="Enviar" class="btn btn-primary mt-2">
            </form>
        </div>
    </div>
    <h2>Lista da galeria</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Imagem da galeria</th>
                
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($galeries as $galery)
            <tr>
                <th scope="row">{{$galery->image}}</th>
                <td>{{$galery->description}}</td>
                <td>{{$galery->link}}</td>
                <td>
                    <a href="">Excluir</a>
                    <a href="">Editar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection