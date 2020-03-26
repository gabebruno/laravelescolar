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
            </tbody>

                <!-- Modal to task details -->
                <div class="modal fade modal-center" id="myModalDetails{{$dado->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Detalhes da Tarefa: {{ $dado->titulo }}</h4>
                            </div>
                            <row class="modal-body" id="taskDetails">
                                <div class="card card-default">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>Descrição:</label>
                                                <p> {{$dado->corpo}}</p>
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Categoria:</label>
                                                <p>{{$dado->categoria}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>Data Cadastro:</label>
                                                @isset($dado->dataInicio)
                                                    <p>{{Carbon\Carbon::parse($dado->dataInicio )->format('d/m/Y')}}</p>
                                                @endisset
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Data Agendamento:</label>
                                                @isset($dado->dataInicio)
                                                    <p>{{Carbon\Carbon::parse($dado->dataFim )->format('d/m/Y')}}</p>
                                                @endisset
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class='btn btn-default' data-dismiss="modal">Fechar</button>
                                </div>
                        </div>
                    </div>
                </div>
                <!-- Fim Modal to task details -->

            </tbody>
        </table>
    </div>

@stop
