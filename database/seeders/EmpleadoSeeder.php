<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use App\Models\Empleado;

class EmpleadoSeeder extends Seeder
{
    /**
     * Creando seeder empleado
     */
    public function run(): void
    {
        /**
     * creando 3 ejemplos de seeder
     */
        Empleado::create([
            'nombre' => 'Juan',
            'apellido' => 'Pérez',
            'correo' => 'juan.perez@example.com',
            'salario' => 3500.00
        ]);

        Empleado::create([
            'nombre' => 'María',
            'apellido' => 'Gonzales',
            'correo' => 'maria.gonzales@example.com',
            'salario' => 4200.50
        ]);

        Empleado::create([
            'nombre' => 'Carlos',
            'apellido' => 'López',
            'correo' => 'carlos.lopez@example.com',
            'salario' => 2800.75
        ]);
    }
}

