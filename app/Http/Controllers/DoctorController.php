<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Timetable;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\CreateDoctorFormRequest;
use RealRashid\SweetAlert\Facades\Alert;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departments = Department::All();
        return view('back.doctors.create', compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateDoctorFormRequest $request)
    {  
        //  dd($request->all()); 
        $validated = $request->validated();
        // dd($validated['day']);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $path = $image->store('public/doctors');
            $url = Storage::url($path);
            $validated['image'] = $url;
        }

        $doctor = Doctor::create([
            'name' => $validated['name'],
            
            'department_id' => $validated['department_id'],
            'qualification' => $validated['qualification'],
            'designation' => $validated['designation'],
            'institute' => $validated['institute'],
            'biography' => $validated['biography'],
            'phone' => $validated['phone'],
            'email' => $validated['email'],
            'visit_fee' => $validated['visit_fee'],
            'image' => $validated['image'],
            'slug' => $validated['slug'],
            'created_by' => 1 // Auth::user()->id
        ]);
        

        foreach ($request->day as $key => $dayData) {
            $timetable = new Timetable();
            $timetable->doctor_id = $doctor->id; // Replace with the actual way you get the doctor ID
            $timetable->day = $dayData['day'];  // Use the correct key for the day value
            $timetable->start_time = $dayData['start_time'];
            $timetable->end_time = $dayData['end_time'];
            $timetable->remarks = $dayData['remarks'];
            $timetable->created_by = 1;
            $timetable->save();
        }

        if ($doctor) {
            // Doctor created successfully
            Alert::success('Success', 'Doctor Successfully created')->persistent(true, false);
            return redirect()->back()->with('success', 'Doctor Successfully created');
        } else {
            // Doctor creation failed
            Alert::error('Error', 'Failed to create Doctor')->persistent(true, false);
            return redirect()->back()->with('error', 'Failed to create Doctor');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Doctor $doctor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Doctor $doctor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doctor $doctor)
    {
        //
    }
}
