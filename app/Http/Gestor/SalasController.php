<?php

namespace App\Http\Controllers\Gestor;

use App\Http\Controllers\Controller as Controller;
use App\Http\Controllers\SalaController;
use Illuminate\Http\Request;

class SalasController extends Controller
{
    protected $salaService;
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
        $this->salaService = (new SalaController($request));
    }

    //Funções para CRUD de SALAS
    public function index()
    {
        $salas = $this->salaService->index();

        return view('gestores.salas', [
            'salas' => $salas,
        ]);
    }

    public function edit($id)
    {
        $dado = $this->salaService->edit($id);
        return view('gestores.editasala', ['dado' => $dado]);

    }

    public function update($id)
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

    public function create()
    {
        return view('gestores.novasala');
    }

    public function store()
    {
        $dado = $this->request->validate([
            'descricao' => 'required',
            'ensino' => 'required',
        ]);

        if($this->salaService->store($dado))
            return redirect()->route('gestores.salas');
    }


    public function destroy($id)
    {
        if ($this->salaService->destroy($id))
            return view('gestores.salas');
    }

}
