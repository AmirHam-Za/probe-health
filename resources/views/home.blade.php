@extends('main')
@section('content')

<section class=" container mx-auto slider">
    <div class="flex flex-col md:flex-row">
        <div class="w-full md:w-8/12 p-4">
            <img class="w-full rounded-lg shadow-md"
                src="https://www.surakshanet.com/images/Web%20Banner%20W%20700px%20X%20H%20383.547px%20aw-01.jpg?v=1"
                alt="">
        </div>
        <div class="w-full md:w-6/12 px-4">
            <div class="w-full">
                <div class="bg-white rounded-lg shadow-lg w-full max-w-md">
                    <h2 class="text-xl  mb-4 my-4 text-center">Book a Home Visit Now!</h2>
                    <form action="#" method="POST">
                        <div class="mb-6">
                            <label for="name" class="block text-gray-700 font-semibold mb-2"></label>
                            <input type="text" id="name" name="name"
                                class="w-full px-4 py-2 b h-12 order border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                                placeholder="Full Name">
                        </div>
                        <div class="mb-6">
                            <label for="email" class="block text-gray-700 font-semibold mb-2"></label>
                            <input type="email" id="email" name="email"
                                class="w-full px-4 py- h-12 2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                                placeholder="Mobile Number">
                        </div>
                        <div class="mb-6">
                            <label for="password" class="block text-gray-700 font-semibold mb-2"></label>
                            <input type="password" id="password" name="password"
                                class="w-full h-12  px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                                placeholder="Email Id">
                        </div>
                        <div class="mb-6">
                            <label for="password" class="block text-gray-700 font-semibold mb-2"></label>
                            <input type="password" id="password" name="password"
                                class="w-full h-12  px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                                placeholder="Enter Test Name">
                        </div>

                        <div class="flex items-center justify-between">
                            <button type="submit"
                                class=" w-full bg-red-900 text-white px-4 py-2 hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Get
                                a callback</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <style>
        .item-with-line {
            position: relative;
        }

        .item-with-line::after {
            content: '';
            position: absolute;
            top: 10%;
            right: -50px;
            height: 80%;
            width: 2px;
            background-color: gray;
        }

        .item-with-line:last-of-type::after {
            display: none;
            /* Removes the line after the last item */
        }
    </style>

    <div class="my-4 py-4 bg-gray-100 rounded-lg flex flex-col md:flex-row justify-between shadow-lg">
        <div class="w-full md:w-2/12 p-2 flex flex-col justify-center items-center item-with-line">
            <div class="w-24 h-24 flex justify-center items-center border-2 border-gray-600 rounded-full">
                <img src="https://www.surakshanet.com/images/new-home-collection-icon-red.png?v=1" alt="">
            </div>
            <p class="text-center">Book A <br>Home Collection</p>
        </div>
        <div class="w-full md:w-2/12 p-2 flex flex-col justify-center items-center item-with-line">
            <div class="w-24 h-24 flex justify-center items-center border-2 border-gray-600 rounded-full">
                <img src="https://www.surakshanet.com/images/new-home-collection-icon-red.png?v=1" alt="">
            </div>
            <p class="text-center">Book A <br>Home Collection</p>
        </div>
        <div class="w-full md:w-2/12 p-2 flex flex-col justify-center items-center item-with-line">
            <div class="w-24 h-24 flex justify-center items-center border-2 border-gray-600 rounded-full">
                <img src="https://www.surakshanet.com/images/new-home-collection-icon-red.png?v=1" alt="">
            </div>
            <p class="text-center">Book A <br>Home Collection</p>
        </div>
        <div class="w-full md:w-2/12 p-2 flex flex-col justify-center items-center item-with-line">
            <div class="w-24 h-24 flex justify-center items-center border-2 border-gray-600 rounded-full">
                <img src="https://www.surakshanet.com/images/new-home-collection-icon-red.png?v=1" alt="">
            </div>
            <p class="text-center">Book A <br>Home Collection</p>
        </div>
        <div class="w-full md:w-2/12 p-2 flex flex-col justify-center items-center item-with-line">
            <div class="w-24 h-24 flex justify-center items-center border-2 border-gray-600 rounded-full">
                <img src="https://www.surakshanet.com/images/new-home-collection-icon-red.png?v=1" alt="">
            </div>
            <p class="text-center">Book A <br>Home Collection</p>
        </div>
    </div>

    <div class="mt-12 mb-6">
        <h2 class="font-bold text-xl uppercase text-center text-red-900">Find a <span
                class="text-red-600">Test</span>
        </h2>

        <div class="mt-6 flex justify-center">
            <div class="w-6/12">
                <input class="w-full" type="search" name="" id="" placeholder="Search for a test package">
                <button class="mt-4 p-2 w-full bg-red-900 text-gray-100 font-semibold rounded">NEED HELP? Request a
                    Call Back
                    from our Experts</button>
            </div>
        </div>

    </div>
    <div class="mt-12 mb-6">
        <h2 class="font-bold text-xl uppercase text-center text-red-900"><span
                class="text-red-600">Preventive</span>
            Health Packages </h2>
    </div>

    <div class="py-2 flex flex-wrap">
        <!-- card -->
        <div class="w-full sm:w-6/12 lg:w-4/12 px-2 mb-4">
            <div class="p-4 border border-gray-800 rounded-lg">
                <p class="text-red-700">Lorem, ipsum dolor.</p>
                <p class="text-gray-700">Lorem, ipsum dolor.</p>
                <p class="text-red-700 text-2xl font-bold">$ 2000</p>
                <div class="flex flex-col md:flex-row justify-between mt-4">
                    <div class="w-full md:w-1/2 px-2 mb-2 md:mb-0">
                        <button class="p-2 w-full bg-red-900 text-gray-100 font-semibold rounded">Book Now</button>
                    </div>
                    <div class="w-full md:w-1/2 px-2">
                        <button class="p-2 w-full bg-gray-400 text-gray-900 font-semibold rounded">Know
                            More</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- card -->
        <div class="w-full sm:w-6/12 lg:w-4/12 px-2 mb-4">
            <div class="p-4 border border-gray-800 rounded-lg">
                <p class="text-red-700">Lorem, ipsum dolor.</p>
                <p class="text-gray-700">Lorem, ipsum dolor.</p>
                <p class="text-red-700 text-2xl font-bold">$ 2000</p>
                <div class="flex flex-col md:flex-row justify-between mt-4">
                    <div class="w-full md:w-1/2 px-2 mb-2 md:mb-0">
                        <button class="p-2 w-full bg-red-900 text-gray-100 font-semibold rounded">Book Now</button>
                    </div>
                    <div class="w-full md:w-1/2 px-2">
                        <button class="p-2 w-full bg-gray-400 text-gray-900 font-semibold rounded">Know
                            More</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- card -->
        <div class="w-full sm:w-6/12 lg:w-4/12 px-2 mb-4">
            <div class="p-4 border border-gray-800 rounded-lg">
                <p class="text-red-700">Lorem, ipsum dolor.</p>
                <p class="text-gray-700">Lorem, ipsum dolor.</p>
                <p class="text-red-700 text-2xl font-bold">$ 2000</p>
                <div class="flex flex-col md:flex-row justify-between mt-4">
                    <div class="w-full md:w-1/2 px-2 mb-2 md:mb-0">
                        <button class="p-2 w-full bg-red-900 text-gray-100 font-semibold rounded">Book Now</button>
                    </div>
                    <div class="w-full md:w-1/2 px-2">
                        <button class="p-2 w-full bg-gray-400 text-gray-900 font-semibold rounded">Know
                            More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-4 flex flex-col lg:flex-row">
        <div class="w-full lg:w-7/12 p-2">
            <h2 class="font-bold text-xl text-center md:text-left uppercase text-red-600">Lorem ipsum dolor sit amet.</h2>
            <p class="mt-4">Suraksha is a name people readily associate with diagnostic quality and convenience. The
                leading
                diagnostic chain in eastern India, it today ranks among the top 5 nationally with nearly 42 centres
                across
                West
                Bengal, Bihar and Assam. We maintain strict quality protocols in all our centres. We also operate
                centres on
                PPP (Public Private Partnership) basis with the State Government in NRS Medical College & Hospital
                in Kolkata
                and in Shillong, Meghalaya.</p>
            <div class="flex justify-center">
                <button class="mt-4 p-2 w-[200px] bg-red-900 text-gray-100 font-semibold rounded">Read More</button>
            </div>
        </div>
        <div class="w-full lg:w-4/12 p-2">
            <div class="aspect-w-16 aspect-h-9">
                <iframe class="w-full h-full" src="https://www.youtube.com/embed/tgbNymZ7vqY"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <div class="mt-10"></div>

