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

        return view('gestores.index', [
            'alunos' => $alunos,
            'professores' => $professores,
            'salas' => $salas,
        ]);
    }

    public function trataProfessores($dados)
    {

        foreach ($dados as $dado) {
            $professores[$dado->id] = [
                'id' => $dado->id,
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
                'id' => $dado->id,
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

        foreach ($dados as $key => $dado) {
                $salas[$dado->id] = [
                    'id' => $dado->id,
                    'descricao' => $dado->descricao,
                    'ensino' => $dado->ensino,
                ];
        }

        return $salas;
    }

    public function editarSala($id)
    {
        $dado = $this->salaService->edit($id);
        return view('gestores.editasala', ['dado' => $dado]);

    }

    public function updateSala($id)
    {
        $dado = $this->request->validate([
            'descricao' => 'required',
            'ensino' => 'required',
        ]);

        if ($this->salaService->update($dado, $id) == 'true')
        {
            return redirect()->route('gestores.index');
        }
        else
        {
            return view('gestores.editasala', [
                'error' => 'Não foi possível atualizar os dados, consulte o administrador do sistema.'
            ]);
        }
    }

    public function novaSala()
    {
        return view('gestores.novasala');
    }

    public function excluiSala($id)
    {
        if ($this->salaService->destroy($id))
            return view('gestores.salas');
    }

    public function editaUsuario()
    {
        return view('gestores.editausuario');
    }

    public function novoUsuario()
    {
        return view('gestores.novousuario');
    }

    public function excluiUsuario()
    {
        return view('gestores.editausuario');
    }

}
