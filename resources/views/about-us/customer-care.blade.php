@extends('main')
@section('content')


<div class="container mx-auto p-6">
    <div class="flex flex-col lg:flex-row">
      <div class="w-full lg:w-7/12">
        <h1 class="text-2xl  mt-4 text-center lg:text-start text-red-900">Customer Care</h1>
      </div>
      <div class="w-full lg:w-5/12 flex flex-col lg:flex-row justify-end items-center mt-4 lg:mt-0">
        <nav class="text-sm text-gray-500">
          <a href="#" class="hover:underline">Home</a> &gt;
          <a href="#" class="hover:underline">Customer Care</a>
        </nav>
      </div>
    </div>

    <div class="container mx-auto p-4">

      <section class="mb-8">
        <p class="mb-4">
          Suraksha Diagnostics takes extra care in ensuring customer satisfaction since it believes in reducing the pain
          of patients who walk in each day to get a clear assessment of their health condition. The main aim of Team
          Suraksha is to help patients and their families have a hassle-free experience during tests being conducted in
          our centers. </p>
      </section>

      <section class="mb-8">
        <h2 class="text-xl text-red-900 mb-2">HELPLINE</h2>
        <p class="mb-4">
          We have a dedicated CRM team that answers every call you make to any of our helpline numbers. The main aim of
          these representatives is to familiarize you with the testing protocol in our centers. They provide you with
          exhaustive information of the preparations required before every test and also help you book your slot in
          advance.
        </p>
        <p class="text-red-900 mb-2"><span class="font-semibold">Active Hours:</span> Monday – Sunday: 06:30 am. – 08:00
          pm.</p>
        <p class="my-4">Our State-wise Helpline Numbers are as follows:</p>
        <p class="">West Bengal :<span class="font-semibold">033-6619-1000</span></p>
        <p class="">Bihar :<span class="font-semibold">033-6619-1000</span></p>
      </section>

      <section class="mb-8">
        <h2 class="text-xl text-red-900 mb-2">ONLINE FEEDBACK:</h2>
        <p class="mb-4">
          Customers are encouraged to leave their feedback in our website by filling in the Feedback Form and relating
          to us any complaints or suggestions that they may have regarding our services. Each complaint is looked into
          by our customer care department and meticulous details of the same are obtained.
        </p>
      </section>
      <section class="mb-8">
        <h2 class="text-xl text-red-900 mb-2">SOCIAL MEDIA:</h2>
        <p class="mb-4">
          Our social media profiles are a hub of activity where patients, doctors and employees interact openly and
          share their suggestions feedback and ideas.
        </p>

        <p>Give us your feedback by messaging us here:</p>
        <div class="social-icons flex justify-center lg:justify-start mt-8 space-x-4">
          <a href="https://www.facebook.com" target="_blank" class="text-blue-600"><i
              class="fab fa-facebook fa-2x"></i></a>
          <a href="https://www.twitter.com" target="_blank" class="text-blue-400"><i
              class="fab fa-twitter fa-2x"></i></a>
          <a href="https://www.instagram.com" target="_blank" class="text-pink-500"><i
              class="fab fa-instagram fa-2x"></i></a>
          <a href="https://www.linkedin.com" target="_blank" class="text-blue-700"><i
              class="fab fa-linkedin fa-2x"></i></a>
        </div>
    </div>
    </section>

    <section class="">
      <h2 class="text-xl text-red-900 mb-2">REALTIME CUSTOMER CARE:</h2>
      <p class="mb-4">
        Team Suraksha takes immense pride in pulling together all coordinates that bring a 360 degree approach to its
        customer care. Any patient who is facing trouble during test procedure and has brought it to our notice can
        receive immediate assistance from the staff at both the Head Office and the respective centre.
      </p>
      <p class="mb-4">
        In short, whenever you walk into Suraksha, you can be sure of <strong>100% value. 100% assistance. 100%
          accuracy..</strong>
      </p>
    </section>
  </div>


@endsection
