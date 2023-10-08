<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->words(3, true),
            'sku' => fake()->slug(3),
            'price' => fake()->numberBetween(0, 10000),
            'short_description' => fake()->paragraph(),
            'description' => fake()->realTextBetween(500, 1000),
            'discount' => fake()->numberBetween(10, 50),
        ];
    }
}
