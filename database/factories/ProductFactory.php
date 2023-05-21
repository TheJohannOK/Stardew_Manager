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
            'name' => fake()->name(),
            'quantity' => fake()->numberBetween(0,10),
            'animal_id' => fake()->randomElement([1,2,3,null]),
            'product_id' => fake()->randomElement([1,2,3,null]),
            'type' => fake()->randomElement(['animal','artesanal']),
            'probability' => fake()->numberBetween(0,100),
            'image' => fake()->imageUrl(),
        ];
    }
}
