<?php


namespace App\Http\Controllers;

class AlunoController
{

    public function usershow($id)
    {
        $dados = UserController::show($id);

        return view('alunos.show', [
            'dados' => $dados,
        ]);
    }

    public function notashow()
    {
        NotaController::index($idAlunoSerie, $anoExercicio);
    }
}
