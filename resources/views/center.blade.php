@extends('main')
@section('content')

<div class="">
    <!-- Map Section -->
    <div class="relative">
      <iframe
          class="w-full h-64"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3649.875262647565!2d90.3665094149633!3d23.774719084580195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x374f967d9d9d25d3%3A0x5e0c8ec5d7e7b921!2sGoogle%20Bangladesh!5e0!3m2!1sen!2sbd!4v1634035275961!5m2!1sen!2sbd"
          allowfullscreen=""
          loading="lazy">
      </iframe>
  </div>

<div class="container mx-auto p-6">


  <div class="flex flex-col lg:flex-row text-center lg:text-start">
    <div class="w-full lg:w-7/12">
        <h1 class="text-2xl  mt-4 text-center lg:text-start text-red-900">Krishnanagar</h1>
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

  <!-- Address and Description Section -->
  <div class="mt-6 flex flex-col lg:flex-row">




      <div class="w-full lg:w-8/12">
              <strong>Suraksha Diagnostics - Kestopur</strong><br>
              BB - 99 Prafulla Kanan,<br>
              VIP Park,<br>
              Kolkata - 700101<br>
              Helpline No : 033-6619-1000
          </address>
          <p class="mt-4">
              Our illustrious Kestopur center welcomes you with the best diagnostic services in Eastern India.
              Patients walking into our center hail from surrounding areas like Ghoshpara, Majherpara, Samarpally,
              Krishnapur, and Tarulia. The best place for one-on-one consultation with doctors, Kestopur center
              has the highest OPD walk-ins in our records.
          </p>
      </div>

  </div>

  <!-- Services Section -->
  <div class="mt-8">
      <h2 class="text-xl font-bold">SERVICES AVAILABLE:</h2>
      <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-6 mt-4">
          <div class="flex flex-col items-center">
              <img src="https://via.placeholder.com/100" alt="CT Scan" class="mb-2">
              <span>CT Scan</span>
          </div>
          <div class="flex flex-col items-center">
              <img src="https://via.placeholder.com/100" alt="USG" class="mb-2">
              <span>USG</span>
          </div>
          <div class="flex flex-col items-center">
              <img src="https://via.placeholder.com/100" alt="X-Ray" class="mb-2">
              <span>X-Ray</span>
          </div>
          <div class="flex flex-col items-center">
              <img src="https://via.placeholder.com/100" alt="OPG" class="mb-2">
              <span>OPG</span>
          </div>
          <div class="flex flex-col items-center">
              <img src="https://via.placeholder.com/100" alt="Cardiology" class="mb-2">
              <span>Cardiology</span>
          </div>
          <div class="flex flex-col items-center">
              <img src="https://via.placeholder.com/100" alt="Gastroenterology" class="mb-2">
              <span>Gastroenterology</span>
          </div>
          <div class="flex flex-col items-center">
              <img src="https://via.placeholder.com/100" alt="Neurology" class="mb-2">
              <span>Neurology</span>
          </div>
          <div class="flex flex-col items-center">
              <img src="https://via.placeholder.com/100" alt="Pathology" class="mb-2">
              <span>Pathology</span>
          </div>
      </div>
  </div>
</div>
</div>

@endsection
