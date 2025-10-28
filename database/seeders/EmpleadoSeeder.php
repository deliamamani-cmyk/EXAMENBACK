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
            'nombre' => 'Juana',
            'apellido' => 'Pérez',
            'correo' => 'juan.perez@example.com',
            'salario' => 3500.00
        ]);

        Empleado::create([
            'nombre' => 'Miriam',
            'apellido' => 'Gonzales',
            'correo' => 'miriam.gonzales@example.com',
            'salario' => 4200.50
        ]);

        Empleado::create([
            'nombre' => 'Carlos',
            'apellido' => 'Quispe',
            'correo' => 'carlos.quispe@example.com',
            'salario' => 2800.75
        ]);
    }
}