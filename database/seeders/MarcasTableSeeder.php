<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarcasTableSeeder extends Seeder
{
    public function run()
    {
        // Verifica si ya hay registros en la tabla
        if (DB::table('marcas')->count() > 0) {
            return;
        }

        // Inserta datos
        DB::table('marcas')->insert([
            ['nombre_marca' => 'Toyota'],
            ['nombre_marca' => 'Honda'],
            ['nombre_marca' => 'Ford'],
            ['nombre_marca' => 'Chevrolet'],
            ['nombre_marca' => 'Nissan'],
        ]);
    }
}
