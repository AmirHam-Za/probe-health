<nav class="">
    <div class="bg-red-900 p-1">
        <div class="container  mx-auto flex justify-between items-center">
            <p class="mx-2 text-sm sm:text-base text-gray-100">QUICK LINKS | +880 1322 882 910
            </p>
            <div class="bg-red-900">
                <div class="container mx-auto flex justify-between items-center">
                    <p class="mx-2 py-1 text-sm sm:text-base text-gray-100">
                        <i class="fas fa-sign-in-alt"></i> Login |
                        <i class="fas fa-shopping-cart"></i> Cart
                    </p>
                </div>
            </div>
        </div>
    </div>


    <style>
        @media (max-width: 768px) {
            .small-image {
                height: 24px;
                width: auto; /* maintain aspect ratio */
            }
        }
    </style>
    <div class="container mx-auto flex items-center justify-between bg-white p-1 ">
        <div class="my-1 md:mb-0">
            <a href="{{ route('home') }}">
                <img src="https://uddipanprobe.com/public/custom/img/probelogo.png" alt="Probelogo" class="small-image">
            </a>
        </div>

        <div class="flex ">
            <img class="small-image  md:mr-4" src="https://www.surakshanet.com/images/cap-logo-new1.jpg?v=4" alt="CAP Logo">
            <img class="small-image  md:mr-4" src="https://www.surakshanet.com/images/nabl-newlogo.png?v=1" alt="NABL Logo">
            <img class="small-image" src="https://www.surakshanet.com/images/Suraksha%2030%20Years%20Logo%20blue.png?v=4" alt="Suraksha 30 Years Logo">
        </div>
    </div>

    <div class="bg-red-900 flex flex-col justify-center">
        <div class="container mx-auto">
            <div class="flex justify-between px-10 text-gray-100 font-semibold">
                <div class="hidden md:flex">
                    <ul class="flex gap-4  my-2 list-none">
                        <li class=" hover:border-b-2"><a href="{{ route('home') }}">Home</a></li>
                        <li class="">About us</li>
                        <li class=" hover:border-b-2"><a href="{{ route('services') }}">Centers</a></li>
                        <li class=" hover:border-b-2"><a href="{{ route('center') }}">Centers</a></li>
                        <li class=" hover:border-b-2"><a href="{{ route('find-test') }}">Find a Test</a></li>
                        <li class=" hover:border-b-2"><a href="{{ route('home-collection') }}">Home Collection</a></li>
                        <li class=" hover:border-b-2"><a href="{{ route('find-doctor') }}">Consult a doctor</a></li>
                        <li class=" hover:border-b-2"><a href="{{ route('health.package') }}">Health packages</a></li>
                        <li>Contact us</li>
                    </ul>
                </div>
                <button class="md:hidden text-2xl text-gray-100" id="menu-toggle">
                    ☰
                </button>
            </div>
        </div>
    </div>


    <div class="bg-red-900 bg-opacity-80 md:hidden" id="mobile-menu">
        <div class="container mx-auto">
            <ul class="flex flex-col items-center space-y-2 py-4 text-gray-100">
                <li class="hover:border-b-4"><a href="{{ route('home') }}">Home</a></li>
                <li class="hover:border-b-4"><a href="{{ route('find-test') }}">Find a Test</a></li>
                <li class="hover:border-b-4"><a href="{{ route('home-collection') }}">Home Collection</a></li>
                <li class="hover:border-b-4"><a href="{{ route('find-doctor') }}">Consult a doctor</a></li>
                <li>About us</li>
                <li>Service</li>
                <li>Centers</li>
                <li>Health packages</li>
                <li>Contact us</li>
            </ul>
        </div>
    </div>


    <script>
        const menuToggle = document.getElementById('menu-toggle');
          const mobileMenu = document.getElementById('mobile-menu');

          menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
          });

          // Initially hide the mobile menu
          mobileMenu.classList.add('hidden');
    </script>

</nav>
