@extends('main')
@section('content')

<div class="mt-10"></div>

<div class="container mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg">
      <h1 class="text-xl font-bold text-gray-900 mb-4">Home Collection <span class="text-red-900">Services</span></h1>
      <h2 class="text-xl font-semibold text-gray-700 mb-6">TO BOOK YOUR HOME COLLECTION, PLEASE FILL UP THE FORM BELOW:</h2>

      <form action="#" method="POST">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
          <div>
            <label for="name" class="block text-gray-700 font-semibold mb-2">Name *</label>
            <input type="text" id="name" name="name" class="w-full px-3 py-2 border rounded shadow-sm" placeholder="Your Name">
          </div>
          <div>
            <label for="mobile" class="block text-gray-700 font-semibold mb-2">Mobile No *</label>
            <input type="text" id="mobile" name="mobile" class="w-full px-3 py-2 border rounded shadow-sm" placeholder="Mobile No">
          </div>
          <div>
            <label for="email" class="block text-gray-700 font-semibold mb-2">Email Address</label>
            <input type="email" id="email" name="email" class="w-full px-3 py-2 border rounded shadow-sm" placeholder="Email ID">
          </div>
          <div>
            <label for="pincode" class="block text-gray-700 font-semibold mb-2">Pincode</label>
            <input type="text" id="pincode" name="pincode" class="w-full px-3 py-2 border rounded shadow-sm" placeholder="Zipcode">
          </div>
        </div>

        <p class="text-gray-700 mb-4">If you know the test details please select the test OR upload prescription OR leave them blank and our executives will call you to know the details</p>

        <div class="flex flex-col md:flex-row items-center gap-4 mb-6">
          <div class="flex items-center">
            <input type="radio" id="select-test" name="test-option" class="mr-2">
            <label for="select-test" class="text-gray-700">Select Test</label>
          </div>
          <div class="flex items-center">
            <input type="radio" id="upload-prescription" name="test-option" class="mr-2">
            <label for="upload-prescription" class="text-gray-700">Upload Prescription</label>
          </div>
          <div class="flex items-center">
            <input type="radio" id="covid-test" name="test-option" class="mr-2">
            <label for="covid-test" class="text-gray-700">COVID-19 Qualitative RTPCR</label>
          </div>
          <div class="flex items-center">
            <input type="radio" id="not-sure" name="test-option" class="mr-2">
            <label for="not-sure" class="text-gray-700">Not Sure What Test is to be Done?</label>
          </div>
        </div>

        <div class="mb-6">
          <label for="select-tests" class="block text-gray-700 font-semibold mb-2">Select Tests / Packages</label>
          <input type="text" id="select-tests" name="select-tests" class="w-full px-3 py-2 border rounded shadow-sm" placeholder="Select Tests / Packages">
        </div>

        <div class="text-center">
          <button type="submit" class="px-6 py-2 bg-red-900 text-white font-semibold rounded shadow-lg">Submit</button>
        </div>
      </form>
    </div>

@endsection
