<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Horario;
use Illuminate\Support\Facades\Auth;

class HorarioController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index($dados)
    {
        return view('horario.index', [
            'dados' => $dados,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('horario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store()
    {
        $dado = $this->request->validate([
            'user_id' => 'required',
            'sala_id' => 'required',
            'exercicio' => 'required',
        ]);

        Horario::create($dado);

        return redirect()->route('horario.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $dados = Horario::with(['sala', 'materia', 'user'])->get();

        $horarios = [];

        foreach ($dados as $key => $dado) {
            if ($dado->user->id != Auth::id()) {
                $dado = [];
            } else {
                $horarios[$dado->diasemana][$key] = [
                    'horaInicio' => $dado->horainicio,
                    'horaFim' => $dado->horafim,
                    'sala' => $dado->sala->descricao,
                    'materia' => $dado->materia->descricao
                ];
            }
        }

        return view('professores.horario', [
            'dados' => $horarios,
            'id' => Auth::id(),
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $dado = Horario::find($id);

        return view('horario.edit',[
            'dado' => $dado,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return string
     */
    public function update($id)
    {
        $dado = Horario::find($id);

        $dado = $this->request->validate([
            'user_id' => 'required',
            'sala_id' => 'required',
            'exercicio' => 'required',
        ]);

        if ($task->update($dado))
        {
            return redirect()->route('horario.index');
        }
        else{
            return 'false';
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return string
     */
    public function destroy($id)
    {
        $dado = Horario::find($id);

        if ($dado->delete())
        {
            return response()->json(['success'=>true,'url'=> route('horario.index')]);
        }
        else{
            return 'false';
        }
    }
}
