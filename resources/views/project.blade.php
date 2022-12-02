@extends('layouts.main')
@section('title','Home')
@section('content')

<div class="container">
    <form action="" method="post">
        <label for="title">Título do projeto</label>
        <input type="text" name="title" id="title" placeholder="Digite o título do seu projeto" class="form-control">
        <label for="description">Descrição do projeto</label>
        <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Digite a descrição do seu projeto"></textarea>
        <label for="file">Arquivo do projeto (Opicional) <i class="fa-sharp fa-solid fa-file"></i></label>
        <input type="file" name="file" id="file" class="form-control">
        <input type="submit" value="Enviar" class="btn btn-primary">
    </form>
</div>

@endsection