<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Tipo_VehiculosTableSeeder extends Seeder
{
    public function run()
    {
        // Verifica si ya hay registros en la tabla
        if (DB::table('tipo_vehiculos')->count() > 0) {
            return;
        }

        // Inserta datos
        DB::table('tipo_vehiculos')->insert([
            ['nombre_tipo' => 'Sedán'],
            ['nombre_tipo' => 'SUV'],
            ['nombre_tipo' => 'Camioneta'],
            ['nombre_tipo' => 'Coupe'],
            ['nombre_tipo' => 'Hatchback'],
        ]);
    }
}

