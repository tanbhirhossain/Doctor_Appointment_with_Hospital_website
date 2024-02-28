<?php

namespace App\Http\Controllers\Front;

use DateTime;
use Carbon\Carbon;
use App\Models\Doctor;
use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class FrontAppointmentController extends Controller
{
    public function store(Request $request){

       
        $validate = $request->validate([
            'doctor_id' => 'required|numeric',
            'selectedDate'=> 'required',
            'phone' => 'required|numeric',
            'email' => 'nullable|string|email',
            'name' => 'required|string|max:150',
            'remarks' => 'nullable|string'
        ]);

        $startDateTime = Carbon::parse($validate['selectedDate']);
        // dd($startDateTime);

        // Add 15 minutes to the start time
        $endDateTime = $startDateTime->addMinutes(15);
        // Format the end time as desired (e.g., "Y-m-d H:i:s")
        $endTime = $startDateTime->format('Y-m-d H:i:s');

        $start_time = Carbon::parse($validate['selectedDate']);

        $doctor_info = Doctor::find($validate['doctor_id']);
       $booking = Appointment::create([
            'start_time' => $start_time,
            'end_time' => $endTime,
            'phone' => $validate['phone'],
            'email' => $validate['email'],
            'patient_name' => $validate['name'],
            'doctor_id' => $validate['doctor_id'],
            'remarks' => $validate['remarks'],
            'chamber_location' => $doctor_info->chamber_location,
            'visit_fee' => $doctor_info->visit_fee,
            'doctor_name' => $doctor_info->name,
           
        ]);

        if ($booking) {
            // Doctor created successfully
            Alert::success('Success', 'Doctor Appointment request is created. please wait for confirmation sms. Thanks')->persistent(true, false);
            return redirect()->back()->with('success', 'Doctor Appointment Successfully created');
        } else {
            // Doctor creation failed
            Alert::error('Error', 'Failed to create Doctor Appointment')->persistent(true, false);
            return redirect()->back()->with('error', 'Failed to create Doctor Appointment');
        }

    }
}
