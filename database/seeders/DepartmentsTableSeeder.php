<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentsTableSeeder extends Seeder
{
    public function run()
    {
        $departments = [
            'Cardiology',
            'Gynecologist',
            'Medicine and Diabetes Specialist',
            'Internal Medicine',
            'Medicine',
            'Orthopedics',
            'Respiratory (Chest) Medicine',
            'Pediatric',
            'Hepatology',
            'General & Laparoscopy',
            'Colorectal Surgeon',
            'ENT',
            'Medicine & kidney',
            'Urology',
            'Respiratory',
            'Hepatobiliary & Pancreatic Surgery',
            'Neuro Medicine',
            'Cardio Vascular',
            'Psychiatrist',
            'Oncologist',
            'Hematologist',
            'Dermatologist',
            'Gastrology',
            'PLASTIC SURGERY',
            'Pediatric Surgery',
            'Plastic Surgery',
            'Thoracic Surgery',
            'Neuro Surgery',
            'Physical Medicine',
            'Pain Medicine',
            'Interventional Pain specialist',
            'Thyroid',
            'Hormone',
            'OBC',
            'Clinical Nutritionist',
            'General Surgery',
        ];

        foreach ($departments as $department) {
            DB::table('departments')->insert([
                'name' => $department,
                'created_by' => 1, // Change this to the user ID who is creating these departments
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
