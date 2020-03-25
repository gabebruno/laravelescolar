@extends('home')

@section('frame1')
    <div class="row">
        <div class="col-sm-12">
            <h3 class="col-sm-4">Todas as tarefas</h3>
            <a href="{{ route('tasks.create') }}" class="btn btn-sm btn-primary col-sm-2 offset-10">Nova Tarefa</a>
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
                @foreach ($tasks as $task)
                <tr>
                    <td>{{ $task->titulo }}</td>
                    <td>{{ $task->corpo }}</td>
                    <td>{{ $task->categoria }}</td>
                    <td class="col-2">
                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myModalDetails{{$task->id}}" data-id="{{$task->id}}">Detalhar</button>
                        <a href="#" onclick="if(confirm('Deseja excluir?')) {deleteTask({{$task->id}})}" class="btn btn-sm btn-danger">Excluir</a>
                        <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-sm btn-warning">Alterar</a>
                    </td>
                </tr>

                <!-- Modal to task details -->
                <div class="modal fade modal-center" id="myModalDetails{{$task->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Detalhes da Tarefa: {{ $task->titulo }}</h4>
                            </div>
                            <row class="modal-body" id="taskDetails">
                                <div class="card card-default">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>Descrição:</label>
                                                <p> {{$task->corpo}}</p>
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Categoria:</label>
                                                <p>{{$task->categoria}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>Data Cadastro:</label>
                                                @isset($task->dataInicio)
                                                    <p>{{Carbon\Carbon::parse($task->dataInicio )->format('d/m/Y')}}</p>
                                                @endisset
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Data Agendamento:</label>
                                                @isset($task->dataInicio)
                                                    <p>{{Carbon\Carbon::parse($task->dataFim )->format('d/m/Y')}}</p>
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

    {!! $tasks->links() !!}

@stop
