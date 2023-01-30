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
            <form action="{{route('insert.gallery')}}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="image">Selecione imagens para galeria</label>
                <input type="file" name="image" id="image" class="form-control" required>
                <input type="submit" value="Enviar" class="btn btn-primary mt-2">
            </form>
        </div>
    </div>
    <h2>Lista da galeria</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Imagem da galeria</th>

                <th scope="col">Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($galleries as $gallery)
            <tr class="d-flex align-items-center justify-content-between">
                <th scope="row"><img src="/assets/gallery/{{$gallery->image}}" alt="Imagem {{$gallery->id}}" style="width: 150px; position: relative;"></th>
                <td>
                    <form action="{{route('delete.gallery',['id'=>$gallery->id])}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Excluir" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir?')">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection