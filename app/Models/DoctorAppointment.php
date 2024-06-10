<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DoctorAppointment extends Model
{
     protected $table = 'doctor_appointments';
     protected $fillable = ['doctor_id', 'apt_date', 'apt_time', 'patient_name', 'phone', 'email', '	sex'];

     public function getDoctorName(){
     	return $this->hasOne('App\Models\Doctor','id','doctor_id');
     }
}
