<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfesoresController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AsignaturasController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//Profesores

Route::get('/profesores', [ProfesoresController::class, 'index']);
Route::post('/profesores', [ProfesoresController::class, 'store']);
Route::get('/profesores/{id}', [ProfesoresController::class, 'show']);
Route::put('/profesores/{id}', [ProfesoresController::class, 'update']);
Route::delete('/profesores/{id}', [ProfesoresController::class, 'destroy']);

//Users


Route::get('/users', [UsersController::class, 'index']);
Route::post('/users', [UsersController::class, 'store']);
Route::get('/users/{id}', [UsersController::class, 'show']);
Route::put('/users/{id}', [UsersController::class, 'update']);
Route::delete('/users/{id}', [UsersController::class, 'destroy']);

//Asignaturas


Route::get('/asignaturas', [AsignaturasController::class, 'index']);
Route::post('/asignaturas', [AsignaturasController::class, 'store']);
Route::get('/asignaturas/{id}', [AsignaturasController::class, 'show']);
Route::put('/asignaturas/{id}', [AsignaturasController::class, 'update']);
Route::delete('/asignaturas/{id}', [AsignaturasController::class, 'destroy']);


