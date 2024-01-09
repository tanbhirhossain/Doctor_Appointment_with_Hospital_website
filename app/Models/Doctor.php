<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'department_id', 'qualification', 'designation', 'institute', 'biography', 'phone','image', 'email', 'visit_fee', 'created_by'];

    public function department(){
        return $this->hasOne(Department::class, 'id', 'department_id');
    }

    public function timetable(){
        return $this->hasMany(Timetable::class, 'doctor_id', 'id');
    }
}
