<?php

namespace App\Http\Controllers;

use App\Models\TaskCategories;
use App\Models\TaskCategoriesRemark;
use App\Models\TasksSessions;
use Illuminate\Http\Request;

class TaskCategoriesController extends Controller
{

    public function index()
    {
        $categories = TaskCategories::all();

        return response()->json(["categories" => $categories], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $taskCategorie = TaskCategories::create([
            'title' => $request->title,
            'remark' => "test",
        ]);

        return response()->json(["taskCategorie" => $taskCategorie], 200);
    }

    public function show(Request $request)
    {
        $taskCategorie = TaskCategories::find($request->id);


        if ($taskCategorie) {
            return response()->json(["categorie" => $taskCategorie], 200);
        } else {
            return response()->json(["message" => "categorie not found", "code" => "CATEGORIE_SHOW_NOT_FOUND"], 404);
        }
    }

    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $taskCategorie = TaskCategories::find($request->id);

        if ($taskCategorie) {
            $taskCategorie->update([
                'title' => $request->title,
            ]);

            return response()->json(["message" => "categorie updated", "categorie" => $taskCategorie], 200);
        } else {
            return response()->json(["message" => "categorie not found", "code" => "CATEGORIE_UPDATE_NOT_FOUND"], 404);
        }
    }

    public function destroy(Request $request)
    {
        $taskCategorie = TaskCategories::find($request->id);

        if ($taskCategorie) {
            $taskCategorie->delete();
            return response()->json(["message" => "categorie deleted", "categorie" => $taskCategorie], 200);
        } else {
            return response()->json(["message" => "categorie not found", "code" => "CATEGORIE_DELETE_NOT_FOUND"], 404);
        }
    }
}
