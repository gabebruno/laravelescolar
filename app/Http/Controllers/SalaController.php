<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sala;

class SalaController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        $dados = Sala::with('horario', 'alunos')->get();

        return $dados;
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

        Sala::create($dado);

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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $dado = Sala::find($id);

        return 'true';
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
        $dado = Sala::find($id);

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
