<?php


namespace App\Http\Controllers;

use App\Http\Controllers\AlunoSerieController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\NotaController;

class AlunoController
{

    public function usershow($id)
    {
        UserController::show($id);
    }
}
