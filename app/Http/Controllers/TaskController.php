<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Task;

class TaskController extends Controller
{
    public function all()
    {
        $tasks = Task::all();
        return view('tasksDB', compact('tasks'));
    }

    public function add(Request $request)
    {
        $task = new Task;
        $task->name = $request->name;
        $task->save();
        return redirect()->back();
    }

    public function edit($id, Request $request)
    {
        $task = Task::find($id);
        $task->name = $request->name;
        $task->save();
        return redirect()->back();
    }

    public function delete($id)
    {
        $task = new Task;
        $task->destroy($id);
        return redirect()->back();
    }
}
