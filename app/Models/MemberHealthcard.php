<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class MemberHealthcard extends Model
{
    protected $table = 'probe_member_healthcard_sell';
    protected $fillable = ['org_name','is_employee','employee_pin','weight','height_feet','height_inch','seller_name','seller_pin','designation','mobile','issue_date','expaire_date','card_holder_name','age','sex', 'card_holder_phone','user_id','union_code','thana','district','divison','nid','nominee_name',
    'nominee_phone','relation','package_type','disease_history','status','created_by','received_by','blood_collection_status','blood_collection_date','blood_recive_date','blood_report_delivery_date','card_holder_id','is_activate','report_generate_status','bp','is_employee'];

   
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
