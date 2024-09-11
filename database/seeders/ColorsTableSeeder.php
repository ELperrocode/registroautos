<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorsTableSeeder extends Seeder
{
    public function run()
    {
        // Verifica si ya hay registros en la tabla
        if (DB::table('colors')->count() > 0) {
            return;
        }

        // Inserta datos
        DB::table('colors')->insert([
            ['nombre_color' => 'Rojo'],
            ['nombre_color' => 'Azul'],
            ['nombre_color' => 'Verde'],
            ['nombre_color' => 'Amarillo'],
            ['nombre_color' => 'Negro'],
        ]);
    }
}
