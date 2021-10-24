<?php

namespace App\Http\Controllers;

use App\Models\Tasks;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Tasks::all();

        return response()->json(["tasks" => $tasks], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'task_categories_id' => 'required',
        ]);

        $task = Tasks::create([
            'title' => $request->title,
            'task_categories_id' => $request->task_categories_id,
        ]);

        return response()->json(["task" => $task], 200);
    }

    public function showByCategorie(Request $request)
    {
        $tasks = Tasks::where('task_categories_id', $request->id)->get();

        if ($tasks) {
            return response()->json(["tasks" => $tasks], 200);
        } else {
            return response()->json(["message" => "tasks not found", "code" => "TASKS_BY_CATEGORIE_SHOW_NOT_FOUND"], 404);
        }
    }

    public function show(Request $request)
    {
        $tasks = Tasks::find($request->id);


        if ($tasks) {
            return response()->json(["tasks" => $tasks], 200);
        } else {
            return response()->json(["message" => "task not found", "code" => "TASKS_SHOW_NOT_FOUND"], 404);
        }
    }

    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $task = Tasks::find($request->id);

        if ($task) {
            $task->update([
                'title' => $request->title,
            ]);

            return response()->json(["message" => "task updated", "categorie" => $task], 200);
        } else {
            return response()->json(["message" => "task not found", "code" => "TASKS_UPDATE_NOT_FOUND"], 404);
        }
    }

    public function destroy(Request $request)
    {

        $task = Tasks::find($request->id);

        if ($task) {
            $task->delete();
            return response()->json(["message" => "task deleted", "task" => $task], 200);
        } else {
            return response()->json(["message" => "task not found", "code" => "TASKS_DELETE_NOT_FOUND"], 404);
        }
    }
}
