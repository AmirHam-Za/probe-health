<?php

namespace App\Http\Controllers;

use App\Models\PathologyTest;
use Yajra\DataTables\DataTables;

class DiagnosticServiceController extends Controller
{
    public function index()
    {
        return view('diagnostic_service');
    }

    public function getPathologyTests()
    {
        $tests = PathologyTest::with('getTestDept')->select('pathology_test.*');
        return DataTables::of($tests)
            ->addColumn('department', function ($test) {
                return $test->getTestDept->name ?? '';
            })
            ->addColumn('action', function ($test) {
                return '<a href="' . route('pathology-test.show', $test->id) . '" class="inline-block px-4 py-2 text-red-900  font-semibold  hover:text-gray-900 transition">View</a>';
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function show($id)
    {
        $test = PathologyTest::with('getTestDept')->findOrFail($id);
        return view('pathology-test-show', compact('test'));
    }


    public function pathologyAppointment()
    {
        // $test = PathologyTest::with('getTestDept')->findOrFail($id);
        // return view('pathology-appointment', compact('test'));
        return view('pathology-appointment');
    }
}
