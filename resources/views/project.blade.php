@extends('layouts.main')
@section('title','Home')
@section('content')

<div class="container">
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <label for="title">Título do projeto</label>
        <input type="text" name="title" id="title" placeholder="Digite o título do seu projeto" class="form-control">
        <label for="description">Descrição do projeto</label>
        <textarea name="description" id="description" rows="5" style="resize: none;" class="form-control" placeholder="Digite um poema, texto, prosa, etc"></textarea>
        <label for="author">Autor</label>
        <input type="text" name="author" id="author" placeholder="Digite o nome autor desse projeto" class="form-control">
        <label for="category">Tipo do projeto</label>
        <select name="category" id="category" class="form-control">
            <option value="">Selecione categoria do projeto</option>
            @foreach ($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
        <label for="file">Arquivo do projeto (Opicional) <i class="fa-sharp fa-solid fa-file"></i></label>
        <input type="file" name="file" id="file" class="form-control mb-2">
        <input type="submit" value="Enviar" class="btn btn-primary mb-3">
    </form>
</div>

@endsection