<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Videogame>
 */
class VideogameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'genre' => $this->faker->word(),
            'release_date' => $this->faker->date(),
            'description' => $this->faker->text(),
            'rating' => $this->faker->numberBetween(0, 5),
            'price' => $this->faker->randomFloat(1, 0, 300000),
            'is_multiplayer' => $this->faker->boolean(),
            'platform' => $this->faker->randomElement(['PC', 'PlayStation', 'Xbox', 'Nintendo']),
        ];
    }
}
