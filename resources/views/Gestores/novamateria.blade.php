@extends('home')

@section('frame1')

    <form action="{{ route('materia.store') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}

        @if($error ?? '')
            <div class="badge badge-warning col-sm-12">
                <h2 style="color:black">{{$error ?? ''}}</h2>
            </div>
        @endif

        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Nova Matéria</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="input-group col-sm-6 mb-3">
                        <label class="input-group">Descrição</label>
                        <input type="text" name="descricao" class="form-control" placeholder="Descrição" value="{{ old('descricao') }}" required>
                    </div>
                    <div class="input-group col-sm-6 mb-3">
                        <label class="input-group">Professor</label>
                        <select name="userId" class="form-control">
                            @foreach($professores as $professor)
                                <option value={{$professor->id}}> {{$professor->nome}} </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary offset-11">Salvar</button>
            </div>
        </div>

    </form>

@stop
