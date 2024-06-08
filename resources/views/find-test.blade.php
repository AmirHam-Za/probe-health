@extends('main')
@section('content')



<section class=" container mx-auto slider">

    <div class="mt-4 mb-4">
        <h2 class="text-xl  text-center md:text-left text-red-900">
            Find a test </h2>
    </div>

    <div class="mt-4 mb-6">
        <h2 class="font-bold text-xl uppercase text-center text-red-900"><span class="text-red-600">Popular</span>
            Test </h2>
    </div>
    <div class="flex gap-4 justify-center flex-wrap">

        <button class="p-2 w-[211px] bg-red-900 text-gray-100 font-semibold rounded">LDL</button>
        <button class="p-2 w-[211px] bg-red-900 text-gray-100 font-semibold rounded">HDL</button>
        <button class="p-2 w-[211px] bg-red-900 text-gray-100 font-semibold rounded">Bilirubin</button>
        <button class="p-2 w-[211px] bg-red-900 text-gray-100 font-semibold rounded">Sugar,PP</button>
        <button class="p-2 w-[211px] bg-red-900 text-gray-100 font-semibold rounded">Blood</button>

    </div>

</section>


<div class="flex bg-red-900 py-6 my-6">
    <div class="container mx-auto flex flex-col lg:flex-row justify-between gap-4">
        <div class="flex flex-col items-start lg:items-start mx-2">
            <p class="text-gray-100">Search for Test or Packages</p>
            <input class="rounded w-full lg:w-auto" type="search" placeholder="Search for Test or Packages">
        </div>
        <div class="mx-2 flex flex-col items-start lg:items-start">
            <p class="text-gray-100">Not Sure what test is to be done?</p>
            <button class="p-2 w-full lg:w-[211px] bg-gray-100 text-red-900 text-sm rounded uppercase">Upload
                Prescription</button>
        </div>
        <div class="mx-2 flex flex-col items-start lg:items-start ">
            <p class="text-gray-100">Show Health Package</p>
        </div>
    </div>
</div>


<div class="mt-12 mb-6">
    <h2 class="font-bold text-xl uppercase text-center text-red-900"><span class="text-red-600">Preventive</span>
        Health Packages </h2>
</div>

