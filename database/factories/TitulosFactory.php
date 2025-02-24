<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory as EloquentFactory;
use App\Models\Titulos;
use App\Models\Tenista;
use App\Models\Torneo;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Titulos>
 */
class TitulosFactory extends EloquentFactory
{
    protected $model = Titulos::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Define the default state for the Titulos model
        return [
            // Generate a random year between 1500 and 2025
            'anno' => $this->faker->numberBetween(1500, 2025),
            // Create a new Tenista model instance using its factory
            'tenista_id' => Tenista::factory(),
            // Create a new Torneo model instance using its factory
            'torneo_id' => Torneo::factory(),
        ];
    }
}