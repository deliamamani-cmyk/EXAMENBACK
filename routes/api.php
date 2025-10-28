<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
/**
     * creando ruta
     */
Route::apiResource('empleados', EmpleadoController::class);