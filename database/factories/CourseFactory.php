<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'CU_code' => $this->faker->name,
            'name' => $this->faker->name,
            'credits' => $this->faker->numberBetween($min = 1, $max = 99),
            'passed_at' => now(),
            'school_year' => $this->faker->numberBetween($min = 1, $max = 4),
            'quarter' => $this->faker->numberBetween($min = 0, $max = 4),
            'started' => true,
            //
        ];
    }
}
