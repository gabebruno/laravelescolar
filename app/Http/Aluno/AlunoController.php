<?php

namespace App\Http\Aluno;

use App\Http\Controllers\Controller;
use App\Http\Controllers\NotaController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    protected $userService;
    protected $notaService;
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
        $this->userService = (new UserController);
        $this->notaService = (new NotaController);
    }

    public function index()
    {
        $dadosPessoais = $this->userService->show();
        $notas = $this->notaService->show();
    }

    public function notas()
    {

    }
}
