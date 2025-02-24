<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Torneo>
 */
class TorneoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    // Array of possible surfaces for the tournament
    protected static $superficies = [
        'Cemento',    // Hard surface
        'Arena', // Clay surface
        'Hierba',  // Grass surface
        'Barro',    // Hard surface
        'Alvero', // Clay surface
        'Sintetica',  // Grass surface
    ];

    public function definition(): array
    {
        // Return an array with default values for the Torneo model
        return [
            'nombre' => $this->faker->word,                // Random word for the tournament name
            'ciudad' => $this->faker->city,                // Random city for the tournament location
            'superficie' => $this->faker->randomElement(self::$superficies), // Random surface type from the predefined array
        ];
    }
}