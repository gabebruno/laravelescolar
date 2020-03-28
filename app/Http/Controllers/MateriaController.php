<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materia;

class MateriaController extends Controller
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
    public function index()
    {
        $dados = Materia::with('sala', 'user', 'horario')->get();

        foreach ($dados as $dado) {
            $materias[$dado->id] = [
                'descricao' => $dado->descricao,
                'professor' => $dado->user->nome,
                'salas' => $dado->sala,
                'horarios' => $dado->horario,

            ];
        }

        return $materias;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {

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

        Materia::create($dado);

        return 'true';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
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
        $dado = Materia::find($id);

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
}
