@extends('layouts.admin')
@section('title','Painel Administrativo')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-3">
            @include('components.sidebar')
        </div>
        <div class="col-9">
            <h3>Gerenciamento de conteúdo</h3>
            <div class="row">
                <div class="col-4">
                    <div class="card text-bg-danger bg-gradient">
                        <div class="d-flex justify-content-between">
                            <h5 class="card-title">Publicar notícia</h5>
                            <i class="fa-solid fa-triangle-exclamation"></i>
                        </div>

                        <a href="{{route('admin.notice')}}" class="btn btn-danger mt-3">Fazer publicação</a>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card text-bg-primary bg-gradient">
                        <div class="d-flex justify-content-between">
                            <h5 class="card-title">Publicar na galeria </h5>
                            <i class="fa-solid fa-image"></i>
                        </div>

                        <a href="{{route('admin.gallery')}}" class="btn btn-primary mt-3">Fazer publicação</a>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card text-bg-success bg-gradient">
                        <div class="d-flex justify-content-between">
                            <h5 class="card-title">Publicar artista</h5>
                            <i class="fa-solid fa-palette"></i>
                        </div>

                        <a href="{{route('admin.artist')}}" class="btn btn-success mt-3">Fazer publicação</a>
                    </div>
                </div>
                <div class="col-12 mt-3">
                    <div class="card text-bg-dark bg-gradient">
                        <div class="d-flex justify-content-between">
                            <h5 class="card-title">Projetos pendentes</h5>
                            <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
                                <span class="visually-hidden"></span>
                            </span>
                        </div>

                        <a href="" class="btn btn-dark mt-3">Visualizar projetos recém enviados</a>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <div class="row mt-5 mb-5">
        <h3>Monitoramento</h3>
        <iframe src="{{route('home')}}" frameborder="0" height="500px"></iframe>
    </div>
</div>
@endsection