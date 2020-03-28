
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
            <th>Sala</th>
            <th>Ensino</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($alunos as $dado)
            <tr>
                <td>{{$dado['nome']}}</td>
                <td>{{$dado['email']}}</td>
                <td>{{$dado['cpf']}}</td>
                <td>{{$dado['telefone']}}</td>
                <td>{{$dado['endereco']}}</td>
                <td>{{$dado['salas']}}</td>
                <td>{{$dado['ensino']}}</td>
                <td></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
