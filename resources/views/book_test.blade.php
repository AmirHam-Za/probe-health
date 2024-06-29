@extends('main')
@section('content')

<style>
    .gradient-bg {
        background: linear-gradient(to right, #ff416c, #8a00ff);
    }
</style>

<div class=" mb-6 gradient-bg h-60  flex flex-col items-center justify-center">
    <h2 class="font-bold text-3xl uppercase text-center text-gray-100">
        Diagnostic Service - Histopathology & Cytopathology
    </h2>
    <p class="text-gray-100 text-lg">Home / Services / Pathology / Histopathology & Cytopathology</p>
</div>
<div class="mt-12 mb-6">
    <h2 class="font-bold text-xl uppercase text-center text-red-900"><span class="text-red-600">All</span>
        Diagnostic Labs </h2>
</div>

<div class="container mx-auto py-2 flex flex-wrap">
    <!-- card -->
    <div class="w-full sm:w-6/12 lg:w-4/12 px-2 mb-4">
        <div class="p-4 border border-gray-800 rounded-lg ">
            <div class="">
                <img class="w-full h-48 object-cover rounded" src="https://via.placeholder.com/150"
                    alt="Dr. Anannya Ghosh">
            </div>
            <p class="text-red-900 font-semibold  mb-2">
                Product Name</p>
            <p class="text-red-700">
                Content
            </p>

            <div class="flex flex-col md:flex-row justify-between mt-4">

                <a class="p-2 m-2 text-center w-full bg-red-900 text-gray-100 font-semibold rounded">Purchase</a>


                <a class="p-2 m-2 text-center w-full bg-red-900 text-gray-100 font-semibold rounded">View Details</a>

            </div>
        </div>
    </div>



</div>


@endsection
