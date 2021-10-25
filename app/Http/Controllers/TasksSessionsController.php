<?php

namespace App\Http\Controllers;

use App\Models\TasksSessions;
use Illuminate\Http\Request;

class TasksSessionsController extends Controller
{
    public function index()
    {
        $sessions = TasksSessions::all();

        return response()->json(["sessions" => $sessions], 200);
    }

    public function store()
    {
        $current_session = TasksSessions::where('currentSession', 1)->get();

        if ($current_session) {
            $current_session->delete();
        }

        $new_session = TasksSessions::create([
            'currentSession' => 1,
        ]);

        return response()->json(["session" => $new_session], 200);
    }

    public function show(Request $request)
    {
        $session = TasksSessions::find($request->id);


        if ($session) {
            return response()->json(["session" => $session], 200);
        } else {
            return response()->json(["message" => "session not found", "code" => "SESSION_SHOW_NOT_FOUND"], 404);
        }
    }

    public function update(Request $request)
    {
        $request->validate([
            'currentSession' => 'required',
        ]);

        $session = TasksSessions::find($request->id);

        if ($session) {
            $session->update([
                'currentSession' => $request->title,
            ]);

            return response()->json(["message" => "session updated", "session" => $session], 200);
        } else {
            return response()->json(["message" => "session not found", "code" => "SESSION_UPDATE_NOT_FOUND"], 404);
        }
    }

    public function destroy(Request $request)
    {

        $session = TasksSessions::find($request->id);

        if ($session) {
            $session->delete();
            return response()->json(["message" => "session deleted", "session" => $session], 200);
        } else {
            return response()->json(["message" => "session not found", "code" => "SESSION_DELETE_NOT_FOUND"], 404);
        }
    }
}
