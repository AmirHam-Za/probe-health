@extends('main')
@section('content')

<div class="mb-6 h-48 flex flex-col items-center justify-center bg-gradient-to-r from-pink-500 to-purple-700">
    <h2 class="font-bold text-3xl uppercase text-center text-gray-100">
        Diagnostic Service - Pathology Test Details
    </h2>
    <p class="text-gray-100 text-lg">Home / Services / Pathology Test Details</p>
</div>

<div class="container mx-auto p-4 bg-pink-100 rounded">

    <table class="min-w-full bg-white border border-gray-200">
        <tr>
            <th class="px-4 py-2 border">Test Name</th>
            <td class="px-4 py-2 border">{{ $test->test_name }}</td>
        </tr>
        <tr>
            <th class="px-4 py-2 border">Short Name</th>
            <td class="px-4 py-2 border">{{ $test->short_name }}</td>
        </tr>
        <tr>
            <th class="px-4 py-2 border">Department</th>
            <td class="px-4 py-2 border">{{ $test->getTestDept->name ?? 'N/A' }}</td>
        </tr>
        <tr>
            <th class="px-4 py-2 border">Total Price</th>
            <td class="px-4 py-2 border">{{ $test->total_price }}</td>
        </tr>
        <tr>
            <th class="px-4 py-2 border">Reagent Price</th>
            <td class="px-4 py-2 border">{{ $test->reagent_price }}</td>
        </tr>
        <tr>
            <th class="px-4 py-2 border">Specimen</th>
            <td class="px-4 py-2 border">{{ $test->specimen }}</td>
        </tr>
        <tr>
            <th class="px-4 py-2 border">Status</th>
            <td class="px-4 py-2 border">{{ $test->status }}</td>
        </tr>
        <tr>
            <th class="px-4 py-2 border">Delivery Day</th>
            <td class="px-4 py-2 border">{{ $test->delivery_day }}</td>
        </tr>
        <tr>
            <th class="px-4 py-2 border">Health Card</th>
            <td class="px-4 py-2 border">{{ $test->is_health_card ? 'Yes' : 'No' }}</td>
        </tr>
    </table>
    <a href="{{ url('/diagnostic-service') }}" class="mt-2 hidden lg:inline-block px-6 font-semibold text-red-900  hover:text-gray-900 transition">Back to List</a>
    <div class="flex  justify-center">
        <div class="h-8 mt-4 lg:mt-0 gradient-login  text-white px-4 rounded inline-flex justify-center items-center">
            <a href="{{ url('/pathology-appointment') }}" class="mx-2 text-gray-100 font-semibold flex items-center border-b-2 border-transparent hover-underline-animation">Book Appointment
            </a>
        </div>

    </div>
    <div class="flex justify-center">
        <a href="{{ url('/diagnostic-service') }}" class=" lg:hidden mt-2 inline-block px-6 font-semibold text-red-900  hover:text-gray-900 transition">Back to List</a>
    </div>
</div>


@endsection
