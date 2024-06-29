@extends('main')
@section('content')


<div class="mb-4 mt-4 lg:mt-0 lg:h-48 h-36 flex flex-col items-center justify-center bg-gradient-to-r from-pink-500 to-purple-700">
    <h2 class="font-semibold lg:font-bold text-xl lg:text-3xl uppercase text-center text-gray-100">
        Doctor Details
    </h2>
    <p class=" text-center text-gray-100 text-md lg:text-lg">Home / Consult a Doctor / Doctor Details</p>
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




    <div class="container mx-auto px-2 py-4">
        <!-- Header Section -->
        <div class="flex flex-col   md:flex-row justify-between bg-white shadow-md rounded-lg p-4">
            <img class="w-full h-60 lg:hidden md:w-60 md:h-56 rounded my-2 md:mt-0" src="https://via.placeholder.com/150" alt="Doctor Profile Picture">
            <div class="p-2 flex flex-col md:flex-row items-start">
                <div class="md:mr-6">
                    <h1 class="text-2xl font-bold">{{ $doctor->first_name }} {{ $doctor->last_name }}</h1>
                    <p class="text-lg text-gray-600">{{ $doctor->department }}</p>
                    <p class="text-md text-gray-600">{{ $doctor->educational_qualification }}</p>
                    <p class="text-md text-gray-600">Phone: {{ $doctor->phone_no }}</p>
                    <p class="text-md text-gray-600">Email: {{ $doctor->email }}</p>
                </div>
            </div>
            <img class="w-full h-60 md:w-60 md:h-56 hidden lg:block rounded mt-4 md:mt-0" src="https://via.placeholder.com/150" alt="Doctor Profile Picture">
        </div>

        <!-- About Section -->
        <div class="bg-white shadow-md rounded-lg p-6 mb-8">
            <h2 class="text-xl font-semibold mb-4">About Dr. Tanzila Shahid</h2>
            <p class="text-gray-700">Dr. Tanzila Shahid is a renowned cardiologist with over 20 years of experience. He specializes in diagnosing and treating cardiovascular diseases, ensuring the best care for his patients.</p>
        </div>

        <!-- Contact Information -->
        <div class="bg-white shadow-md rounded-lg p-6 mb-8">
            <h2 class="text-xl font-semibold mb-4">Contact Information</h2>
            <p class="text-gray-700"><strong>Phone:</strong> (123) 456-7890</p>
            <p class="text-gray-700"><strong>Email:</strong> johndoe@example.com</p>
            <p class="text-gray-700"><strong>Address:</strong> 1234 Medical Lane, Health City, USA</p>
        </div>

        <!-- Schedule/Availability -->
        <div class="bg-white shadow-md rounded-lg p-6 mb-8">
            <h2 class="text-xl font-semibold mb-4">Schedule</h2>
            <ul class="list-disc list-inside text-gray-700">
                <li>Monday - Friday: 9:00 AM - 5:00 PM</li>
                <li>Saturday: 10:00 AM - 2:00 PM</li>
                <li>Sunday: Closed</li>
            </ul>
        </div>

        <!-- Services Provided -->
        <div class="bg-white shadow-md rounded-lg p-6 mb-8">
            <h2 class="text-xl font-semibold mb-4">Services Provided</h2>
            <ul class="list-disc list-inside text-gray-700">
                <li>Cardiovascular Checkup</li>
                <li>Heart Surgery</li>
                <li>ECG</li>
                <li>Blood Pressure Monitoring</li>
            </ul>
        </div>

        <!-- Patient Reviews -->
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-xl font-semibold mb-4">Patient Reviews</h2>
            <div class="mb-4">
                <p class="text-gray-700"><strong>Ajay:</strong> Dr. Tanzila Shahid is an excellent doctor! He was very thorough and took the time to explain everything to me.</p>
                <p class="text-gray-500 text-sm">Posted on 2023-01-15</p>
            </div>
            <div class="mb-4">
                <p class="text-gray-700"><strong>JShujay:</strong> Great experience! The staff was friendly, and Dr. Tanzila Shahid made me feel at ease.</p>
                <p class="text-gray-500 text-sm">Posted on 2023-02-20</p>
            </div>
        </div>
    </div>


</div>

@endsection
