@extends('home')

@section('frame1')

    <form action="{{ route('sala.store') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}

        @if($error ?? '')
            <div class="badge badge-warning col-sm-12">
                <h2 style="color:black">{{$error ?? ''}}</h2>
            </div>
        @endif

        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Nova Sala</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="input-group col-sm-6 mb-3">
                        <input type="text" name="descricao" class="form-control" placeholder="Descrição" value="{{ old('descricao') }}" required>
                    </div>
                    <div class="input-group col-sm-4 mb-3 offset-2">
                        <input type="text" name="ensino" class="form-control" placeholder="Ensino" value="{{ old('ensino') }}" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary offset-11">Salvar</button>
            </div>
        </div>

    </form>

@stop
