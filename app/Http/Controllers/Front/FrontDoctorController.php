<?php

namespace App\Http\Controllers\Front;

use Carbon\Carbon;
use App\Models\Doctor;
use App\Models\Timetable;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Appointment;

class FrontDoctorController extends Controller
{
    public function index(){

        $departments = Department::All();
        $doctors = Doctor::with(['department'])->get();
        // dd($doctors);
        return view('front.pages.doctors.doctors', compact('departments', 'doctors'));
    }
    public function show($slug) {
        $doctor = Doctor::with(['department', 'timetables'])->where('slug', $slug)->first();
    
        if (!$doctor) {
            // Handle the case when the doctor is not found
            abort(404);
        }
        
        // Retrieve available dates from doctor's timetables
        $availableDates = $doctor->timetables->pluck('day')->unique()->map(function ($day) {
            return strtolower($day);
        })->toArray();
    
        // Get today's day and date
        $today = Carbon::today();
        $todayDay = $today->format('D');
    
        // Check if today's schedule is available
        $todayScheduleAvailable = in_array(strtolower($todayDay), $availableDates);
    
        // Set the starting day based on availability
        $startDay = $todayScheduleAvailable ? $todayDay : null;
    
        // If today's schedule is not available, find the next available day
        if (!$todayScheduleAvailable) {
            // Find the next available day
            foreach ($availableDates as $day) {
                if (Carbon::parse('next ' . ucfirst($day))->isAfter($today)) {
                    $startDay = $day;
                    break;
                }
            }
        }
    
        // If no available day found after today, start from the first available day
        if (!$startDay) {
            $startDay = $availableDates[0];
        }
    
        // Reorder the available dates array to start from the selected starting day
        $startIndex = array_search($startDay, $availableDates);
        $availableDates = array_merge(array_slice($availableDates, $startIndex), array_slice($availableDates, 0, $startIndex));
    
        // Day mappings for displaying day names
        $dayMappings = [
            'sun' => 'Sunday',
            'mon' => 'Monday',
            'tue' => 'Tuesday',
            'wed' => 'Wednesday',
            'thu' => 'Thursday',
            'fri' => 'Friday',
            'sat' => 'Saturday',
        ];
    
        $calendarBlocks = [];
    
        foreach ($availableDates as $day) {
            // Use Carbon to find the next occurrence of the day within the current week
            $date = Carbon::parse('this ' . ucfirst($day))->format('d M Y');
    
            $timeSlots = $doctor->timetables->filter(function ($timetable) use ($day) {
                return strtolower($timetable->day) === $day;
            })->flatMap(function ($timetable) {
                // Generate time slots based on start_time and end_time
                $startTime = Carbon::parse($timetable->start_time);
                $endTime = Carbon::parse($timetable->end_time);
                $slots = [];
    
                while ($startTime < $endTime) {
                    $slots[] = $startTime->format('h:i A'); // Format time in AM/PM
                    $startTime->addMinutes(15);
                }
    
                return $slots;
            })->toArray();
    
            $calendarBlocks[] = [
                'day' => $dayMappings[$day],
                'date' => $date,
                'timeSlots' => $timeSlots,
            ];
        }
    
        return view('front.pages.doctors.details', compact('doctor', 'calendarBlocks'));
    }
    
    
    


    public function getDoctorTimetable(Request $request)
    {
        $doctorId = $request->input('doctorId');
        $dayOfWeek = $request->input('dayOfWeek');

        // Fetch the doctor's timetable based on the doctorId and dayOfWeek
        $timetable = Timetable::where('doctor_id', $doctorId)
            ->where('day', $dayOfWeek)
            ->first();

        return response()->json($timetable);
    }
}
