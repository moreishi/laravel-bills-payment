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
            'name' => fake()->paragraph(1),
            'description' => fake()->paragraph(1),
            'price' => fake()->numberBetween(1000,9999),
            'quantity' => fake()->numberBetween(1,99),
            'taxCategory' => fake()->numberBetween(1,10),
            'imageUrl' => fake()->paragraph()
        ];
    }
}
