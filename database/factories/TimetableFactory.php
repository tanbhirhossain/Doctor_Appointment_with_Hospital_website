<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Timetable>
 */
class TimetableFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $days = ['sat', 'sun', 'mon', 'tue', 'wed', 'thu', 'fri'];
        $uniqueDays = [];

        return [
            'doctor_id' => 0,
            'day' => function() use (&$days, &$uniqueDays) {
                shuffle($days); // Shuffle the days to randomize the order
                foreach ($days as $day) {
                    if (!in_array($day, $uniqueDays)) {
                        $uniqueDays[] = $day;
                        return $day;
                    }
                }
            },
            'start_time' => $this->faker->time(),
            'end_time' => $this->faker->time(),
            'department_id' => Department::inRandomOrder()->value('id'),
            'remarks' => $this->faker->sentence,
            'created_by' => User::factory()->create()->id,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
