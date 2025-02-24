<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tenista;

class TenistaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * This method will be called when the db:seed Artisan command is executed.
     */
    public function run(): void
    {
        // Create 60 instances of the Tenista model using the factory
        Tenista::factory(60)->create();
    }
}