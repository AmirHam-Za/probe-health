@extends('main')
@section('content')
  <div class="container mx-auto p-6">
    <div class="flex flex-col lg:flex-row">
        <div class="w-full lg:w-7/12">
            <h1 class="text-2xl  mt-4 text-center lg:text-start text-red-900">Diagnostic Service - Electrocardiogram</h1>
        </div>
        <div class="w-full lg:w-5/12 flex flex-col lg:flex-row justify-end items-center mt-4 lg:mt-0">
            <nav class="text-sm text-gray-500">
                <a href="#" class="hover:underline">Home</a> &gt;
                <a href="#" class="hover:underline">Our Services</a> &gt;
                <a href="#" class="hover:underline">Cardiology</a> &gt;
                <span class="font-bold">Electrocardiogram</span>
            </nav>
        </div>
    </div>

    <div class="flex flex-col lg:flex-row mt-4">
        <div class="w-full lg:w-8/12">
            <p class="mt-4">Electrocardiogram (ECG) is a test which detects the problems with the electrical activity of the heart.</p>
            <p class="mt-2">Patients must bring all previous diagnostic or operative reports and films. If you are undergoing any medication that should be told to doctor as it can change the test result. Fasting is not needed. You need to remove all the jewelries.</p>
            <h2 class="text-xl font-bold mt-6">OUR FACILITY:</h2>
            <ul class="list-disc list-inside mt-4 space-y-2">
                <li>Non invasive cardiology.</li>
                <li>Dedicated technology for cardiology by renowned brands like Schiller.</li>
                <li>Entire array from Echo-cardiology to high-end Color Doppler study.</li>
                <li>Pediatric Echo-cardiography with special probe.</li>
                <li>Report delivered on the same day.</li>
                <li>Report generation status is notified to you through SMS alerts.</li>
                <li>Report Delivery: Report can be downloaded from our website. The graph and hard copy of the report can be obtained from reception. Home delivery is also available.</li>
            </ul>
        </div>
        <div class="w-full lg:w-4/12 mt-6 lg:mt-0 flex justify-center lg:justify-end">
            <img src="https://via.placeholder.com/300x200" alt="ECG Machine" class="ml-0 lg:ml-6" width="300">
        </div>
    </div>
</div>
@endSection