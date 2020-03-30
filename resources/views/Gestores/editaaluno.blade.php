@extends('home')

@section('frame1')

    <form action="{{ route('aluno.update', $dado['id']) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}

        @if($error ?? '')
            <div class="badge badge-warning col-sm-12">
                <h2 style="color:black">{{$error ?? ''}}</h2>
            </div>
        @endif
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Editar Aluno</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="input-group col-sm-6 mb-3">
                        <label class="input-group">Nome</label>
                        <input type="text" name="nome" class="form-control" value="{{ $dado['nome'] }}" required>
                    </div>
                    <div class="input-group col-sm-6 mb-3">
                        <label class="input-group">Email</label>
                        <input type="text" name="email" class="form-control" value="{{ $dado['email'] }}" required>
                    </div>
                </div>
                <div class="row">
                    <div class="input-group col-sm-3 mb-3">
                        <label class="input-group">CPF</label>
                        <input type="text" name="cpf" class="form-control" value="{{ $dado['cpf'] }}" required>
                    </div>
                    <div class="input-group col-sm-3 mb-3">
                        <label class="input-group">Telefone</label>
                        <input type="text" name="telefone" class="form-control" value="{{ $dado['telefone'] }}" required>
                    </div>
                    <div class="input-group col-sm-6 mb-3">
                        <label class="input-group">Endereço</label>
                        <input type="text" name="endereco" class="form-control" value="{{ $dado['endereco'] }}" required>
                    </div>
                </div>
                <div class="row">
                    <div class="input-group col-sm-3 mb-3">
                        <label class="input-group">Sala</label>
                        <select name="salaId" class="form-control">
                            @foreach($salas as $sala)
                                <option value={{$sala->id}}> {{$sala->descricao}} </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary offset-11">Salvar</button>
            </div>
        </div>
    </form>

@stop
