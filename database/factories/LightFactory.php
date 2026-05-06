<?php

namespace Database\Factories;

use App\Models\Light;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Light>
 */
class LightFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
    'name' => fake()->word(),
    'description' => fake()->sentence(),
    'price' => fake()->numberBetween(20, 500),
    'image' => 'lamp.jpg',
    'type_id' => fake()->numberBetween(1, 4),
    'is_featured' => fake()->boolean(),
];
    }
}
