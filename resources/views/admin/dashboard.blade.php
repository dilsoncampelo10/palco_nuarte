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
                            @if ($project >= 1)
                            <!-- <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
                                <span class="visually-hidden"></span>
                            </span> -->

                            @if ($project<=99) <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                {{$project}}

                                </span>
                                @else
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                    99+

                                </span>
                                @endif

                                @endif
                        </div>

                        <a href="{{route('admin.project')}}" class="btn btn-dark mt-3">Visualizar projetos recém enviados</a>
                    </div>
                    <button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Adicionar nova categoria
                    </button>


                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Adicionar categoria</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{route('insert.category')}}" method="post">
                                        @csrf
                                        <input type="text" name="name" id="name" placeholder="Nome da nova categoria" class="form-control">

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                    <input type="submit" class="btn btn-primary" value="Adicionar">
                                    </form>
                                </div>
                            </div>
                        </div>
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