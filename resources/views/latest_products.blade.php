@extends('main')
@section('content')

<div class="lg:mb-6 sm:mb-2 h-32 lg:h-48 flex flex-col items-center justify-center bg-gradient-to-r from-pink-500 to-purple-700">
    <h2 class="font-bold  lg:text-3xl uppercase text-center text-gray-100">
        Latest Products
    </h2>
    <p class="text-gray-100 text-lg">Home/Latest Products</p>
</div>

<div class="container mx-auto py-2 flex flex-wrap">
    <!-- card -->
    <div class="w-full sm:w-6/12 lg:w-4/12 px-2 mb-4 ">
        <div class="p-2 border border-pink-500 rounded-lg lg:mx-4">
            <div class="">
                <img class="w-full h-48 object-cover rounded" src="https://via.placeholder.com/150"
                    alt="Dr. Anannya Ghosh">
            </div>
            <p class="text-red-900 font-semibold  mb-2">
                Product Name</p>
            <p class="text-red-700">
                Content
            </p>

            <div class="flex flex-col md:flex-row justify-between mt-4 gap-2">

                <div class="h-8 gradient-login  text-white px-4 rounded inline-flex justify-center items-center">
                        <a href="#" class="mx-2 text-gray-100 font-semibold flex items-center border-b-2 border-transparent hover-underline-animation">Purchase
                        </a>
                </div>
                <div class="h-8 gradient-login  text-white px-4 rounded inline-flex justify-center items-center">
                        <a href="#" class="mx-2 text-gray-100 font-semibold flex items-center border-b-2 border-transparent hover-underline-animation">View
                        </a>
                </div>

            </div>
        </div>
    </div>

</div>


@endsection
