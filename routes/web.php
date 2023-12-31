<?php

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\Front\FrontDoctorController;
use App\Http\Controllers\ProfileController;
use App\Models\Doctor;
use Illuminate\Support\Facades\Route;


//FRONT ROUTES


Route::get('/', function () {
    return view('front.pages.home');
    // return view('front.layouts.template_doctor');
});

Route::get('/doctors', [FrontDoctorController::class, 'index']);
Route::get('/doctors/{slug}', [FrontDoctorController::class, 'show'])->name('doctor.details');
Route::get('test', function(){
    return view('front.layouts.template_dr_details');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';





//Backend Route

Route::get('/admin', function(){
    return view('back.home');
});

Route::prefix('admin')->group(function (){
    Route::resource('doctors', DoctorController::class);
});