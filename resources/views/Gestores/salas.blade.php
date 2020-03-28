
<div class="row">
    <div class="col-sm-12">
        <h3 class="col-sm-4">Notas Bimestrais</h3>
        <hr>
    </div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Turma</th>
            <th>Ensino</th>
            <th>Alunos</th>
            <th>Professores</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($salas as $dado)
            <tr>
                <td></td>
                <td></td>
                <td>
{{--                    @foreach($dado->alunos()->get() as $key => $aluno)--}}
{{--                        {{$dado->alunos()->get()}}--}}
{{--                        @if($key != $dado->alunos()->count()-1)--}}
{{--                        <hr>--}}
{{--                        @endif--}}
{{--                    @endforeach--}}
                </td>
                <td></td>
                <td></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
