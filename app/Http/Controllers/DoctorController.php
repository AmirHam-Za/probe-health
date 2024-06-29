<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DoctorController extends Controller
{
    public function show($id){

        $doctor = Doctor::findOrFail($id);
        // dd($doctor);
        return view('consult_doctor_details', compact('doctor'));
    }
    public function bookDoctorAppointment(){

       $doctors = Doctor::all();
        // dd($doctors);
        return view('consult_doctor', compact('doctors'));
    }


}
