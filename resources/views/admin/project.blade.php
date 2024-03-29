@extends('layouts.admin')
@section('title','Projetos pendentes')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-3">
            @include('components.sidebar')
        </div>
        @if(count($pendingProjects)>0)
        <div class="col-9 d-flex justify-content-between" style="flex-wrap: wrap;">
            @foreach ($pendingProjects as $project)
            <div class="card mt-4" style="width: 45%;">
                <div class="card-body">
                    <h5 class="card-title">{{$project->title}}</h5>
                    <p class="card-text"><small>{{$project->dateCreation}} by {{$project->author}}</small></p>
                    <p class="card-text text-danger"><small>{{($project->isPending==1?'Projeto pendente':'Projeto aceito')}}</small></p>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$project->id}}">
                        <i class="fa-solid fa-circle-info"></i> Ver mais
                    </button>
                    <form action="{{route('update.project',['id'=>$project->id])}}" style="display: inline;" method="POST">
                        @csrf
                        @method('put')
                        <button class="btn btn-success" type="submit" onclick="return confirm('Tem certeza que deseja aceitar esse projeto?')">
                            <i class="fa-solid fa-check"></i> Confirmar
                        </button>
                    </form>
                    <form action="{{route('delete.project',['id'=>$project->id])}}" style="display: inline;" method="POST">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger" type="submit" onclick="return confirm('Tem certeza que deseja recusar esse projeto?')">
                            <i class="fa-solid fa-ban"></i> Recusar
                        </button>
                    </form>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop{{$project->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel{{$project->id}}" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel{{$project->id}}">{{$project->title}}</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-{{$project->file?'6':'12'}}">
                                    <pre>{{$project->description}}</pre>
                                </div>
                                @if ($project->file)
                                <div class="col-{{$project->description?'6':'12'}}">
                                    <img src="/assets/projects/user/file/{{$project->file}}" alt="{{$project->title}}" class="img-fluid rounded-start">
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <h3 class="position-absolute mt-3" style="left: 30%;">Não há projetos pendentes</h3>
        @endif
    </div>

</div>

@endsection