<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModelosTableSeeder extends Seeder
{
    public function run()
    {
        // Verifica si ya hay registros en la tabla
        if (DB::table('modelos')->count() > 0) {
            return;
        }

        // Inserta datos
        DB::table('modelos')->insert([
            ['nombre_modelo' => 'Corolla', 'marca_id' => 1], // Asume que el ID 1 es Toyota
            ['nombre_modelo' => 'Civic', 'marca_id' => 2],   // Asume que el ID 2 es Honda
            ['nombre_modelo' => 'F-150', 'marca_id' => 3],   // Asume que el ID 3 es Ford
            ['nombre_modelo' => 'Camaro', 'marca_id' => 4],  // Asume que el ID 4 es Chevrolet
            ['nombre_modelo' => 'Altima', 'marca_id' => 5],  // Asume que el ID 5 es Nissan
        ]);
    }
}
