@extends('home')

@section('frame1')

    <form action="{{ route('aluno.store') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}

        @if($error ?? '')
            <div class="badge badge-warning col-sm-12">
                <h2 style="color:black">{{$error ?? ''}}</h2>
            </div>
        @endif

        <input type="hidden" id="tipo_id" name="tipo_id" value=1>
        <input type="hidden" id="password" name="password" value={{bcrypt(123456)}}>

        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Novo Aluno</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="input-group col-sm-6 mb-3">
                        <label class="input-group">Nome</label>
                        <input type="text" name="nome" class="form-control" placeholder="Nome" value="{{ old('nome') }}" required>
                    </div>
                    <div class="input-group col-sm-6 mb-3">
                        <label class="input-group">Email</label>
                        <input type="text" name="email" class="form-control" placeholder="email@email.com" value="{{ old('email') }}" required>
                    </div>
                </div>
                <div class="row">
                    <div class="input-group col-sm-3 mb-3">
                        <label class="input-group">CPF</label>
                        <input type="text" name="cpf" class="form-control" placeholder="00022244477" value="{{ old('cpf') }}" required>
                    </div>
                    <div class="input-group col-sm-3 mb-3">
                        <label class="input-group">Telefone</label>
                        <input type="text" name="telefone" class="form-control" placeholder="67999991111" value="{{ old('telefone') }}" required>
                    </div>
                    <div class="input-group col-sm-6 mb-3">
                        <label class="input-group">Endereço</label>
                        <input type="text" name="endereco" class="form-control" placeholder="Endereço completo" value="{{ old('endereco') }}" required>
                    </div>

                </div>
                <button type="submit" class="btn btn-primary offset-11">Salvar</button>
                <p class="badge badge-warning">A senha incial para qualquer cadastro é 123456</p>
            </div>
        </div>

    </form>

@stop
