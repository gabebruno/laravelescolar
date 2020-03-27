@extends('home')

@section('frame1')
    <div class="row">
        <div class="col-sm-12">
            @if ($user->tipo_id == 1)
                <h3>Bem vindo(a) aluno(a) {{$user->nome}}</h3>
                <h5>Favor acessar os menus de aluno ao lado!</h5>
            @endif
            @if ($user->tipo_id == 2)
                <h3>Bem vindo(a) Professor(a) {{$user->nome}}</h3>
                <h5>Favor acessar os menus de professor ao lado!</h5>
            @endif
            @if ($user->tipo_id == 3)
                <h3>Bem vindo {{$user->nome}}</h3>
                <h5>Favor acessar os menus de gestão ao lado!</h5>
            @endif
        </div>
    </div>
@stop
