<?php

namespace App\Http\Controllers\Api;

use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DoctorController extends Controller
{
    public function getAllDoctors()
    {
        $doctors = Doctor::select([
            'doctors.id',
            'doctors.first_name',
            'doctors.last_name',
            'doctors.department',
            'medical_department.name as department_name',
            'doctors.phone_no',
            'doctors.gender',
            'doctors.biography',
            'doctors.specialist',
            'doctors.image',
            'doctors.email',
            'doctors.checkup_slot_period',
            'doctors.appointment_details',
            'doctors.appointment_day_slot_schedule'
        ])
        ->join('medical_department', 'medical_department.id', '=', 'doctors.department')
        ->get();

        // Append full public path URL to the image column
        $doctors->transform(function ($doctor) {
            $doctor->image = $doctor->image ? 'https://uddipanprobe.com/storage/app/public/uploads/doctor/' . $doctor->image : null;
            return $doctor;
        });

        return response()->json(['doctors' => $doctors]);
    }

}
