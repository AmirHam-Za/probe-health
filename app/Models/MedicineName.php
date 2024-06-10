<?php

namespace App\Models;
use App\Models\BrandName;
use App\Models\GenericName;

use Illuminate\Database\Eloquent\Model;

class MedicineName extends Model
{
    protected $table = "medicine_name";

    protected $fillable = ['name','type', 'generic_id','brand_id'];




}
