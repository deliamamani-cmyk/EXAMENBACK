<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
   
    //Creando el modelo empleado
    protected $table = "empleados";

    // Campos que se pueden llenar masivamente
    protected $fillable = [
        "nombre",
        "apellido",
        "correo",
        "salario"
    ];
}

