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
            ['nombre_modelo' => 'Corolla', 'marca_id' => 1, 'tipo_id' => 1], // Asume que el ID 1 es Sedán
            ['nombre_modelo' => 'Civic', 'marca_id' => 2, 'tipo_id' => 1],   // Asume que el ID 1 es Sedán
            ['nombre_modelo' => 'F-150', 'marca_id' => 3, 'tipo_id' => 2],   // Asume que el ID 2 es Camioneta
            ['nombre_modelo' => 'Camaro', 'marca_id' => 4, 'tipo_id' => 3],  // Asume que el ID 3 es Deportivo
            ['nombre_modelo' => 'Altima', 'marca_id' => 5, 'tipo_id' => 1],  // Asume que el ID 1 es Sedán
            ['nombre_modelo' => 'Accord', 'marca_id' => 2, 'tipo_id' => 1],  // Sedán
            ['nombre_modelo' => 'Mustang', 'marca_id' => 3, 'tipo_id' => 3], // Deportivo
            ['nombre_modelo' => 'Impala', 'marca_id' => 4, 'tipo_id' => 1],  // Sedán
            ['nombre_modelo' => 'Sentra', 'marca_id' => 5, 'tipo_id' => 1],  // Sedán
            ['nombre_modelo' => 'Prius', 'marca_id' => 1, 'tipo_id' => 4],   // Asume que el ID 4 es Híbrido
            ['nombre_modelo' => 'Rav4', 'marca_id' => 1, 'tipo_id' => 5],    // Asume que el ID 5 es SUV
            ['nombre_modelo' => 'CR-V', 'marca_id' => 2, 'tipo_id' => 5],    // SUV
            ['nombre_modelo' => 'Explorer', 'marca_id' => 3, 'tipo_id' => 5],// SUV
            ['nombre_modelo' => 'Tahoe', 'marca_id' => 4, 'tipo_id' => 5],   // SUV
            ['nombre_modelo' => 'Pathfinder', 'marca_id' => 5, 'tipo_id' => 5], // SUV
            ['nombre_modelo' => 'Avalon', 'marca_id' => 1, 'tipo_id' => 1],  // Sedán
            ['nombre_modelo' => 'Pilot', 'marca_id' => 2, 'tipo_id' => 5],   // SUV
            ['nombre_modelo' => 'Fusion', 'marca_id' => 3, 'tipo_id' => 1],  // Sedán
            ['nombre_modelo' => 'Malibu', 'marca_id' => 4, 'tipo_id' => 1],  // Sedán
            ['nombre_modelo' => 'Maxima', 'marca_id' => 5, 'tipo_id' => 1],  // Sedán
            ['nombre_modelo' => 'Yaris', 'marca_id' => 1, 'tipo_id' => 1],   // Sedán
            ['nombre_modelo' => 'Fit', 'marca_id' => 2, 'tipo_id' => 1],     // Sedán
            ['nombre_modelo' => 'Edge', 'marca_id' => 3, 'tipo_id' => 5],    // SUV
            ['nombre_modelo' => 'Blazer', 'marca_id' => 4, 'tipo_id' => 5],  // SUV
            ['nombre_modelo' => 'Murano', 'marca_id' => 5, 'tipo_id' => 5],  // SUV
        ]);
    }
}
