<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments = Department::All();
        return view('back.departments.index', compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departments = Department::all();
        return view('back.departments.create', compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:256',
            'slug' => 'required|string',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'icon' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'parent_id' => 'nullable|exists:departments,id' // Ensure 'parent_id' exists in 'departments' table
        ]);

        $data = [
            'name' => $validatedData['name'],
            'slug' => $validatedData['slug'],
            'description' => $validatedData['description'],
            'parent_id' => $validatedData['parent_id'] ?? null,
            'created_by' => 1 // Assuming a default creator ID
        ];

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/images');
            $data['image'] = Storage::url($imagePath);
        }

        if ($request->hasFile('icon')) {
            $iconPath = $request->file('icon')->store('public/icons');
            $data['icon'] = Storage::url($iconPath);
        }

        $department = Department::create($data);

        if ($department) {
            // Department created successfully
            Alert::success('Success', 'Department Successfully Created')->persistent(true, false);
            return redirect()->back()->with('success', 'Department Successfully Created');
        } else {
            // Failed to create department
            Alert::error('Error', 'Failed to create Department')->persistent(true, false);
            return redirect()->back()->with('error', 'Failed to create Department');
        }
    }

    

    /**
     * Display the specified resource.
     */
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $department = Department::findOrFail($id);
        $departments = Department::where('id', '!=', $id)->get(); // Get all departments except the current one being edited
        return view('back.departments.edit', compact('department', 'departments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:256',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'parent_id' => 'nullable|exists:departments,id' // Ensure 'parent_id' exists in 'departments' table
        ]);
    
        // Retrieve the department by ID
        $department = Department::findOrFail($id);
    
        $data = [
            'name' => $validatedData['name'],
            'description' => $validatedData['description'],
            'parent_id' => $validatedData['parent_id'] ?? null,
            'created_by' => 1 // Assuming a default creator ID
        ];
    
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/images');
            $data['image'] = Storage::url($imagePath);
        }
    
        if ($request->hasFile('icon')) {
            $iconPath = $request->file('icon')->store('public/icons');
            $data['icon'] = Storage::url($iconPath);
        }
    
        $department->update($data);
    
        if ($department) {
            // Department updated successfully
            Alert::success('Success', 'Department Successfully Updated')->persistent(true, false);
            return redirect()->back()->with('success', 'Department Successfully Updated');
        } else {
            // Failed to update department
            Alert::error('Error', 'Failed to update Department')->persistent(true, false);
            return redirect()->back()->with('error', 'Failed to update Department');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Department $department)
    {
        //
    }
}
