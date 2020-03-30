@extends('home')

@section('frame1')
    <div class="row">
   <div class="form-group col-sm-12">
       <a href="{{ route('materia.create') }}" class="btn btn-sm btn-info col-sm-2">NOVA MATÉRIA</a>
   </div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th class="col-sm-1">ID</th>
            <th>Descrição</th>
            <th>Professor</th>
            <th>Salas</th>
            <th class="col-sm-2">Ações</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($materias as $dado)
                <tr>
                    <td>{{$dado['id']}}</td>
                    <td>{{$dado['descricao']}}</td>
                    <td>
                        {{$dado->user->nome}}
                    </td>
                    <td>
                        @foreach($dado->sala as $key => $sala)
                            {{$sala['descricao']}}
                            @if ($dado->sala->count() != $key+1)
                                ||
                            @endif
                        @endforeach
                    </td>
                    <td class="col-sm-2">
                        <a href="{{ route('materia.edit', $dado['id']) }}" class="btn btn-sm btn-warning">Alterar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {!! $materias->onEachSide(1)->links() !!}
</div>

@stop
