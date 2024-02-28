<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'start_time', 'end_time', 'patient_name', 'phone', 'email', 'doctor_id', 'remarks', 'chamber_location', 'visit_fee', 'doctor_name'
    ];
}
