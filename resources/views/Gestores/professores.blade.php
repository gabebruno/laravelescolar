
    <div class="row">
        <div class="col-sm-12">
            <h3 class="col-sm-4">Notas Bimestrais</h3>
            <hr>
        </div>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>CPF</th>
                <th>Telefone</th>
                <th>Endereço</th>
                <th>Materias</th>
                <th>Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($professores as $dado)
                <tr>
                    <td>{{$dado['nome']}}</td>
                    <td>{{$dado['email']}}</td>
                    <td>{{$dado['cpf']}}</td>
                    <td>{{$dado['telefone']}}</td>
                    <td>{{$dado['endereco']}}</td>
                    <td>
                        @foreach($dado['materias'] as $key => $materia)
                            {{$materia['descricao']}}
                            @if (count($dado['materias']) != $key+1)
                                <hr>
                            @endif
                        @endforeach
                    </td>
                    <td></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
