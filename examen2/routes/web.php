<?php

use App\Http\Controllers\AlumnosController;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */


Route::get('/',[AlumnosController::class, 'index']);
Route::get('/alumnos/eliminar/{id}', [AlumnosController::class, 'destroy']);
Route::get('/alumnos/editar/{id}', [AlumnosController::class, 'edit']);
Route::put('/alumnos/editar/{id}', [AlumnosController::class, 'update']);
Route::get('/alumnos/crear', [AlumnosController::class, 'create']);
Route::post('/alumnos/crear',[AlumnosController::class, 'store']);
