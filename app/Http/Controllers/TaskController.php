<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Carbon\Carbon;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;
use phpDocumentor\Reflection\DocBlock\Tags\Formatter;

class TaskController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Factory|Response|View
     */
    public function index()
    {
         $tasks = Task::paginate(10);

        return view('tasks.index', [
            'tasks' => $tasks,
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Factory|Response|View
     */
    public function agendadas()
    {
        $tasks = Task::whereNotNull('dataFim')->where('dataFim', '>', Carbon::now()->subDay())->paginate(10);
//        dd($tasks);
        return view('tasks.agendadas', [
            'tasks' => $tasks,
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Factory|Response|View
     */
    public function vencidas()
{

    $tasks = Task::whereNotNull('dataFim')->where('dataFim', '<=', Carbon::now()->subDay())->paginate(10);

    return view('tasks.vencidas', [
        'tasks' => $tasks,
    ]);
}

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create()
    {

        return view('tasks.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return RedirectResponse|Redirector
     */
    public function store()
    {
        $data = $this->request->validate([
            'titulo' => 'required',
            'corpo' => 'required',
            'categoria' => 'required',
            'dataInicio' => '',
            'dataFim' => '',
            ]);
        Task::create($data);

        return redirect()->route('tasks.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Factory|Response|View
     */
    public function show($id)
    {
        $task = Task::find($id);

        return view('tasks.show', [
            'task' => $task,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Factory|View
     */
    public function edit($id)
    {
        $task = Task::find($id);

        return view('Tasks.edit',[
            'task' => $task,
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     * @return JsonResponse|string
     */
    public function update($id)
    {
        $task = Task::find($id);

        $data = $this->request->validate([
            'titulo' => 'required',
            'corpo' => 'required',
            'categoria' => 'required',
            'dataInicio' => '',
            'dataFim' => '',
        ]);

        if ($task->update($data))
        {
            return redirect()->route('tasks.index');
        }
        else{
            return 'false';
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return JsonResponse|string
     * @throws Exception
     */
    public function destroy($id)
    {
        $task = Task::find($id);

        if ($task->delete())
        {
            return response()->json(['success'=>true,'url'=> route('tasks.index')]);
        }
        else{
            return 'false';
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @return View
     */
    public function emConstrucao()
    {
        return view('emConstrucao');
    }


}
