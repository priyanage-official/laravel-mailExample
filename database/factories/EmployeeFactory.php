<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'employee_id' => $this->faker->unique()->numberBetween(1, 100000),
            'employee_name' => $this->faker->name(),
            'age' => mt_rand(23, 60),
            'joining_date' => $this->faker->date(),
            'salary' => mt_rand(50000, 150000),
            'bonus' => $this->faker->randomFloat(2, 100, 5000),
            'employe_medical_claims' => mt_rand(500, 20000),
            'allowences' => mt_rand(500, 2000),
            'leave_payments' => mt_rand(100, 2000)
        ];
    }
}
