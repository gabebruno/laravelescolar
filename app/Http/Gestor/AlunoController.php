<?php

namespace App\Http\Controllers\Gestor;

use App\Http\Controllers\Controller as Controller;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    protected $userService;
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
        $this->userService = (new UserController($request));
    }

    //Funções para CRUD de Alunos

    public function index()
    {
        $alunos = $this->trataDados($this->userService->listaAlunos());

        return view('gestores.alunos', [
            'alunos' => $alunos,
        ]);
    }

    public function edit($id)
    {
        $dado = $this->userService->show($id);

        return view('gestores.editaaluno', ['dado' => $dado]);
    }

    public function update($id)
    {
        $dado = $this->request->validate([
            'nome' => 'required',
            'email' => 'required',
            'cpf' => 'required',
            'telefone' => 'required',
            'endereco' => 'required',
        ]);

        if($this->userService->update($id, $dado))
            return redirect()->route('gestores.alunos');
        else
        {
            $error = 'Não foi possível atualizar os dados, consulte o administrador do sistema.';
            return redirect()->route('sala.edit')->with($error);
        }

    }

    public function create()
    {

        return view('gestores.editaaluno');
    }

    public function store()
    {
        $dado = $this->request->validate([
            'nome' => 'required',
            'email' => 'required',
            'cpf' => 'required',
            'telefone' => 'required',
            'endereco' => 'required',
            'password' => 'nullable'
        ]);

        $this->userService->store($dado);

        return view('gestores.novoaluno');
    }

    public function destroy()
    {
        return view('gestores.editausuario');
    }

    public function trataDados($dados)
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
}
