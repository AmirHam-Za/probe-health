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
            'id',
            'first_name',
            'last_name',
            'department',
            'phone_no',
            'gender',
            'marital_status',
            'blood_group',
            'dob',
            'joining_date',
            'work_experience',
            'present_address',
            'permanent_address',
            'biography',
            'specialist',
            'educational_qualification',
            'image', // Include image column
            'attachments',
            'status',
            'email',
            'checkup_slot_period',
            'new_patient_visit',
            'old_patient_visit',
            'appointment_details',
            'appointment_day_slot_schedule'
        ])->get();

        // Append full public path URL to the image column
        $doctors->transform(function ($doctor) {
            $doctor->image = $doctor->image ? 'https://uddipanprobe.com/storage/app/public/uploads/doctor/' . $doctor->image : null;
            return $doctor;
        });

        return response()->json(['doctors' => $doctors]);
    }
}
