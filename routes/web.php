<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\Front\FrontAppointmentController;
use App\Http\Controllers\Front\FrontDepartmentController;
use App\Http\Controllers\Front\FrontDoctorController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
use App\Models\Doctor;
use Illuminate\Support\Facades\Route;


//FRONT ROUTES


Route::get('/get-doctor-timetable', [FrontDoctorController::class, 'getDoctorTimetable']);
Route::get('/',[HomeController::class, 'index'])->name('front.home');
//Appointments
Route::post('/doctors/appointments', [FrontAppointmentController::class, 'store'])->name('front.booking.store');


//Doctors
Route::get('/doctors', [FrontDoctorController::class, 'index']);
Route::get('/doctors/{slug}', [FrontDoctorController::class, 'show'])->name('doctor.details');

//Departments
Route::get('/departments', [FrontDepartmentController::class, 'index'])->name('front.departments');
Route::get('/departments/{slug}', [FrontDepartmentController::class, 'show'])->name('front.departments.details');




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
    // Route::get('/doctors/search', 'DoctorController@search')->name('doctors.search');
    Route::get('settings/edit', [SettingController::class, 'edit'])->name('settings.edit');
    Route::post('settings/update', [SettingController::class,'update'])->name('settings.update');

    //Department

    Route::resource('departments', DepartmentController::class);




});
Route::get('/doctors/search', [DoctorController::class, 'search'])->name('doctors.search');


Route::get('/api/murad', function(){
    $doctor = Doctor::with(['department', 'timetable'])->Where('slug', 'dr.-md-murad-hossain')->first();
    return $doctor;
});