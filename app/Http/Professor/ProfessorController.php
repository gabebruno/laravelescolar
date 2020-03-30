<?php

namespace App\Http\Professor;

use App\Http\Controllers\Controller;
use App\Http\Controllers\SalaUserController;
use App\Http\Controllers\NotaController;
use App\Http\Controllers\SalaController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    protected $userService;
    protected $salaService;
    protected $notaService;
    protected $alunoSerieService;
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
        $this->userService = (new UserController);
        $this->salaService = (new SalaController);
        $this->notaService = (new NotaController);
        $this->alunoSerieService = (new SalaUserController);
    }

    public function index()
    {
        $dados = $this->userService->index();

        return view('professores.index', [
            'dados' => $dados
        ]);
    }
}
