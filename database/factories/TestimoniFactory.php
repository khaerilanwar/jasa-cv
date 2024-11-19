<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Testimoni>
 */
class TestimoniFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customer_name' => $this->faker->name(),
            'rating' => fake()->numberBetween(3, 5),
            'comment' => fake()->sentence(fake()->numberBetween(5, 10)),
            // 'code_review_id' => fake()->numberBetween(1, 57)
        ];
    }
}
