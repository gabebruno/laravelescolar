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
        $dados = Sala::all();

        return $dados;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    public function store()
    {
        $dado = $this->request->validate([
            'descricao' => 'required',
            'ensino' => 'required',
        ]);

        Sala::create($dado);

        return 'true';
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

        return $dado;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return string
     */
    public function update($dado, $id)
    {
        $dados = Sala::find($id);

        if ($dados->update($dado))
        {
            return 'true';
        }
        else {
            return 'false';
        }
    }

    public function destroy($id)
    {
        $dados = Sala::find($id);

        if($dado->delete())
            return 'true';
        else
            return 'false';
    }

}
