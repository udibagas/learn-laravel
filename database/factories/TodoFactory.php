<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Todo>
 */
class TodoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(5),
            'description' => fake()->paragraph(),
            'due_date' => fake()->dateTimeBetween('now', '+1 month'),
            'priority' => fake()->randomElement(['low', 'medium', 'high']),
            'status' => fake()->boolean() ? 'completed' : 'pending',
        ];
    }
}
