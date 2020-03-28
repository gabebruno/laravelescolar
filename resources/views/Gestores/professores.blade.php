
    <div class="row">
        <div class="col-sm-12">
            <h3 class="col-sm-4">Notas Bimestrais</h3>
            <hr>
        </div>
        <table class="table table-striped">
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
            @foreach ($professores as $dado)
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    @if(6 > 6)
                        <td><a class="badge bg-blue"></a></td>
                    @else
                        <td><a class="badge bg-red"></a></td>
                    @endif

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
