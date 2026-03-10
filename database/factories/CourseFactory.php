<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\RoboticsKit;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'cover' => $this->faker->imageUrl(),
            'content' => $this->faker->paragraph(5),
            'robotics_kit_id' => RoboticsKit::inRandomOrder()->first()->id,
        ];
    }
}
