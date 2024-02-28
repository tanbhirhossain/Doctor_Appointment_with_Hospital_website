<?php

namespace Database\Factories;

use App\Models\Doctor;
use App\Models\Timetable;
use App\Models\Department;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctor>
 */
class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $department_ids = Department::pluck('id')->toArray();
        return [
            'name' => fake()->name,
            'department_id' => fake()->randomElement($department_ids),
            'qualification' => fake()->word,
            'designation' => fake()->word,
            'institute' => fake()->word,
            'speciality' => fake()->word,
            'biography' => fake()->paragraph,
            'phone' => fake()->phoneNumber,
            'email' => fake()->unique()->safeEmail,
            'password' => Hash::make('dr123456'),
            'image' => fake()->imageUrl(),
            'chamber_location' => fake()->address,
            'meta_description' => fake()->sentence,
            'visit_fee' => fake()->randomFloat(2, 10, 1000),
            'slug' => fake()->unique()->slug,
            'created_by' => 1, // Adjust according to your needs
            'created_by_name' => fake()->name,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Doctor $doctor) {
            $doctor->timetables()->saveMany(Timetable::factory()->count(7)->make(['doctor_id' => $doctor->id]));
        });
    }

//     public function withSchedules()
// {
//     return $this->afterCreating(function (Doctor $doctor) {
//         $doctor->schedules()->saveMany(Timetable::factory()->count(7)->make(['doctor_id' => $doctor->id]));
//     });
// }
}
