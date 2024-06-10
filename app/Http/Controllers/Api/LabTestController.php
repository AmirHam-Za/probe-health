<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\PathologyTest;
use App\Http\Controllers\Controller;

class LabTestController extends Controller
{
    public function getAllTests()
    {
        $tests = PathologyTest::select('id', 'test_name', 'short_name')->get();

        return response()->json(['tests' => $tests]);
    }
}
