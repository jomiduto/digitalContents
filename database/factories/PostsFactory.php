<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Posts>
 */
class PostsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence($nbWords = 6, $variableNbWords = true),
            'content' => fake()->text($maxNbChars = 200),
            'author' => fake()->name(),
            'url' => fake()->domainName(),
            'image' => fake()->imageUrl(),
            'date_publication' => now()
        ];
    }
}
