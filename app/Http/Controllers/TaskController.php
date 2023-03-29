<?php

namespace App\Http\Controllers;

use App\Http\Resources\TaskResource;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
   
    public function index()
    {
        return TaskResource::collection(Task::with('categories')->get());
    }

  
    public function store(Request $request)
    {
        $request->validate([
            'task' => 'required',
            'categories' => 'required'
        ]);
 
        $task = Task::create(['description' => $request->task]);

        $task->categories()->attach($request->categories);
        


        return response('Task Created', 201 );
    }

    public function show(Task $task)
    {
        return TaskResource::collection(Task::with('categories')->findOrFail($task)) || response('Not found', 404);
    }

    public function destroy(Task $task)
    {
        $task->categories()->detach();
        $task->delete();

        return response('Task Deleted', 200 );
    }
}
