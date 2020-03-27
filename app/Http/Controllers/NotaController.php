<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nota;

class NotaController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Display a listing of the resource.
     *
     * @param $idAlunoSerie
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index($salaUserId)
    {
        $dados = Nota::where('salauser_id', '=', $salaUserId)->get();
        foreach ($dados as $dado)
        {
            $dado->media = ($dado->nota1bi + $dado->nota2bi + $dado->nota3bi + $dado->nota4bi) / 4;
        }

        return view('alunos.notas', [
            'dados' => $dados,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id, $exercicio = null)
    {
        $dado = Nota::find($id);

        return view('nota.show', [
            'dado' => $dado,
        ]);
    }

}
