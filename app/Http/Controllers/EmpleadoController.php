<?php

namespace App\Http\Controllers;

use App\Models\Empleado; // ✅ Importa el modelo
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function index()
    {
        // ⚠️ Aumenta el tiempo de ejecución solo para esta función
        set_time_limit(300); // 5 minutos

        $empleados = Empleado::all(); // ✅ Usa el modelo

        return response()->json($empleados);
    }

    public function store(Request $request)
    {
        set_time_limit(300);

        $empleado = Empleado::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'correo' => $request->correo,
            'salario' => $request->salario,
            'empleado_id' => $request->empleado_id
        ]);

        return response()->json($empleado, 201);
    }
}