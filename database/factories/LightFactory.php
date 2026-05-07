<?php

namespace Database\Factories;

use App\Models\Light;
use Illuminate\Database\Eloquent\Factories\Factory;

class LightFactory extends Factory
{
    public function definition(): array
    {
        return [

            'name' => fake()->randomElement([
                'Modern Ceiling Lamp',
                'Luxury Wall Light',
                'Minimal Pendant Lamp',
                'Golden Chandelier',
                'Nordic Table Lamp',
                'Industrial Light',
                'Outdoor Lantern',
                'Classic Hanging Lamp',
                'Smart LED Lamp',
                'Decorative Spotlight',
            ]),

            'description' => fake()->sentence(),

            'price' => fake()->numberBetween(20, 500),

            'image' => fake()->unique()->randomElement([
                'lamp1.jpg',
                'lamp2.jpg',
                'lamp3.jpg',
                'lamp4.jpg',
                'lamp5.jpg',
                'lamp6.jpg',
                'lamp7.jpg',
                'lamp8.jpg',
                'lamp9.jpg',
                'lamp10.jpg',
                'lamp11.jpg',
                'lamp12.jpg',
            ]),

            'type_id' => fake()->numberBetween(1, 4),

            'is_featured' => fake()->boolean(),

        ];
    }
}