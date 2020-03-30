<?php

namespace App\Http\Controllers\Gestor;

use App\Http\Controllers\Controller;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\SalaController;
use App\Http\Controllers\SalaUserController;
use App\Http\Controllers\UserController;
use App\Models\SalaUser;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class GestorController extends Controller
{
    protected $userService;
    protected $salaService;
    protected $materiaService;
    protected $salaUserService;
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
        $this->userService = (new UserController($request));
        $this->salaService = (new SalaController($request));
        $this->salaUserService = (new SalaUserController($request));
        $this->materiaService = (new MateriaController($request));
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
        $professores = $this->trataProfessores($this->userService->listaProfessores());

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
            return redirect()->route('gestores.professores');
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
            'password' => 'required',
            'tipo_id' => 'required'
        ]);

        $this->userService->store($dado);

        return redirect()->route('gestores.professores');
    }

    public function destroyProfessor($id)
    {
        if ($this->userService->destroy($id))
            return view('gestores.professores');
    }



    //Funções para Alunos

    public function indexAlunos()
    {
        $alunos = $this->userService->listaAlunos();

        return view('gestores.alunos', [
            'alunos' => $alunos,
        ]);
    }

    public function editAluno($id)
    {
        $dado = $this->userService->show($id);
        $salas = $this->salaService->index();

        return view('gestores.editaaluno', [
            'dado' => $dado,
            'salas' => $salas,
        ]);
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

        $this->userService->update($id, $dado);

        $salaUser = $this->salaUserService->encontraPorAluno($id);

        $salaUser = [
            'id' => $salaUser->id,
            'user_id' => $id,
            'sala_id' => $this->request->input('salaId'),
            'exercicio' => Carbon::now()->year,
        ];

        $this->salaUserService->update($salaUser['id'], $salaUser);

        return redirect()->route('gestores.alunos');
    }

    public function createAluno()
    {
        $salas = $this->salaService->all();
        return view('gestores.novoaluno', [
            'salas' => $salas
        ]);
    }

    public function storeAluno()
    {
        $dado = $this->request->validate([
            'nome' => 'required',
            'email' => 'required',
            'cpf' => 'required',
            'telefone' => 'required',
            'endereco' => 'required',
            'tipo_id' => 'required',
            'password' => 'required'
        ]);

        $user = $this->userService->store($dado);

        $salaUser = [
            'user_id' => $user->id,
            'sala_id' => $this->request->input('salaId'),
            'exercicio' => Carbon::now()->year,
        ];

        $this->salaUserService->store($salaUser);

        return redirect()->route('gestores.alunos');
    }

    public function destroyAluno($id)
    {
        if ($this->userService->destroy($id))
         return view('gestores.alunos');
    }

    // Funções para Matéria

    public function indexMateria()
    {
        $materias = $this->materiaService->index();

        return view('gestores.materias', [
            'materias' => $materias,
        ]);
    }

    public function editMateria($id)
    {
        $dado = $this->materiaService->show($id);
        $professores = $this->userService->listaProfessores();

        return view('gestores.editamateria', [
            'dado' => $dado,
            'professores' => $professores
            ]);
    }

    public function updateMateria($id)
    {
        $dado = $this->request->all();
        $dado['user_id'] = $this->request->input('userId');

        $this->materiaService->update($dado, $id);

        return redirect()->route('gestores.materias');
    }

    public function createMateria()
    {
        $professores = $this->userService->listaProfessores();

        return view('gestores.novamateria', [
            'professores' => $professores
        ]);
    }

    public function storeMateria()
    {
        $dado = $this->request->all();
        $dado['user_id'] = $this->request->input('userId');

        $this->materiaService->store($dado);

        return redirect()->route('gestores.materias');
    }

    public function destroyMateria($id)
    {

        if ($this->materiaService->destroy($id))
            return redirect()->route('gestores.materias');
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
}
