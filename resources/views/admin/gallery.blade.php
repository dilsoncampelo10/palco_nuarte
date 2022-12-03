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
</div>
@endsection