<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Titulos;

class TitulosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * This method will be called when the db:seed Artisan command is executed.
     */
    public function run(): void
    {
        // Create 60 instances of the Titulos model using the factory and save them to the database
        Titulos::factory(60)->create();
    }
}