@extends('main')
@section('content')


<div class="mb-6 lg:h-48 h-36 flex flex-col items-center justify-center bg-gradient-to-r from-pink-500 to-purple-700">
    <h2 class="font-semibold lg:font-bold text-xl lg:text-3xl uppercase text-center text-gray-100">
        Consult a Doctor
    </h2>
    <p class=" text-center text-gray-100 text-md lg:text-lg">Home / Consult a Doctor</p>
</div>

{{-- <div class="flex justify-center">

    <div class="p-4 w-9/12 rounded-lg flex flex-col gradient-bg py-6 my-6">
        <div class="text-2xl text-center text-gray-100 mb-4 font-semibold">
            Search Doctors and Book Your Appointment
        </div>
        <div class="container mx-auto flex flex-col lg:flex-row justify-between gap-4">
            <div class="flex flex-col items-start lg:items-start">
                <select class="rounded w-full lg:w-auto">
                    <option value="" disabled selected>Select Test or Package</option>
                    <option value="test1">Test 1</option>
                    <option value="test2">Test 2</option>
                    <option value="package1">Package 1</option>
                    <option value="package2">Package 2</option>
                </select>
            </div>
            <div class="flex flex-col items-start lg:items-start">
                <select class="rounded w-full lg:w-auto">
                    <option value="" disabled selected>Select Test or Package</option>
                    <option value="test1">Test 1</option>
                    <option value="test2">Test 2</option>
                    <option value="package1">Package 1</option>
                    <option value="package2">Package 2</option>
                </select>
            </div>
            <div class="flex flex-col items-start lg:items-start">
                <input class="rounded w-full lg:w-auto" type="search" placeholder="Search for Test or Packages">
            </div>
        </div>
    </div>
</div> --}}


{{-- <div class="mt-12 mb-6">
    <h2 class="font-bold text-xl uppercase text-center text-red-900"><span class="text-red-600">All</span>
        Diagnostic Labs </h2>
</div> --}}

