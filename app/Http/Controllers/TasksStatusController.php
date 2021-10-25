<?php

namespace App\Http\Controllers;

use App\Models\TasksStatus;
use Illuminate\Http\Request;

class TasksStatusController extends Controller
{
    public function index()
    {
        $tasks_statuses = TasksStatus::all();

        return response()->json(["tasks" => $tasks_statuses], 200);
    }

    public function store(Request $request)
    {
        $tasks_statuses = TasksStatus::create([
            'status' => "none",
            'tasks_sessions_id' => $request->tasks_sessions_id,
            'tasks_id' => $request->tasks_id,
        ]);

        return response()->json(["task" => $tasks_statuses], 200);
    }

    public function show(Request $request)
    {
        $task_status = TasksStatus::find($request->id);


        if ($task_status) {
            return response()->json(["task" => $task_status], 200);
        } else {
            return response()->json(["message" => "task not found", "code" => "TASK_STATUS_SHOW_NOT_FOUND"], 404);
        }
    }

    public function update(Request $request)
    {
        $request->validate([
            'status' => 'required',
        ]);

        $task_status = TasksStatus::find($request->id);

        if ($task_status) {
            $task_status->update([
                'status' => $request->status,
            ]);

            return response()->json(["message" => "task updated", "task" => $task_status], 200);
        } else {
            return response()->json(["message" => "task not found", "code" => "TASK_STATUS_UPDATE_NOT_FOUND"], 404);
        }
    }

    public function destroy(Request $request)
    {
        $task_status = TasksStatus::find($request->id);

        if ($task_status) {
            $task_status->delete();
            return response()->json(["message" => "task deleted", "task" => $task_status], 200);
        } else {
            return response()->json(["message" => "task not found", "code" => "TASK_STATUS_DELETE_NOT_FOUND"], 404);
        }
    }
}
