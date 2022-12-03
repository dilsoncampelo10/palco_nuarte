@extends('layouts.admin')
@section('title','Projetos pendentes')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-3">
            @include('components.sidebar')
        </div>
        <div class="col-9">
            @foreach ($pendingProjects as $project)
            <div class="card w-50 mt-2">
                <div class="card-body">
                    <h5 class="card-title">{{$project->title}}</h5>
                    <p class="card-text"><small>{{$project->dateCreation}} by {{$project->author}}</small></p>

                    <p class="card-text text-danger"><small>{{($project->isPending==1?'Projeto pendente':'Projeto aceito')}}</small></p>

                    <a href="#" class="btn btn-primary"><i class="fa-solid fa-circle-info"></i> Ver mais</a>
                    <a href="#" class="btn btn-success"><i class="fa-solid fa-check"></i> Confirmar projeto</a>
                    <a href="#" class="btn btn-danger"><i class="fa-solid fa-ban"></i> Recusar projeto</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection