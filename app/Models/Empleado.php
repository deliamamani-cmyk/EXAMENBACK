<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Empleado extends Model
{
    use HasFactory;

    // Especifica la tabla si no sigue la convención (opcional)
    //protected $table = 'empleados';

    // Define los campos que se pueden asignar masivamente
    protected $fillable = [
        'nombre',
        'apellido',
        'correo',
        'salario'
    ];
}