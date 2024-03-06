<?php

namespace App\Http\Controllers\Front;

use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontDepartmentController extends Controller
{
    public function index(){
        $departments = Department::All();
        return view('Front.pages.departments.department', compact('departments'));
    }

    public function show($slug){
        $dept_list = Department::All();
        $department = Department::Where('slug', $slug)->first();
        return view('front.pages.departments.department_details', compact('department', 'dept_list'));
    }
}
