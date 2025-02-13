<?php

namespace App\Http\Controllers;
use App\Models\Task;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        $tasks = Task::paginate(perPage:4);
        return view('tasks.index',['tasks'=>$tasks]);
    }
    public function create(){
        return view('tasks.create',
        ['tasks'=>new Task(),
        'sumbitButtonText'=>'Crear tarea',
        'actionUrl'=>route('tasks.store')]);
    }
    
}
