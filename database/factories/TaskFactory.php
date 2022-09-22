<?php

namespace Database\Factories;


use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'list' => $this->faker->sentence(),
            'mark' => rand(0,1),
        ];
    }
}
