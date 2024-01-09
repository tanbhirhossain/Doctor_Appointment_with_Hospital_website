<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class CreateDoctorFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'department_id' => 'required|exists:departments,id',
            'qualification' => 'nullable|string',
            'designation' => 'nullable|string',
            'institute' => 'nullable|string',
            'biography' => 'nullable|string',
            'phone' => 'nullable|string',
            'email' => 'nullable|email',
            'visit_fee' => 'nullable|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'slug' => 'required|unique:doctors',

           // Ensure uniqueness for each day and doctor
           'day.*.day' => [
            'nullable',
            'string',
            Rule::in(['sat', 'sun', 'mon', 'tue', 'wed', 'thu', 'fri']),
            Rule::unique('timetables', 'day')
                ->where(function ($query) {
                    return $query->where('doctor_id', $this->doctor_id);
                })
        ],
        
            'day.*.start_time' => 'nullable|date_format:H:i',
            'day.*.end_time' => 'nullable|date_format:H:i|after:day.*.start_time',
            'day.*.remarks' => 'nullable|string',
        ];
    }
}