<div class="container mx-auto py-2 flex flex-wrap">
    <!-- card -->
    <div class="w-full sm:w-6/12 lg:w-4/12 px-2 mb-4">
        <div class="p-4 border border-gray-800 rounded-lg ">
            <p class="text-red-900 font-semibold  mb-8">
                Testosterone (Total)</p>
            <p class="text-red-700">Lorem, ipsum dolor.</p>
            <p class="text-gray-700">Lorem, ipsum dolor.</p>
            <p class="text-red-700 text-2xl font-bold mt-8">$ 2000</p>
            <div class="flex flex-col md:flex-row justify-between mt-4">
                <div class="w-full md:w-1/2 px-2 mb-2 md:mb-0">
                    <button class="p-2 w-full bg-red-900 text-gray-100 font-semibold rounded">Book Now</button>
                </div>
                <div class="w-full md:w-1/2 px-2">
                    <button class="p-2 w-full bg-gray-400 text-gray-900 font-semibold rounded">Know More</button>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full sm:w-6/12 lg:w-4/12 px-2 mb-4">
        <div class="p-4 border border-gray-800 rounded-lg ">
            <p class="text-red-900 font-semibold  mb-8">
                Testosterone (Total)</p>
            <p class="text-red-700">Lorem, ipsum dolor.</p>
            <p class="text-gray-700">Lorem, ipsum dolor.</p>
            <p class="text-red-700 text-2xl font-bold mt-8">$ 2000</p>
            <div class="flex flex-col md:flex-row justify-between mt-4">
                <div class="w-full md:w-1/2 px-2 mb-2 md:mb-0">
                    <button class="p-2 w-full bg-red-900 text-gray-100 font-semibold rounded">Book Now</button>
                </div>
                <div class="w-full md:w-1/2 px-2">
                    <button class="p-2 w-full bg-gray-400 text-gray-900 font-semibold rounded">Know More</button>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full sm:w-6/12 lg:w-4/12 px-2 mb-4">
        <div class="p-4 border border-gray-800 rounded-lg ">
            <p class="text-red-900 font-semibold  mb-8">
                Testosterone (Total)</p>
            <p class="text-red-700">Lorem, ipsum dolor.</p>
            <p class="text-gray-700">Lorem, ipsum dolor.</p>
            <p class="text-red-700 text-2xl font-bold mt-8">$ 2000</p>
            <div class="flex flex-col md:flex-row justify-between mt-4">
                <div class="w-full md:w-1/2 px-2 mb-2 md:mb-0">
                    <button class="p-2 w-full bg-red-900 text-gray-100 font-semibold rounded">Book Now</button>
                </div>
                <div class="w-full md:w-1/2 px-2">
                    <button class="p-2 w-full bg-gray-400 text-gray-900 font-semibold rounded">Know More</button>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full sm:w-6/12 lg:w-4/12 px-2 mb-4">
        <div class="p-4 border border-gray-800 rounded-lg ">
            <p class="text-red-900 font-semibold  mb-8">
                Testosterone (Total)</p>
            <p class="text-red-700">Lorem, ipsum dolor.</p>
            <p class="text-gray-700">Lorem, ipsum dolor.</p>
            <p class="text-red-700 text-2xl font-bold mt-8">$ 2000</p>
            <div class="flex flex-col md:flex-row justify-between mt-4">
                <div class="w-full md:w-1/2 px-2 mb-2 md:mb-0">
                    <button class="p-2 w-full bg-red-900 text-gray-100 font-semibold rounded">Book Now</button>
                </div>
                <div class="w-full md:w-1/2 px-2">
                    <button class="p-2 w-full bg-gray-400 text-gray-900 font-semibold rounded">Know More</button>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full sm:w-6/12 lg:w-4/12 px-2 mb-4">
        <div class="p-4 border border-gray-800 rounded-lg ">
            <p class="text-red-900 font-semibold  mb-8">
                Testosterone (Total)</p>
            <p class="text-red-700">Lorem, ipsum dolor.</p>
            <p class="text-gray-700">Lorem, ipsum dolor.</p>
            <p class="text-red-700 text-2xl font-bold mt-8">$ 2000</p>
            <div class="flex flex-col md:flex-row justify-between mt-4">
                <div class="w-full md:w-1/2 px-2 mb-2 md:mb-0">
                    <button class="p-2 w-full bg-red-900 text-gray-100 font-semibold rounded">Book Now</button>
                </div>
                <div class="w-full md:w-1/2 px-2">
                    <button class="p-2 w-full bg-gray-400 text-gray-900 font-semibold rounded">Know More</button>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full sm:w-6/12 lg:w-4/12 px-2 mb-4">
        <div class="p-4 border border-gray-800 rounded-lg ">
            <p class="text-red-900 font-semibold  mb-8">
                Testosterone (Total)</p>
            <p class="text-red-700">Lorem, ipsum dolor.</p>
            <p class="text-gray-700">Lorem, ipsum dolor.</p>
            <p class="text-red-700 text-2xl font-bold mt-8">$ 2000</p>
            <div class="flex flex-col md:flex-row justify-between mt-4">
                <div class="w-full md:w-1/2 px-2 mb-2 md:mb-0">
                    <button class="p-2 w-full bg-red-900 text-gray-100 font-semibold rounded">Book Now</button>
                </div>
                <div class="w-full md:w-1/2 px-2">
                    <button class="p-2 w-full bg-gray-400 text-gray-900 font-semibold rounded">Know More</button>
                </div>
            </div>
        </div>
    </div>


</div>


<div class="container mx-auto my-4">
    <h2 class="text-xl ml-4">
        Popular Packages
    </h2>
    <hr class="ml-4">
