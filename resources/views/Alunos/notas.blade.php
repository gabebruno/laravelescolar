@extends('home')

@section('frame1')
    <div class="row">
        <div class="col-sm-12">
            <h3 class="col-sm-4">Notas Bimestrais</h3>
            <hr>
        </div>
        <table class="table table-striped">
            @if($dados->count() > 0)
                <thead>
                    <tr>
                        <th>Disciplina</th>
                        <th>1º Bimestre</th>
                        <th>2º Bimestre</th>
                        <th>3º Bimestre</th>
                        <th>4º Bimestre</th>
                        <th>Média Anual</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dados as $dado)
                    <tr>
                        <td>{{$dado->materia()->get()->first()->descricao}}</td>
                        <td>{{$dado->nota1bi}}</td>
                        <td>{{$dado->nota2bi}}</td>
                        <td>{{$dado->nota3bi}}</td>
                        <td>{{$dado->nota4bi}}</td>
                        @if($dado->media > 6)
                            <td><a class="badge bg-blue">{{$dado->media}}</a></td>
                        @else
                            <td><a class="badge bg-red">{{$dado->media}}</a></td>
                        @endif

                    </tr>
                    @endforeach
                </tbody>
            @else
                Você não possui notas cadastradas ainda!
            @endif
        </table>
</div>

@stop
