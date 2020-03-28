<?php

namespace App\Http\Controllers\Gestor;

use App\Http\Controllers\Controller as Controller;
use App\Http\Controllers\SalaController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;

class GestorController extends Controller
{
    protected $userService;
    protected $salaService;
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
        $this->userService = (new UserController($request));
        $this->salaService = (new SalaController($request));
    }

    public function index()
    {
        $alunos = $this->userService->listaAlunos();
        $professores = $this->userService->listaProfessores();
        $salas = $this->salaService->index();

        $this->trataAlunos($alunos);
        $this->trataProfessores($alunos);

        return view('gestores.dados', [
            'alunos' => $alunos,
            'professores' => $professores,
            'salas' => $salas,
        ]);
    }

    public function trataAlunos($dados)
    {
        foreach ($dados as $dado) {
            $alunos[$dado->id] = [
                'nome' => $dado->nome,
                'email' => $dado->email,
                'cpf' => $dado->cpf,
                'telefone' => $dado->telefone,
                'endereco' => $dado->endereco,
                'salas' => $dado->salas->last()->descricao,
                'ensino' => $dado->salas->last()->ensino,
            ];
        }

        return $alunos;
    }

    public function trataProfessores($dados)
    {

        foreach ($dados as $dado) {
            $professores[$dado->id] = [
                'nome' => $dado->nome,
                'email' => $dado->email,
                'cpf' => $dado->cpf,
                'telefone' => $dado->telefone,
                'endereco' => $dado->endereco,
                'materias' => $dado->materia,
            ];
        }

        return $professores;
    }
}