</div>
<div class="container mx-auto py-2 flex flex-wrap">

    <!-- card -->
    <div class="w-full sm:w-6/12 lg:w-4/12 px-2 mb-4">
        <div class="p-4 border border-gray-800 rounded-lg ">
            <p class="text-red-900 font-semibold  mb-8">
                Testosterone (Total)</p>
            <p class="text-red-700">Lorem, ipsum dolor.</p>
            <p class="text-gray-700">Lorem, ipsum dolor.</p>
            <p class="text-red-700 text-2xl font-bold mt-8">$ 2000</p>
            <div class="flex flex-col md:flex-row justify-between mt-4">
                <div class="w-full md:w-1/2 px-2 mb-2 md:mb-0">
                    <button class="p-2 w-full bg-red-900 text-gray-100 font-semibold rounded">Book Now</button>
                </div>
                <div class="w-full md:w-1/2 px-2">
                    <button class="p-2 w-full bg-gray-400 text-gray-900 font-semibold rounded">Know More</button>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full sm:w-6/12 lg:w-4/12 px-2 mb-4">
        <div class="p-4 border border-gray-800 rounded-lg ">
            <p class="text-red-900 font-semibold  mb-8">
                Testosterone (Total)</p>
            <p class="text-red-700">Lorem, ipsum dolor.</p>
            <p class="text-gray-700">Lorem, ipsum dolor.</p>
            <p class="text-red-700 text-2xl font-bold mt-8">$ 2000</p>
            <div class="flex flex-col md:flex-row justify-between mt-4">
                <div class="w-full md:w-1/2 px-2 mb-2 md:mb-0">
                    <button class="p-2 w-full bg-red-900 text-gray-100 font-semibold rounded">Book Now</button>
                </div>
                <div class="w-full md:w-1/2 px-2">
                    <button class="p-2 w-full bg-gray-400 text-gray-900 font-semibold rounded">Know More</button>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full sm:w-6/12 lg:w-4/12 px-2 mb-4">
        <div class="p-4 border border-gray-800 rounded-lg ">
            <p class="text-red-900 font-semibold  mb-8">
                Testosterone (Total)</p>
            <p class="text-red-700">Lorem, ipsum dolor.</p>
            <p class="text-gray-700">Lorem, ipsum dolor.</p>
            <p class="text-red-700 text-2xl font-bold mt-8">$ 2000</p>
            <div class="flex flex-col md:flex-row justify-between mt-4">
                <div class="w-full md:w-1/2 px-2 mb-2 md:mb-0">
                    <button class="p-2 w-full bg-red-900 text-gray-100 font-semibold rounded">Book Now</button>
                </div>
                <div class="w-full md:w-1/2 px-2">
                    <button class="p-2 w-full bg-gray-400 text-gray-900 font-semibold rounded">Know More</button>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full sm:w-6/12 lg:w-4/12 px-2 mb-4">
        <div class="p-4 border border-gray-800 rounded-lg ">
            <p class="text-red-900 font-semibold  mb-8">
                Testosterone (Total)</p>
            <p class="text-red-700">Lorem, ipsum dolor.</p>
            <p class="text-gray-700">Lorem, ipsum dolor.</p>
            <p class="text-red-700 text-2xl font-bold mt-8">$ 2000</p>
            <div class="flex flex-col md:flex-row justify-between mt-4">
                <div class="w-full md:w-1/2 px-2 mb-2 md:mb-0">
                    <button class="p-2 w-full bg-red-900 text-gray-100 font-semibold rounded">Book Now</button>
                </div>
                <div class="w-full md:w-1/2 px-2">
                    <button class="p-2 w-full bg-gray-400 text-gray-900 font-semibold rounded">Know More</button>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full sm:w-6/12 lg:w-4/12 px-2 mb-4">
        <div class="p-4 border border-gray-800 rounded-lg ">
            <p class="text-red-900 font-semibold  mb-8">
                Testosterone (Total)</p>
            <p class="text-red-700">Lorem, ipsum dolor.</p>
            <p class="text-gray-700">Lorem, ipsum dolor.</p>
            <p class="text-red-700 text-2xl font-bold mt-8">$ 2000</p>
            <div class="flex flex-col md:flex-row justify-between mt-4">
                <div class="w-full md:w-1/2 px-2 mb-2 md:mb-0">
                    <button class="p-2 w-full bg-red-900 text-gray-100 font-semibold rounded">Book Now</button>
                </div>
                <div class="w-full md:w-1/2 px-2">
                    <button class="p-2 w-full bg-gray-400 text-gray-900 font-semibold rounded">Know More</button>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full sm:w-6/12 lg:w-4/12 px-2 mb-4">
        <div class="p-4 border border-gray-800 rounded-lg ">
            <p class="text-red-900 font-semibold  mb-8">
                Testosterone (Total)</p>
            <p class="text-red-700">Lorem, ipsum dolor.</p>
            <p class="text-gray-700">Lorem, ipsum dolor.</p>
            <p class="text-red-700 text-2xl font-bold mt-8">$ 2000</p>
            <div class="flex flex-col md:flex-row justify-between mt-4">
                <div class="w-full md:w-1/2 px-2 mb-2 md:mb-0">
                    <button class="p-2 w-full bg-red-900 text-gray-100 font-semibold rounded">Book Now</button>
                </div>
                <div class="w-full md:w-1/2 px-2">
                    <button class="p-2 w-full bg-gray-400 text-gray-900 font-semibold rounded">Know More</button>
                </div>
            </div>
        </div>
    </div>


</div>

<div class="mt-10"></div>
@endsection
