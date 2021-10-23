<?php

use App\Http\Controllers\TaskCategoriesController;
use App\Http\Controllers\TokenController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/auth/register', [TokenController::class, 'register']);
Route::post('/auth/login', [TokenController::class, 'login']);

Route::middleware('auth:sanctum')->post('/categories', [TaskCategoriesController::class, 'store']);

Route::get('/sessions/{id}', [TaskCategoriesController::class, 'show']);
