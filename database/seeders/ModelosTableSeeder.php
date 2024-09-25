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
            ['nombre_modelo' => 'Accord', 'marca_id' => 2],  // Honda
            ['nombre_modelo' => 'Mustang', 'marca_id' => 3], // Ford
            ['nombre_modelo' => 'Impala', 'marca_id' => 4],  // Chevrolet
            ['nombre_modelo' => 'Sentra', 'marca_id' => 5],  // Nissan
            ['nombre_modelo' => 'Prius', 'marca_id' => 1],   // Toyota
            ['nombre_modelo' => 'Rav4', 'marca_id' => 1],    // Toyota
            ['nombre_modelo' => 'CR-V', 'marca_id' => 2],    // Honda
            ['nombre_modelo' => 'Explorer', 'marca_id' => 3],// Ford
            ['nombre_modelo' => 'Tahoe', 'marca_id' => 4],   // Chevrolet
            ['nombre_modelo' => 'Pathfinder', 'marca_id' => 5], // Nissan
            ['nombre_modelo' => 'Avalon', 'marca_id' => 1],  // Toyota
            ['nombre_modelo' => 'Pilot', 'marca_id' => 2],   // Honda
            ['nombre_modelo' => 'Fusion', 'marca_id' => 3],  // Ford
            ['nombre_modelo' => 'Malibu', 'marca_id' => 4],  // Chevrolet
            ['nombre_modelo' => 'Maxima', 'marca_id' => 5],  // Nissan
            ['nombre_modelo' => 'Yaris', 'marca_id' => 1],   // Toyota
            ['nombre_modelo' => 'Fit', 'marca_id' => 2],     // Honda
            ['nombre_modelo' => 'Edge', 'marca_id' => 3],    // Ford
            ['nombre_modelo' => 'Blazer', 'marca_id' => 4],  // Chevrolet
            ['nombre_modelo' => 'Murano', 'marca_id' => 5],  // Nissan
        ]);
    }
}
