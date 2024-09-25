<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {   
        User::factory()->create([
            'name' => 'test',
            'email' => 'test@example.com',
            'password' => Hash::make('123'),
        ]);
        // User::factory(10)->create();
        $this->call([
            ColorsTableSeeder::class,
            Tipo_VehiculosTableSeeder::class,
            MarcasTableSeeder::class,
            ModelosTableSeeder::class,
        ]);

        
    }
}
