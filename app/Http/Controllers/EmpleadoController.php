<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;

class EmpleadoController extends Controller
{
    /**
     * Mostrar todos los empleados.
     */
    public function index()
    {
        $empleados = Empleado::all();
        return response()->json($empleados);
    }

    /**
     * Registrar un nuevo empleado.
     */
    public function store(Request $request)
    {
        $empleado = Empleado::create($request->all());
        return response()->json($empleado, 201);
    }

    /**
     * Mostrar un empleado específico.
     */
    public function show(string $id)
    {
        $empleado = Empleado::findOrFail($id);
        return response()->json($empleado);
    }

    /**
     * Actualizar un empleado existente.
     */
    public function update(Request $request, string $id)
    {
        $empleado = Empleado::findOrFail($id);
        $empleado->update($request->all());
        return response()->json($empleado);
    }

    /**
     * Eliminar un empleado.
     */
    public function destroy(string $id)
    {
        $empleado = Empleado::findOrFail($id);
        $empleado->delete();
        return response()->json(['message' => 'Empleado eliminado correctamente']);
    }
}
