<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Timetable;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\CreateDoctorFormRequest;
use App\Http\Requests\DoctorUpdateRequest;
use RealRashid\SweetAlert\Facades\Alert;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $doctors = Doctor::paginate(10);
       return view('back.doctors.index', compact('doctors'));
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
            'speciality' => $validated['speciality'],
            'chamber_location' => $validated['chamber_location'],
            'meta_description' => $validated['meta_description'],

            'designation' => $validated['designation'],
            'institute' => $validated['institute'],
            'biography' => $validated['biography'],
            'phone' => $validated['phone'],
            'email' => $validated['email'],
            'visit_fee' => $validated['visit_fee'],
            'image' => $validated['image'],
            'slug' => $validated['slug'],
            'created_by' => 1,
            'created_by_name' => 'TANBHIR'
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
    public function edit($id)
    {
        $departments = Department::All();
        $doctor = Doctor::with('timetable')->find($id);
        return view('back.doctors.edit', compact('doctor', 'departments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DoctorUpdateRequest $request, $id)
{
    $validated = $request->validated();

    // Check if 'image' key exists in the validated data
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $path = $image->store('public/doctors');
        $url = Storage::url($path);
        $validated['image'] = $url;
    }

    $doctor = Doctor::find($id);

    $doctorData = [
        'name' => $validated['name'],
        'department_id' => $validated['department_id'],
        'qualification' => $validated['qualification'],
        'speciality' => $validated['speciality'],
        'chamber_location' => $validated['chamber_location'],
        'meta_description' => $validated['meta_description'],
        'designation' => $validated['designation'],
        'institute' => $validated['institute'],
        'biography' => $validated['biography'],
        'phone' => $validated['phone'],
        'email' => $validated['email'],
        'visit_fee' => $validated['visit_fee'],
        'created_by' => 1,
        'created_by_name' => 'TANBHIR'
    ];

    // Add 'image' key only if it exists in the validated data
    if (array_key_exists('image', $validated)) {
        $doctorData['image'] = $validated['image'];
    }

    // Update doctor data
    $updated = $doctor->update($doctorData);

    if ($updated) {
        // Update timetable entries
        foreach ($request->day as $key => $dayData) {
            $timetable = Timetable::updateOrCreate(
                ['doctor_id' => $doctor->id, 'day' => $dayData['day']],
                ['start_time' => $dayData['start_time'], 'end_time' => $dayData['end_time'], 'remarks' => $dayData['remarks']]
            );
        }

        // Doctor updated successfully
        Alert::success('Success', 'Doctor Successfully Updated')->persistent(true, false);
        return redirect()->back()->with('success', 'Doctor Successfully Updated');
    } else {
        // Failed to update doctor
        Alert::error('Error', 'Failed to update Doctor')->persistent(true, false);
        return redirect()->back()->with('error', 'Failed to update Doctor');
    }
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $doctor = Doctor::find($id);
        // Delete the doctor's image if it exists
        if ($doctor->image) {
            Storage::delete($doctor->image);
        }
    
        // Delete the doctor
        $deleted = $doctor->delete();
    
        if ($deleted) {
            // Doctor deleted successfully
            Alert::success('Success', 'Doctor Successfully Deleted')->persistent(true, false);
            return redirect()->back()->with('success', 'Doctor Successfully Deleted');
        } else {
            // Failed to delete doctor
            Alert::error('Error', 'Failed to delete Doctor')->persistent(true, false);
            return redirect()->back()->with('error', 'Failed to delete Doctor');
        }
    }
    
    public function search(Request $request)
    {
        $search = $request->input('search');
        $doctors = Doctor::where('name', 'like', "%$search%")->paginate(10);
    
        // Render the search results HTML
        $html = view('back.doctors.index', compact('doctors'))->render();
    
        return response()->json(['html' => $html]);
    }
    

}
