<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all()->sortBy('name');
        return view('tasks.index', compact('tasks'));
    }

    public function show($id)
    {
        $task = DB::table('tasks')->find($id);

        return view('show', compact('task'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:15 | min:3|string'
        ]);
        $task = new Task();
        $task->name = $request->name;
        $task->save();
        return redirect()->back();
    }

    public function delete($id)
    {
        Task::find($id)->delete();
        return redirect('/');
    }

    public function edit($id)
    {
        $task = Task::find($id);
        $tasks = Task::all()->sortBy('name');
        return view('tasks.edit', compact('task', 'tasks'));
    }

    public function update(Request $request, $id)
    {
        $tasks = Task::all()->sortBy('name');
        $task = Task::find($id);
        $task->name = $request->name;
        $task->save();
        return redirect('/');
    }
}