<div class="container mx-auto py-2 flex flex-wrap">
    <!-- card -->
    <div class="container mx-auto px-4 py-8">
        <div class="flex flex-wrap -mx-2">
            @foreach($doctors as $doctor)
                <div class="w-full sm:w-6/12 lg:w-3/12 px-2 mb-4">
                    <div class="p-2 border border-pink-500 rounded-lg lg:mx-4">
                        <div class="">
                            <img class="w-full h-60 object-cover rounded" src="{{ asset('public/images/logos/doctor.png') }}" alt="{{ $doctor->first_name }} {{ $doctor->last_name }}">
                        </div>
                        <h2 class="my-4 text-lg text-purple-800 font-semibold">{{ $doctor->first_name }} {{ $doctor->last_name }}</h2>
                        <p class="text-md text-gray-600 ">{{ $doctor->biography }}</p>
                        <p class="text-md text-gray-600 font-semibold">{{ $doctor->department }}</p>

                        <div class="flex flex-col justify-between mt-4 gap-2">
                            <div class="h-8 bg-gradient-to-r from-pink-500 to-purple-700 text-white px-4 rounded inline-flex justify-center items-center">
                                <a href="{{ route('book.doctor.appointment') }}" class="w-full flex justify-center mx-2 text-gray-100 font-semibold flex items-center border-b-2 border-transparent hover-underline-animation">
                                    Book Appointment
                                </a>
                            </div>

                            <div class="h-8 bg-gradient-to-r from-pink-500 to-purple-700 text-white px-4 rounded inline-flex justify-center items-center">
                                <a href="{{ route('consult.doctor.details', ['id' => $doctor->id]) }}" class="w-full flex justify-center mx-2 text-gray-100 font-semibold flex items-center border-b-2 border-transparent hover-underline-animation">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


    {{-- <div class="w-full sm:w-6/12 lg:w-3/12 px-2 mb-4 ">
        <div class="p-2 border border-pink-500 rounded-lg lg:mx-4">
            <div class="">
                <img class="w-full h-60 object-cover rounded" src="{{ asset('public/images/logos/doctor.png') }}"
                    alt="Dr. Anannya Ghosh">
            </div>
            <h2 class="my-4 text-lg text-purple-800 font-semibold">Dr. Rhitarashmi Nath</h2>
            <p class="text-md text-gray-600 ">MBBS, MS</p>
            <p class="text-md text-gray-600 font-semibold">Sodepur</p>

            <div class="flex flex-col justify-between mt-4 gap-2">

                <div class="h-8 bg-gradient-to-r from-pink-500 to-purple-700  text-white px-4 rounded inline-flex justify-center items-center">
                    <a href="{{ route('book.doctor.appointment') }}"
                        class=" w-full flex justify-center mx-2 text-gray-100 font-semibold flex items-center border-b-2 border-transparent hover-underline-animation">Book Appointment
                    </a>
                </div>

                <div class="h-8 bg-gradient-to-r from-pink-500 to-purple-700  text-white px-4 rounded inline-flex justify-center items-center">
                    <a href="{{ route('consult.doctor.details') }}"
                        class=" w-full flex justify-center mx-2 text-gray-100 font-semibold flex items-center border-b-2 border-transparent hover-underline-animation">View Details
                    </a>
                </div>

            </div>
        </div>
    </div>
    <div class="w-full sm:w-6/12 lg:w-3/12 px-2 mb-4 ">
        <div class="p-2 border border-pink-500 rounded-lg lg:mx-4">
            <div class="">
                <img class="w-full h-60 object-cover rounded" src="{{ asset('public/images/logos/doctor.png') }}"
                    alt="Dr. Anannya Ghosh">
            </div>
            <h2 class="my-4 text-lg text-purple-800 font-semibold">Dr. Rhitarashmi Nath</h2>
            <p class="text-md text-gray-600 ">MBBS, MS</p>
            <p class="text-md text-gray-600 font-semibold">Sodepur</p>

            <div class="flex flex-col justify-between mt-4 gap-2">

                <div class="h-8 bg-gradient-to-r from-pink-500 to-purple-700  text-white px-4 rounded inline-flex justify-center items-center">
                    <a href="{{ route('book.doctor.appointment') }}"
                        class=" w-full flex justify-center mx-2 text-gray-100 font-semibold flex items-center border-b-2 border-transparent hover-underline-animation">Book Appointment
                    </a>
                </div>

                <div class="h-8 bg-gradient-to-r from-pink-500 to-purple-700  text-white px-4 rounded inline-flex justify-center items-center">
                    <a href="{{ route('consult.doctor.details') }}"
                        class=" w-full flex justify-center mx-2 text-gray-100 font-semibold flex items-center border-b-2 border-transparent hover-underline-animation">View Details
                    </a>
                </div>

            </div>
        </div>
    </div>
    <div class="w-full sm:w-6/12 lg:w-3/12 px-2 mb-4 ">
        <div class="p-2 border border-pink-500 rounded-lg lg:mx-4">
            <div class="">
                <img class="w-full h-60 object-cover rounded" src="{{ asset('public/images/logos/doctor.png') }}"
                    alt="Dr. Anannya Ghosh">
            </div>
            <h2 class="my-4 text-lg text-purple-800 font-semibold">Dr. Rhitarashmi Nath</h2>
            <p class="text-md text-gray-600 ">MBBS, MS</p>
            <p class="text-md text-gray-600 font-semibold">Sodepur</p>

            <div class="flex flex-col justify-between mt-4 gap-2">

                <div class="h-8 bg-gradient-to-r from-pink-500 to-purple-700  text-white px-4 rounded inline-flex justify-center items-center">
                    <a href="{{ route('book.doctor.appointment') }}"
                        class=" w-full flex justify-center mx-2 text-gray-100 font-semibold flex items-center border-b-2 border-transparent hover-underline-animation">Book Appointment
                    </a>
                </div>

                <div class="h-8 bg-gradient-to-r from-pink-500 to-purple-700  text-white px-4 rounded inline-flex justify-center items-center">
                    <a href="{{ route('consult.doctor.details') }}"
                        class=" w-full flex justify-center mx-2 text-gray-100 font-semibold flex items-center border-b-2 border-transparent hover-underline-animation">View Details
                    </a>
                </div>

            </div>
        </div>
    </div>
    <div class="w-full sm:w-6/12 lg:w-3/12 px-2 mb-4 ">
        <div class="p-2 border border-pink-500 rounded-lg lg:mx-4">
            <div class="">
                <img class="w-full h-60 object-cover rounded" src="{{ asset('public/images/logos/doctor.png') }}"
                    alt="Dr. Anannya Ghosh">
            </div>
            <h2 class="my-4 text-lg text-purple-800 font-semibold">Dr. Rhitarashmi Nath</h2>
            <p class="text-md text-gray-600 ">MBBS, MS</p>
            <p class="text-md text-gray-600 font-semibold">Sodepur</p>

            <div class="flex flex-col justify-between mt-4 gap-2">

                <div class="h-8 bg-gradient-to-r from-pink-500 to-purple-700  text-white px-4 rounded inline-flex justify-center items-center">
                    <a href="{{ route('book.doctor.appointment') }}"
                        class=" w-full flex justify-center mx-2 text-gray-100 font-semibold flex items-center border-b-2 border-transparent hover-underline-animation">Book Appointment
                    </a>
                </div>

                <div class="h-8 bg-gradient-to-r from-pink-500 to-purple-700  text-white px-4 rounded inline-flex justify-center items-center">
                    <a href="{{ route('consult.doctor.details') }}"
                        class=" w-full flex justify-center mx-2 text-gray-100 font-semibold flex items-center border-b-2 border-transparent hover-underline-animation">View Details
                    </a>
                </div>

            </div>
        </div>
    </div>
    <div class="w-full sm:w-6/12 lg:w-3/12 px-2 mb-4 ">
        <div class="p-2 border border-pink-500 rounded-lg lg:mx-4">
            <div class="">
                <img class="w-full h-60 object-cover rounded" src="{{ asset('public/images/logos/doctor.png') }}"
                    alt="Dr. Anannya Ghosh">
            </div>
            <h2 class="my-4 text-lg text-purple-800 font-semibold">Dr. Rhitarashmi Nath</h2>
            <p class="text-md text-gray-600 ">MBBS, MS</p>
            <p class="text-md text-gray-600 font-semibold">Sodepur</p>

            <div class="flex flex-col justify-between mt-4 gap-2">

                <div class="h-8 bg-gradient-to-r from-pink-500 to-purple-700  text-white px-4 rounded inline-flex justify-center items-center">
                    <a href="{{ route('book.doctor.appointment') }}"
                        class=" w-full flex justify-center mx-2 text-gray-100 font-semibold flex items-center border-b-2 border-transparent hover-underline-animation">Book Appointment
                    </a>
                </div>

                <div class="h-8 bg-gradient-to-r from-pink-500 to-purple-700  text-white px-4 rounded inline-flex justify-center items-center">
                    <a href="{{ route('consult.doctor.details') }}"
                        class=" w-full flex justify-center mx-2 text-gray-100 font-semibold flex items-center border-b-2 border-transparent hover-underline-animation">View Details
                    </a>
                </div>

            </div>
        </div>
    </div> --}}


</div>

@endsection