</section>

<div class="bg-blue-200">
    <div class="pt-8 pb-10 mb-4 container mx-auto flex flex-col justify-center">
        <h2 class="font-bold text-xl uppercase text-center text-red-900">Get a <span
                class="text-red-600">franchise</span></h2>
        <div class="mt-4 flex flex-wrap justify-center">
            <div class="w-full md:w-10/12 flex flex-wrap justify-center bg-blue-200">

                <div class="w-full md:w-4/12 p-3">
                    <div class="h-auto py-4 px-2 border border-gray-800 text-center rounded-lg">
                        <h2 class="text-xl text-red-900">Lorem, ipsum dolor.</h2>
                        <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
                <div class="w-full md:w-4/12 p-3">
                    <div class="h-auto py-4 px-2 border border-gray-800 text-center rounded-lg">
                        <h2 class="text-xl text-red-900">Lorem, ipsum dolor.</h2>
                        <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
                <div class="w-full md:w-4/12 p-3">
                    <div class="h-auto py-4 px-2 border border-gray-800 text-center rounded-lg">
                        <h2 class="text-xl text-red-900">Lorem, ipsum dolor.</h2>
                        <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>

            </div>
        </div>

        <div class="flex justify-center">
            <button class="mt-4 p-2 w-[200px] bg-red-900 text-gray-100 font-semibold rounded">Learn More</button>
        </div>
    </div>
</div>

<div class="container mx-auto mt-20">
    <h2 class="font-bold text-xl uppercase text-center text-red-900">Corporate<span class="text-red-600">
            Partners</span></h2>
    <div class="mt-16 flex flex-col lg:flex-row">
        <div class="w-full lg:w-7/12 p-2">
            <h2 class="text-xl font-semibold uppercase text-red-900">What can we do for your company?</h2>
            <p class="mt-4">
                We entertain tenders for both Pathology and Non-Pathology tests
                Employees get discount cards
                Pre-Employment Check-Ups
                Annual Health Check-Ups for employees
                On-site (office) and Off-site (factory) Health Camps
                And other benefits tailor-made to suit your company's employees
            </p>
            <button class="mt-4 p-2 w-[200px] bg-red-900 text-gray-100 font-semibold rounded">Download
                Presentation</button>
        </div>
        <div class="w-full lg:w-4/12 p-2 flex justify-end">
            <div class="aspect-w-16 aspect-h-9 w-full">
                <iframe class="w-full h-full" src="https://www.youtube.com/embed/tgbNymZ7vqY"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

@endsection


