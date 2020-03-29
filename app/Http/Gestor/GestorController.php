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
        $dados = $this->userService->index();

        return view('gestores.index', [
            'dados' => $dados
        ]);
    }




    //Funções para CRUD de SALAS
    public function indexSala()
    {
        $salas = $this->salaService->index();
        $professores = $this->trataProfessores($this->userService->listaProfessores());
        $alunos = $this->trataAlunos($this->userService->listaAlunos());

        return view('gestores.salas', [
            'salas' => $salas,
        ]);
    }

    public function editSala($id)
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
            return redirect()->route('gestores.salas');
        }
        else
        {
            $error = 'Não foi possível atualizar os dados, consulte o administrador do sistema.';
            return redirect()->route('sala.edit')->with($error);
        }
    }

    public function createSala()
    {
        return view('gestores.novasala');
    }

    public function storeSala()
    {
        $dado = $this->request->validate([
            'descricao' => 'required',
            'ensino' => 'required',
        ]);

        if($this->salaService->store($dado))
            return redirect()->route('gestores.salas');
    }


    public function destroySala($id)
    {
        if ($this->salaService->destroy($id))
            return view('gestores.salas');
    }





    //Funções para Professores
    public function indexProfessores()
    {
        $salas = $this->salaService->index();
        $professores = $this->trataProfessores($this->userService->listaProfessores());
        $alunos = $this->trataAlunos($this->userService->listaAlunos());

        return view('gestores.professores', [
            'professores' => $professores,
        ]);
    }

    public function editProfessor($id)
    {
        $dado = $this->userService->show($id);

        return view('gestores.editaprofessor', ['dado' => $dado]);
    }

    public function updateProfessor($id)
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

    public function createProfessor()
    {

        return view('gestores.novoprofessor');
    }

    public function storeProfessor()
    {
        $dado = $this->request->validate([
            'nome' => 'required',
            'email' => 'required',
            'cpf' => 'required',
            'telefone' => 'required',
            'endereco' => 'required',
            'password' => 'nullable',
            'tipo_id' => 'required'
        ]);

        $this->userService->store($dado);

        return view('gestores.novoaluno');
    }

    public function destroyProfessor()
    {
        return view('gestores.editausuario');
    }



    //Funções para Alunos

    public function indexAlunos()
    {
        $alunos = $this->trataAlunos($this->userService->listaAlunos());

        return view('gestores.alunos', [
            'alunos' => $alunos,
        ]);
    }

    public function editAluno($id)
    {
        $dado = $this->userService->show($id);

        return view('gestores.editaaluno', ['dado' => $dado]);
    }

    public function updateAluno($id)
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

    public function createAluno()
    {

        return view('gestores.novoaluno');
    }

    public function storeAluno()
    {
        $dado = $this->request->validate([
            'nome' => 'required',
            'email' => 'required',
            'cpf' => 'required',
            'telefone' => 'required',
            'endereco' => 'required',
            'password' => 'nullable',
            'tipo_id' => 'required'
        ]);

        $this->userService->store($dado);

        return view('gestores.novoaluno');
    }

    public function destroyAluno()
    {
        return view('gestores.editausuario');
    }



   //Tratamentos de dados

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
                'materias' => $dado->materia ?? '',
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
                'salas' => $dado->salas->last()->descricao ?? '',
                'ensino' => $dado->salas->last()->ensino ?? '',
            ];
        }

        return $alunos;
    }

    // Funções para Matéria

    public function indexMateria()
    {
        $alunos = $this->trataAlunos($this->userService->listaAlunos());

        return view('gestores.alunos', [
            'alunos' => $alunos,
        ]);
    }

    public function editMateria($id)
    {
        $dado = $this->userService->show($id);

        return view('gestores.editaaluno', ['dado' => $dado]);
    }

    public function updateMateria($id)
    {
        $dado = $this->request->validate([
            'nome' => 'required',
            'email' => 'required',
            'cpf' => 'required',
            'telefone' => 'required',
            'endereco' => 'required',
        ]);

        if($this->userService->update($id, $dado))
            return redirect()->route('gestores.materias');
        else
        {
            $error = 'Não foi possível atualizar os dados, consulte o administrador do sistema.';
            return redirect()->route('sala.edit')->with($error);
        }

    }

    public function createMateria()
    {

        return view('gestores.novamateria');
    }

    public function storeMateria()
    {
        $dado = $this->request->validate([
            'nome' => 'required',
            'email' => 'required',
            'cpf' => 'required',
            'telefone' => 'required',
            'endereco' => 'required',
            'password' => 'nullable',
            'tipo_id' => 'required'
        ]);

        $this->userService->store($dado);

        return view('gestores.novoaluno');
    }

    public function destroyMateria()
    {
        return view('gestores.editausuario');
    }
}
