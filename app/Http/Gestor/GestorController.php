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
        $salas = $this->trataSalas($this->salaService->index());
        $professores = $this->trataProfessores($this->userService->listaProfessores());
        $alunos = $this->trataAlunos($this->userService->listaAlunos());

        return view('gestores.dados', [
            'alunos' => $alunos,
            'professores' => $professores,
            'salas' => $salas,
        ]);
    }


    public function trataProfessores($dados)
    {

        foreach ($dados as $dado) {
            $professores[$dado->id] = [
                'nome' => $dado->nome,
                'email' => $dado->email,
                'cpf' => $this->userService->cpf($dado->cpf),
                'telefone' => $this->userService->telefone($dado->telefone),
                'endereco' => $dado->endereco,
                'materias' => $dado->materia,
            ];
        }

        return $professores;
    }

    public function trataAlunos($dados)
    {
        foreach ($dados as $dado) {
            $alunos[$dado->id] = [
                'nome' => $dado->nome,
                'email' => $dado->email,
                'cpf' => $this->userService->cpf($dado->cpf),
                'telefone' => $this->userService->telefone($dado->telefone),
                'endereco' => $dado->endereco,
                'salas' => $dado->salas->last()->descricao,
                'ensino' => $dado->salas->last()->ensino,
            ];
        }

        return $alunos;
    }

    public function trataSalas($dados)
    {
//        dd($dados);
        foreach ($dados as $dado) {
            $salas[$dado->id] = [
                'nome' => $dado->nome,
                'email' => $dado->email,
                'cpf' => $this->userService->cpf($dado->cpf),
                'telefone' => $this->userService->telefone($dado->telefone),
                'endereco' => $dado->endereco,
                'sala' => $dado['sala'],
            ];
        }

        return $salas;
    }
}
