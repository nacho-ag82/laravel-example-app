<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;

use App\Http\Requests\TaskRequest;
use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class TaskController extends Controller
{
    //
    /* public function index(){
        return view('tasks.index');

    }*/
    public function index()
    {
        //pasamos variables a las vistas con notación de array
        $tasks = Task::paginate(perPage: 5);
        return view('tasks.index', [
            'tasks' => $tasks,
        ]);
    }

    public function create()
    {
        return view('tasks.create', [
            'task' => new Task(), //Creamoso un objetotipo task que es como si accediésemos a nuestra tabla de la base de datos
            'method' => 'POST',
            'actionUrl' => route('tasks.store'),
            'submitButtonText' => 'Crear tarea'
            
        ]);
    }

    public function store(TaskRequest $request): RedirectResponse
    {
        //dd(1);
        //dd($request->validated());//Una validación para poder guardar en la base de datos. dd() es die dump que sirve para pintar por pantalla
        Task::create($request->validated());
        //$task=Task::lastest(column:'id')->paginate(perPage: 5);
        return redirect()->route('tasks.index');
       
        
    }
    public function edit(Task $task): View
    {
        return view('tasks.edit', [
            'task' => $task,
            'method' => 'PUT',
            'actionUrl' => route('tasks.update', $task),
            'sumbitButtonText' => 'Actualizar tarea'
            
        ]);
       
    }
    public function update(TaskRequest $request, Task $task):RedirectResponse
    {
        $task->update($request->validated());
       return redirect()->route('tasks.index');
    }
}
