<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\EmpleadoController;

//Route::apiResource('categorias', CategoriaController::class);
Route::apiResource('empleados', EmpleadoController::class);

