<?php

namespace App\Http\Controllers\Front;

use App\Models\Doctor;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontDoctorController extends Controller
{
    public function index(){

        $departments = Department::All();
        $doctors = Doctor::with(['department'])->get();
        // dd($doctors);
        return view('front.pages.doctors.doctors', compact('departments', 'doctors'));
    }

    public function show($slug){
        $doctor = Doctor::with(['department', 'timetable'])->Where('slug', $slug)->first();
        // dd($doctor);

        return view('front.pages.doctors.details', compact('doctor'));
    }
}
