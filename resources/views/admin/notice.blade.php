@extends('layouts.admin')
@section('title','Publicar notícia')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-3">
            @include('components.sidebar')
        </div>
        <div class="col-9">
            <h1 class="text-bg-danger mt-2">Notícias</h1>
            <form action="{{route('insert.notice')}}" method="post">
                @csrf
                <label for="title" class="form-label">Título</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Digite título da notícia">
                <label for="description" class="form-label">Descrição</label>
                <textarea name="description" id="description" class="form-control" rows="4" placeholder="Digite descrição da notícia"></textarea>
                <label for="link" class="form-label">Link</label>
                <input type="text" name="link" id="link" class="form-control" placeholder="Insira link dessa notícia">
                
                <label for="photo" class="form-label">Foto ou banner</label>
                <input type="file" name="image" id="image" class="form-control">
                <input type="submit" class="btn btn btn-primary mt-2" value="Publicar">
            </form>
        </div>
    </div>
</div>

@endsection