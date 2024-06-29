@extends('main')
@section('content')


<div class="mb-6 lg:h-48 h-36 flex flex-col items-center justify-center bg-gradient-to-r from-pink-500 to-purple-700">
    <h2 class="font-semibold lg:font-bold text-xl lg:text-3xl uppercase text-center text-gray-100">
        Book Doctor Appointment
    </h2>
    <p class=" text-center text-gray-100 text-md lg:text-lg">Home / Consult a Doctor / Doctor Appointment</p>
</div>


<div class="container mx-auto py-2 flex flex-wrap">
    <!-- card -->
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
                    <a href="#"
                        class=" w-full flex justify-center mx-2 text-gray-100 font-semibold flex items-center border-b-2 border-transparent hover-underline-animation">Book Appointment
                    </a>
                </div>

                <div class="h-8 bg-gradient-to-r from-pink-500 to-purple-700  text-white px-4 rounded inline-flex justify-center items-center">
                    <a href="#"
                        class=" w-full flex justify-center mx-2 text-gray-100 font-semibold flex items-center border-b-2 border-transparent hover-underline-animation">View Details
                    </a>
                </div>

            </div>
        </div>
    </div> --}}



</div>

@endsection
