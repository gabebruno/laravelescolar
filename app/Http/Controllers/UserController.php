<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class UserController extends Controller
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
        $id = Auth::id();

        $dados = User::where('id', '=', $id)->first();
        $dados->cpf = $this->cpf($dados->cpf);
        $dados->telefone = $this->telefone($dados->telefone);

        switch ($dados->tipo_id) {

            case 1:
                return view('alunos.dados', [
                    'dados' => $dados,
                    'anoAtual' => Carbon::now()->year,
                ]);
                break;
            case 2:
                return view('professores.dados', [
                    'dados' => $dados,
                    'anoAtual' => Carbon::now()->year,
                ]);
                break;
            case 3:
                return view('gestores.index', [
                    'dados' => $dados
                ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store($dado)
    {
        return User::create($dado);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $dados = User::find($id);

        return $dados;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $dado = User::find($id);

        return view('users.edit',[
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
    public function update($id, $usuario)
    {
        $usuarios = User::find($id);


        if ($usuarios->update($usuario))
        {
            return 'true';
        }
        else{
            return 'false';
        }
    }

    public function destroy($id)
    {
        $usuario = User::find($id);

        if($usuario->delete())
            return 'true';
        else{
            return 'false';
        }
    }

    function cpf($cpf) {

        if (! $cpf) {
            return '';
        }
        if (strlen($cpf) == 11) {
            return substr($cpf, 0, 3) . '.' . substr($cpf, 3, 3) . '.' . substr($cpf, 6, 3) . '-' . substr($cpf, 9);
        }
        return $cpf;

    }

    function telefone($telefone) {

        if (! $telefone) {
            return '';
        }
        if (strlen($telefone) == 9) {
            return substr($telefone, 0, 5) . '-' . substr($telefone, 3, 4);
        }
        else if (strlen($telefone) == 11)
        {
            return '(' . substr($telefone, 0, 2) . ') ' . substr($telefone, 2, 5) . '-' . substr($telefone, 7, 4);
        }
        return $telefone;
    }

    public function listaAlunos()
    {
            $dados = User::with('tipousuario', 'salauser', 'salas')->where('tipo_id', '=', 1)->get();

            return $dados;
    }

    public function listaProfessores()
    {
            $dados = User::where('tipo_id', '=', 2)->get();

            return $dados;
    }
}
