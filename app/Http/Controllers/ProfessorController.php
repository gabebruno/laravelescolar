<?php


namespace App\Http\Controllers;


class ProfessorController
{
    public function usershow($id)
    {
        UserController::show($id);
    }

    public function horarioshow($id)
    {
        HorarioController::show($id);
    }

    public function notashow($id)
    {
        NotaController::show($id);
    }
}
