@extends('main')
@section('content')


<div class="container mx-auto p-6">
    <div class="flex flex-col lg:flex-row">
      <div class="w-full lg:w-7/12">
        <h1 class="text-2xl  mt-4 text-center lg:text-start text-red-900">Team of Experts</h1>
      </div>
      <div class="w-full lg:w-5/12 flex flex-col lg:flex-row justify-end items-center mt-4 lg:mt-0">
        <nav class="text-sm text-gray-500">
          <a href="#" class="hover:underline">Home</a> &gt;
          <a href="#" class="hover:underline">CSR</a>
        </nav>
      </div>
    </div>


    <div class="container mx-auto">
      <p class="mb-8">
          As a part of CSR initiative taken by Suraksha Diagnostics Private Limited, Saraswati Sishu mandir school buildings have been gifted to the children of Raipur & Dharana in Bankura (West Bengal)
      </p>

      <!-- School 1 -->
      <div class="mb-8">
          <h2 class=" text-red-900 text-lg font-bold">School Name : Saraswati Sishu Mandir</h2>
          <p><span class="font-semibold">Location :</span> Raipur</p>
          <p><span class="font-semibold">Distance from Kolkata :</span> 220km to Bankura. From Bankura it’s a drive of 58km to the school in Raipur</p>
          <p><span class="font-semibold">Number of Students :</span> Before Construction 307 & after Construction 350</p>
          <p><span class="font-semibold">Number of Teachers :</span> 6 Males & 7 Females</p>
          <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
              <div>
                  <img src="https://via.placeholder.com/150" alt="Before Construction" class="w-full h-auto rounded">
                  <p class="text-center mt-2">Before Construction</p>
              </div>
              <div>
                  <img src="https://via.placeholder.com/150" alt="During Construction" class="w-full h-auto rounded">
                  <p class="text-center mt-2">During Construction</p>
              </div>
              <div>
                  <img src="https://via.placeholder.com/150" alt="After Construction" class="w-full h-auto rounded">
                  <p class="text-center mt-2">After Construction</p>
              </div>
          </div>
      </div>

      <!-- School 2 -->
      <div class="mb-8">
          <h2 class=" text-red-900 text-lg font-bold">School Name : Saraswati Sishu Mandir</h2>
          <p><span class="font-semibold">Location :</span> Dharana</p>
          <p><span class="font-semibold">Distance from Kolkata :</span> 130km to Medinipur. From Medinipur it’s a drive of 7km to the school in Dharana</p>
          <p><span class="font-semibold">Number of Students :</span> Before Construction 150 & after Construction 210</p>
          <p><span class="font-semibold">Number of Teachers :</span> 4 Males & 3 Females</p>
          <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
              <div>
                  <img src="https://via.placeholder.com/150" alt="Before Construction" class="w-full h-auto rounded">
                  <p class="text-center mt-2">Before Construction</p>
              </div>
              <div>
                  <img src="https://via.placeholder.com/150" alt="During Construction" class="w-full h-auto rounded">
                  <p class="text-center mt-2">During Construction</p>
              </div>
              <div>
                  <img src="https://via.placeholder.com/150" alt="After Construction" class="w-full h-auto rounded">
                  <p class="text-center mt-2">After Construction</p>
              </div>
          </div>
      </div>

      <div class="mb-8">
          <p><span class="font-semibold">Total Investment for Building Construction :</span> Rs: 50 Lacs.</p>
      </div>

      <div class="mb-8">
          <h2 class=" text-red-900 text-lg font-bold">INAUGURAL PROGRAMME :</h2>
          <ul class="list-disc list-inside">
              <li>Eye camp organized by Shankar Netralaya at Dharana</li>
              <li>Blanket distribution to underprivileged villages</li>
              <li>Cultural program by school students</li>
              <li>Participation of teachers from schools of Rasulpal, Mandalkuli, Pirorganj More, Fuklusima, Madhavpur & Jhilimi</li>
          </ul>
      </div>
  </div>

  </div>

@endsection
