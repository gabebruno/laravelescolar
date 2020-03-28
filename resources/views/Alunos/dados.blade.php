@extends('home')

@section('frame1')
    <div class="row">
        <div class="col-sm-12">
            <h3 class="col-sm-4">Dados do Aluno</h3>
            <hr>
        </div>
        <table class="table table-striped">
            <tbody>
                <tr>
                    <th>Matricula:</th>
                    <td>{{$dados->salauser()->get()->last()->id}}</td>
                </tr>
                <tr>
                    <th>Nome:</th>
                    <td>{{$dados->nome}}</td>
                </tr>
                <tr>
                    <th>CPF:</th>
                    <td>{{$dados->cpf}}</td>
                </tr>
                <tr>
                    <th>Telefone:</th>
                    <td>{{$dados->telefone}}</td>
                </tr>
                <tr>
                    <th>Endereço:</th>
                    <td>{{$dados->endereco}}</td>
                </tr>
                <tr>
                    <th>Turma:</th>
                    <td>{{$dados->salas()->get()->last()->descricao}} - {{$dados->salas()->get()->last()->ensino}}</td>
                </tr>
                <tr>
                    <th>Ano:</th>
                    <td>{{$dados->salauser()->get()->last()->exercicio}}</td>
                </tr>
            <tr>
                <th>Ações:</th>
                <td>
                    <a href="{{ route('alunos.notas', $dados->salauser()->get()->last()->id) }}" class="btn btn-sm btn-primary col-sm-2">Ver Notas</a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

@stop
