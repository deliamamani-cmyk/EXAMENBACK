<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
   
    // Nombre correcto de la tabla
    protected $table = "empleados";

    // Campos que se pueden llenar masivamente
    protected $fillable = [
        "nombre",
        "apellido",
        "correo",
        "salario"
    ];
}

