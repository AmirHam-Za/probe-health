@extends('main')
@section('content')

<section class=" container mx-auto slider">

    <div class="mt-8 flex flex-col lg:flex-row text-center lg:text-start">
      <div class="w-full lg:w-7/12">
        <h2 class="text-2xl uppercase text-center lg:text-start text-red-900"><span class="text-red-600">Health</span>
          package </h2>
      </div>
      <div class="w-full lg:w-5/12 flex flex-col lg:flex-row justify-end items-center mt-4 lg:mt-0">
          <nav class="text-sm text-gray-500">
              <a href="#" class="hover:underline">Home</a> &gt;
              <a href="#" class="hover:underline">Health package</a>

          </nav>
      </div>
  </div>
  </section>

    <div class="container mx-auto py-2 flex flex-wrap">
      <!-- card -->


      <div class="w-full sm:w-6/12 lg:w-4/12 px-2 mb-4">
        <div class="relative p-4 border border-gray-800 rounded-lg">
            <div class="absolute top-0 right-0 m-4">
                <img src="https://via.placeholder.com/50" alt="Placeholder Image" class="w-12 h-12 rounded-full">
            </div>
            <p class="text-red-900 font-semibold mb-8">Women Gold Plus</p>
            <p class="flex text-gray-700 mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-900">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>
                &ensp;
                Lorem, ipsum dolor.
            </p>
            <p class="flex text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-900">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                </svg>
                &ensp;
                Lorem, ipsum dolor.
            </p>
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
        <div class="relative p-4 border border-gray-800 rounded-lg">
            <div class="absolute top-0 right-0 m-4">
                <img src="https://via.placeholder.com/50" alt="Placeholder Image" class="w-12 h-12 rounded-full">
            </div>
            <p class="text-red-900 font-semibold mb-8">Women Gold Plus</p>
            <p class="flex text-gray-700 mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-900">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>
                &ensp;
                Lorem, ipsum dolor.
            </p>
            <p class="flex text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-900">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                </svg>
                &ensp;
                Lorem, ipsum dolor.
            </p>
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
        <div class="relative p-4 border border-gray-800 rounded-lg">
            <div class="absolute top-0 right-0 m-4">
                <img src="https://via.placeholder.com/50" alt="Placeholder Image" class="w-12 h-12 rounded-full">
            </div>
            <p class="text-red-900 font-semibold mb-8">Women Gold Plus</p>
            <p class="flex text-gray-700 mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-900">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>
                &ensp;
                Lorem, ipsum dolor.
            </p>
            <p class="flex text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-900">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                </svg>
                &ensp;
                Lorem, ipsum dolor.
            </p>
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
        <div class="relative p-4 border border-gray-800 rounded-lg">
            <div class="absolute top-0 right-0 m-4">
                <img src="https://via.placeholder.com/50" alt="Placeholder Image" class="w-12 h-12 rounded-full">
            </div>
            <p class="text-red-900 font-semibold mb-8">Women Gold Plus</p>
            <p class="flex text-gray-700 mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-900">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>
                &ensp;
                Lorem, ipsum dolor.
            </p>
            <p class="flex text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-900">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                </svg>
                &ensp;
                Lorem, ipsum dolor.
            </p>
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
        <div class="relative p-4 border border-gray-800 rounded-lg">
            <div class="absolute top-0 right-0 m-4">
                <img src="https://via.placeholder.com/50" alt="Placeholder Image" class="w-12 h-12 rounded-full">
            </div>
            <p class="text-red-900 font-semibold mb-8">Women Gold Plus</p>
            <p class="flex text-gray-700 mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-900">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>
                &ensp;
                Lorem, ipsum dolor.
            </p>
            <p class="flex text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-900">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                </svg>
                &ensp;
                Lorem, ipsum dolor.
            </p>
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
        <div class="relative p-4 border border-gray-800 rounded-lg">
            <div class="absolute top-0 right-0 m-4">
                <img src="https://via.placeholder.com/50" alt="Placeholder Image" class="w-12 h-12 rounded-full">
            </div>
            <p class="text-red-900 font-semibold mb-8">Women Gold Plus</p>
            <p class="flex text-gray-700 mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-900">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>
                &ensp;
                Lorem, ipsum dolor.
            </p>
            <p class="flex text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-900">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                </svg>
                &ensp;
                Lorem, ipsum dolor.
            </p>
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

@endsection
