<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{
    use HasFactory;
    protected $fillable = ['doctor_id', 'start_time', 'end_time', 'remarks', 'created_by'];

}
