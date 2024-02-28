<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Department>
 */
class DepartmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $departmentNames = [
            'Cancer Specialist',
            'Cardiology',
            'Cardiovascular & Thoracic Surgery',
            'Colorectal Surgery',
            'Cosmetic Surgery',
            'Dermatology & Venereology',
            'ENT',
            'Gastroenterology',
            'General & Laparoscopic Surgery',
            'General, Laparoscopic & Laser Surgery',
            'Gynecologist And Obstetrician',
            'Hematology',
            'Hepatobiliary & Pancreatic Surgery',
            'Internal Medicine',
            'Internal Medicine & Critical Care Unit',
            'Interventional Pain Medicine',
            'Medicine Specialist',
            'Nephrology',
            'Neuro Surgery',
            'Neurology',
            'Orthopedics',
            'Pediatric Specialist',
            'Pediatric Surgeon',
            'Plastic',
            'Plastic Surgery',
            'Psychiatrist',
            'Psychical Medicine',
            'Respiratory And Medicine',
            'Speclist Burn',
            'Thoracic Surgery',
            'Urology Specialist',
            'Vascular Sergeon',
        ];

        return [
            'name' => $this->faker->unique()->randomElement($departmentNames),
            'description' => $this->faker->sentence,
            'image' => null,
            'icon' => null,
            'parent_id' => null,
            'created_by' => 1,
        ];
    }
}
