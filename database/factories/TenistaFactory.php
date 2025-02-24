<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Tenista;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tenista>
 */
class TenistaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tenista::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Return an array with default values for a Tenista model
        return [
            // Generate a random first name
            'nombre' => $this->faker->firstName,
            // Generate a random last name
            'apellidos' => $this->faker->lastName,
            // Generate a random height between 160 and 210 cm
            'altura' => $this->faker->numberBetween(140, 230),
            // Randomly select either 'Diestro' (right-handed) or 'Zurdo' (left-handed)
            'mano' => $this->faker->randomElement(['Diestro', 'Zurdo']),
            // Generate a random birth year between 1950 and 2005
            'anno_nacimiento' => $this->faker->numberBetween(1920, 2025),
        ];
    }
}