    <div class="row">
        <div class="form-group col-sm-12">
            <a href="{{ route('user.create', 2) }}" class="btn btn-sm btn-info col-sm-2">NOVO PROFESSOR</a>
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
                <th class="col-2">Ações</th>
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
                    <td class="col-sm-2">
                        <a href="#" onclick="if(confirm('Deseja excluir?')) {deleteUsuario({{$dado['id']}})}" class="btn btn-sm btn-danger">Excluir</a>
                        <a href="{{ route('user.edit', $dado['id']) }}" class="btn btn-sm btn-warning">Alterar</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
