<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Torneo;

class TorneoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Este método se ejecuta cuando se corre el seeder.
     */
    public function run(): void
    {
        // Crea 5 registros en la tabla 'torneos' usando la fábrica de modelos.
        Torneo::factory(5)->create();
    }
}