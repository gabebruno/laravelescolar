@extends('home')

@section('frame1')
    <div class="row">
   <div class="form-group col-sm-12">
       <a href="{{ route('sala.create') }}" class="btn btn-sm btn-info col-sm-2">NOVA SALA</a>
   </div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th class="col-sm-1">ID</th>
            <th>Turma</th>
            <th>Ensino</th>
            <th class="col-sm-2">Ações</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($salas as $dado)
                <tr>
                    <td>{{$dado['id']}}</td>
                    <td>{{$dado['descricao']}}</td>
                    <td>{{$dado['ensino']}}</td>
                    <td class="col-sm-2">
                        <a href="#" onclick="if(confirm('Deseja excluir?')) {deleteSala({{$dado['id']}})}" class="btn btn-sm btn-danger">Excluir</a>
                        <a href="{{ route('sala.edit', $dado['id']) }}" class="btn btn-sm btn-warning">Alterar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {!! $salas->onEachSide(1)->links() !!}
</div>

@stop
