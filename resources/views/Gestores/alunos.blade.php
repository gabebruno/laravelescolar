@extends('home')

@section('frame1')
    <div class="row">
        <div class="form-group col-sm-12">
            <a href="{{ route('aluno.create') }}" class="btn btn-sm btn-info col-sm-2">NOVO ALUNO</a>
        </div>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>CPF</th>
                <th>Telefone</th>
                <th>Endereço</th>
                <th>Sala</th>
                <th class="col-2">Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($alunos as $dado)
                <tr>
                    <td>{{$dado['nome']}}</td>
                    <td>{{$dado['email']}}</td>
                    <td>{{$dado['cpf']}}</td>
                    <td>{{$dado['telefone']}}</td>
                    <td>{{$dado['endereco']}}</td>
                    <td>{{$dado['salas']}}</td>
                    <td class="col-sm-2">
                        <a href="#" onclick="if(confirm('Deseja excluir?')) {deleteUsuario({{$dado['id']}})}" class="btn btn-sm btn-danger">Excluir</a>
                        <a href="{{ route('aluno.edit', $dado['id']) }}" class="btn btn-sm btn-warning">Alterar</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@stop
