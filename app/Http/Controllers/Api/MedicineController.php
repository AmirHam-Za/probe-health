<?php

namespace App\Http\Controllers\Api;

use App\Models\MedicineName;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MedicineController extends Controller
{
    public function getAllMedicines()
    {
        $medicines = MedicineName::select('id', 'name', 'type')->get();

        return response()->json(['medicines' => $medicines]);
    }
}
