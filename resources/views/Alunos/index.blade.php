@extends('home')

@section('frame1')
    <div class="row">
        <div class="col-sm-12">
            <h3 class="col-sm-4">Horário de Aulas</h3>
            <hr>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Titulo</th>
                    <th>Corpo</th>
                    <th>Categoria</th>
                    <th class="col-sm-3">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dados as $dado)
                <tr>
                    <td>{{ $dado->titulo }}</td>
                    <td>{{ $dado->corpo }}</td>
                    <td>{{ $dado->categoria }}</td>
                    <td class="col-2">
                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myModalDetails{{$dado->id}}" data-id="{{$dado->id}}">Detalhar</button>
                        <a href="#" onclick="if(confirm('Deseja excluir?')) {deleteTask({{$dado->id}})}" class="btn btn-sm btn-danger">Excluir</a>
                        <a href="{{ route('tasks.edit', $dado->id) }}" class="btn btn-sm btn-warning">Alterar</a>
                    </td>
                </tr>

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

                @endforeach
            </tbody>
        </table>
</div>

@stop
