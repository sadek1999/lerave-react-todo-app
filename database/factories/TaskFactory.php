<?php

namespace Database\Factories;

use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->sentence(),
            'description' => fake()->realText(),
            'due_date' => fake()->dateTimeBetween('now', '+1 year'),
            'status' => fake()->randomElement(['pending', 'in_progress', 'completed']),
            'priority' => fake()->randomElement(['low', 'medium', 'high']),
            'img_path' => fake()->imageUrl(),
            'assigned_user_id' => User::factory(),
            'created_by' => User::factory(),
            'updated_by' => User::factory(),
            'project_id' => Project::factory(), // Ensures task is linked to a project
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
