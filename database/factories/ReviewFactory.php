<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
//            'product_id',
            'author' => fake()->name(),
            'email' => fake()->email(),
            'rating' => fake()->numberBetween(1, 5),
            'text' => fake()->text(),
        ];
    }
}
