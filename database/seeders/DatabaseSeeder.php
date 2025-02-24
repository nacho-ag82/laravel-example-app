<?php

namespace Database\Seeders;

use App\Models\User;
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\TaskSeeder;
use   App\Models\Task;
use App\Models\Titulo;
use App\Models\Torneo;
use App\Models\Tenista;
use Database\Seeders\TituloSeeder; // Ensure this class exists in the specified namespace
use Database\Seeders\TorneoSeeder;
use Database\Seeders\TenistaSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        /*User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/

        $this->call([
            TenistaSeeder::class,
            TituloSeeder::class,
            TorneoSeeder::class,
        ]);
    }
}
