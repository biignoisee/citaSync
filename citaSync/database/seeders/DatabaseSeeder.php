<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Crear un Admin
        User::factory()->create([
            'name' => 'Omar Administrado',
            'email' => 'omareegab@gmail.com',
            'role' => 'admin',
        ]);

        // Crear un Doctor de prueba
        User::factory()->create([
            'name' => 'Dr. Lucero Aguilar',
            'email' => 'lucero@gmail.com',
            'role' => 'doctor',
        ]);
    }
}
