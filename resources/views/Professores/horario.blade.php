@extends('home')

@section('frame1')
    <div class="row">
        <div class="col-sm-12">
            <h3 class="col-sm-4">Horários de Aula</h3>
            <hr>
        </div>
        <table class="table">
            @if($dados != null)
                @foreach($dados as $key => $dado)
                    <thead>
                    <th>{{$key}}</th>
                    </thead>
                    <tbody>
                    <td>
                        <table class="table table-striped">
                            <thead>
                            <th>Série</th>
                            <th>Matéria</th>
                            <th>Inicio</th>
                            <th>Fim</th>
                            </thead>
                            @foreach($dado as $chave => $value)
                                <tbody>
                                    <td>{{$value['sala']}}</td>
                                    <td>{{$value['materia']}}</td>
                                    <td>{{$value['horaInicio']}}</td>
                                    <td>{{$value['horaFim']}}</td>
                                </tbody>
                            @endforeach
                        </table>

                    </td>
                    </tbody>
                @endforeach
            @else
                <h5>Não foi possível encontrar horários cadastrados!</h5>
            @endif
        </table>

    </div>

@stop
