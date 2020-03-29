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
            </tbody>
        </table>
    </div>
@stop
