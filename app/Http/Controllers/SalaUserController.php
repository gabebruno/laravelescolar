<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SalaUser;
use Carbon\Carbon;

class SalaUserController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
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

        SalaUser::create($dado);

        return redirect()->route('alunoseries.index');
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
        $dado = SalaUser::find($id);

        $dado = $this->request->validate([
            'user_id' => 'required',
            'sala_id' => 'required',
            'exercicio' => 'required',
        ]);

        if ($task->update($dado))
        {
            return redirect()->route('alunoseries.index');
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
        $dado = SalaUser::find($id);

        if ($dado->delete())
        {
            return response()->json(['success'=>true,'url'=> route('alunoseries.index')]);
        }
        else{
            return 'false';
        }
    }
}
