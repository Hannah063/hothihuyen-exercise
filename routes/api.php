<?php

use App\Http\Controllers\PersonController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/people', [PersonController::class, 'getInfo']);
Route::get('/posts', [PostController::class, 'getPost']);

Route::get('/students', [StudentController::class, 'getAll']);
Route::put('/students', [StudentController::class, 'update']);
Route::delete('/students', [StudentController::class, 'delete']);
