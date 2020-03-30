@extends('home')

@section('frame1')
    <div class="row">
        <div class="col-sm-12">
            <h3 class="col-sm-4">Dados do Professor</h3>
            <hr>
        </div>
        <table class="table table-striped">
            <tbody>
            <tr>
                <th>Nome:</th>
                <td>{{$dados['nome']}}</td>
            </tr>
            <tr>
                <th>CPF:</th>
                <td>{{$dados['cpf']}}</td>
            </tr>
            <tr>
                <th>Telefone:</th>
                <td>{{$dados['telefone']}}</td>
            </tr>
            <tr>
                <th>Endereço:</th>
                <td>{{$dados['endereco']}}</td>
            </tr>
            <tr>
                <th>Ações:</th>
                <td>
                    <a href="{{ route('gestores.alunos') }}" class="btn btn-sm btn-primary col-sm-2"><i class="fa fa-user"> Alunos</i></a>
                    <a href="{{ route('gestores.professores')}}" class="btn btn-sm btn-info col-sm-2"><i class="fa fa-user-tie"> Professores</i></a>
                    <a href="{{ route('gestores.materias') }}" class="btn btn-sm btn-secondary col-sm-2"><i class="fa fa-book"> Matérias</i></a>
                    <a href="{{ route('gestores.salas') }}" class="btn btn-sm btn-default col-sm-2"><i class="fa fa-school"> Sala</i></a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@stop
