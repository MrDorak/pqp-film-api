<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class FilmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'movie_id' => fake()->randomNumber(5),
            'title' => fake()->sentence(),
            'overview' => fake()->paragraph(10),
            'poster_path' => fake()->imageUrl(),
            'release_date' => fake()->date(),
        ];
    }
}
