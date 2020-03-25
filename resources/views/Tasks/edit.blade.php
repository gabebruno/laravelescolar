@extends('home')

@section('frame1')
    <form action="{{ route('tasks.update', $task->id) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{method_field('PUT')}}
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Nova Tarefa</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="input-group col-sm-6 mb-3">
                        <input type="text" name="titulo" class="form-control" placeholder="Título" value="{{ $task->titulo }}" required>
                    </div>
                    <div class="input-group col-sm-4 mb-3 offset-2">
                        <input type="text" name="categoria" class="form-control" placeholder="Categoria" value="{{ $task->categoria }}" required>
                    </div>
                </div>
                <div class="row">
                    <div class="input-group col-sm-12 mb-3">
                        <textarea rows="3" name="corpo" class="form-control" placeholder="Descrição" required>{{ $task->corpo }}</textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="input-group col-sm-3 mb-3">
                        <input type="date" name="dataInicio" class="form-control" placeholder="Data de Inicio" value="{{ $task->dataInicio }}">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-calendar-day"></i></span>
                        </div>
                    </div>
                    <div class="input-group col-sm-3 mb-3 offset-2">
                        <input type="date" name="dataFim" class="form-control" placeholder="Data Final" value="{{ $task->dataFim }}">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-calendar-day"></i></span>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary offset-11">Salvar</button>
            </div>
        </div>

    </form>

@stop
