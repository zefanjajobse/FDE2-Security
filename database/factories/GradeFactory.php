<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Grade;
use Illuminate\Database\Eloquent\Factories\Factory;

class GradeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Grade::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'course_id' => Course::factory(Course::class),
            'test_name' => $this->faker->name,
            'lowest_passing_grade' => $this->faker->numberBetween($min = 0, $max = 10),
            'best_grade' => $this->faker->numberBetween($min = 0, $max = 10)
            //
        ];
    } // $grades = App\Models\Grade::factory()->count(3)->create();
}
