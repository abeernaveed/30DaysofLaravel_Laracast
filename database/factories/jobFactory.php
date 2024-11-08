<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\job>
 */
class jobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->jobTitle(),
            //Create also a record in Employee table and and then sets that value here.
            'employee_id'=> Employee::factory(),
            'salary' => fake()->randomFloat(2, 1000, 10000), // Generate a random float with 2 decimal places between 1000 and 10000
        ];
    }
}