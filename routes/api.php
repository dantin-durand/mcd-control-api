<?php

use App\Http\Controllers\TaskCategoriesController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\TokenController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// });

/**
 * Authentication routes
 */

Route::post('/auth/register', [TokenController::class, 'register']);
Route::post('/auth/login', [TokenController::class, 'login']);


/**
 * Categories routes
 */

Route::middleware('auth:sanctum')->group(function () {

    Route::get('categories', [TaskCategoriesController::class, 'index']);

    Route::get('categories/{id}', [TaskCategoriesController::class, 'show']);

    Route::get('categories/{id}/tasks', [TasksController::class, 'showByCategorie']);

    Route::middleware('role:ADMIN')->post('categories', [TaskCategoriesController::class, 'store']);

    Route::middleware('role:ADMIN')->put('categories/{id}', [TaskCategoriesController::class, 'update']);

    Route::middleware('role:ADMIN')->delete('categories/{id}', [TaskCategoriesController::class, 'destroy']);
});


/**
 * Tasks routes
 */

Route::middleware('auth:sanctum')->group(function () {

    Route::get('tasks', [TasksController::class, 'index']);

    Route::get('tasks/{id}', [TasksController::class, 'show']);

    Route::middleware('role:ADMIN')->post('tasks', [TasksController::class, 'store']);

    Route::middleware('role:ADMIN')->put('tasks/{id}', [TasksController::class, 'update']);

    Route::middleware('role:ADMIN')->delete('tasks/{id}', [TasksController::class, 'destroy']);
});

// Route::get('/sessions/{id}', [TaskCategoriesController::class, 'show']);
