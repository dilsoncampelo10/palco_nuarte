@extends('layouts.admin')
@section('title','Painel Administrativo')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-3">
            @include('components.sidebar')
        </div>
        <div class="col-9">
            <form action="" method="post">
                <label for="name" class="form-label">Nome</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Digite nome do artista">
                <label for="function" class="form-label">Função</label>
                <input type="text" name="function" id="function" class="form-control" placeholder="Digite a função do artista">
                <label for="contact" class="form-label">Forma de contato</label>
                <input type="text" name="contact" id="contact" class="form-control" placeholder="Digite telefone ou e-mail">
                <div class="form-group">
                    <label class="form-label">Faz parte da equipe?</label>
                    <input type="radio" name="team" id="yes" value="s" class="form-check-input">
                    <label for="yes">Sim</label>
                    <input type="radio" name="team" id="no" value="n" class="form-check-input" checked>
                    <label for="no">Não</label>
                    
                </div>
                <label for="photo" class="form-label">Foto ou banner</label>
                <input type="file" name="photo" id="photo" class="form-control">
                <input type="submit" class="btn btn btn-primary mt-2" value="Cadastrar">
            </form>
        </div>
    </div>
</div>

@endsection