<?php

namespace App\Http\Controllers\Front;

use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){

        $home_page_doctors = Doctor::where('isHomePage', 1)->get();
        return view('front.pages.home', compact('home_page_doctors'));

    }
}
