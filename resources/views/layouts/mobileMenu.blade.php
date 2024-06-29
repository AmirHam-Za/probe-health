{{-- MOBILE MENU START --}}

<nav class="lg:hidden ">
    <div class="bg-white text-black p-4 relative">
        <div class="flex justify-between items-center">
            <div class="flex gap-2">
                <button id="mobile-menu-button" class="focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7">
                        </path>
                    </svg>
                </button>
                <a href="{{ route('home') }}">
                    <img src="{{ asset('public/images/logos/probe_favicon.png') }}" alt="" class="h-10 lg:h-16">
                </a>
            </div>
            <div class="">
                <div
                class="h-8 mr-2 gradient-login border border-gray-400 text-white px-4 rounded-full inline-flex items-center justify-between">

                <div class="flex">
                    <a href="{{ route('login') }}"
                        class="mx-2 text-gray-100 flex items-center border-b-2 border-transparent hover-underline-animation">Login
                        <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </a>
                    <p class="mx-2 text-gray-100">|</p>
                    <a href="#"
                        class="mx-2 text-gray-100 flex items-center border-b-2 border-transparent  hover-underline-animation">Cart
                        <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 3h2l.401 2.004M7 13h10l3-9H6.401L5.21 4H3m0 0h2m2 0h12.358a1 1 0 01.95 1.316l-1.43 4.286M7 13V6h8m0 0v7m-8 4h8m-4 0v3">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
            </div>

        </div>
    </div>

    <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 hidden"></div>

    <div id="mobile-menu"
        class="fixed inset-y-0 left-0 bg-pink-100 w-4/5 max-w-sm shadow-lg transform -translate-x-full transition-transform duration-300 ease-in-out">
<div class="bg-white pb-2 pt-1 flex items-center">
    <a href="{{ route('home') }}">
        <img src="{{ asset('public/images/logos/probe_logo.jpeg') }}" alt="" class="h-10 lg:h-16">
    </a>
    <button id="close-menu-button" class="absolute top-4 right-4 focus:outline-none">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
    </button>
</div>
        <ul class="flex flex-col space-y-2 font-semibold mt-8 p-4">
            <li class="text-gray-800"><a href="{{ route('home') }}" class="block px-4 py-2">Home</a></li>
            <li class="relative ">
                <a href="#" class="block px-4 py-2 flex items-center text-gray-800">About us
                    <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </a>
                <ul class="ml-4 hidden">
                    <li class="text-sm text-gray-700"><a href="{{ route('int.health.card') }}" class="block px-4 py-2">International Health Card</a>
                    </li>
                    <li class="text-sm text-gray-700"><a href="{{ route('diagnostics') }}" class="block px-4 py-2">Diagnostic</a></li>
                    <li class="text-sm text-gray-700"><a href="https://uddipanprobe.com/" class="block px-4 py-2" target="_blank">PROBE Bangladesh LTD
                            link</a></li>
                </ul>
            </li>
            <li class="relative ">
                <a href="#" class="block px-4 py-2 flex items-center text-gray-800">Product
                    <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </a>
                <ul class="ml-4 hidden">
                    <li class="text-sm text-gray-700"><a href="{{ route('latest.products') }}" class="block px-4 py-2">Latest Products</a></li>
                    <li class="text-sm text-gray-700"><a href="{{ route('latest.products') }}" class="block px-4 py-2">Health Products</a></li>
                    <li class="text-sm text-gray-700"><a href="{{ route('latest.products') }}" class="block px-4 py-2">Popular</a></li>
                </ul>
            </li>
            <li class="relative">
                <a href="#" class="block px-4 py-2 flex items-center text-gray-800">Service
                    <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </a>
                <ul class="ml-4 hidden">
                    <li class="text-sm text-gray-700"><a href="{{ route('diagnostic.service') }}" class="block px-4 py-2">Diagnostic service</a></li>
                    <li class="text-sm text-gray-700"><a href="#" class="block px-4 py-2">Telemedicine service</a></li>
                    <li class="text-sm text-gray-700"><a href="{{ route('consult.doctor') }}" class="block px-4 py-2">Online Doctor's</a></li>
                </ul>
            </li>
            <li class="relative">
                <a href="#" class="block px-4 py-2 flex items-center text-gray-800">Support
                    <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </a>
                <ul class="ml-4 hidden">
                    <li class="text-sm text-gray-700"><a href="#" class="block px-4 py-2">Support-1</a></li>
                    <li class="text-sm text-gray-700"><a href="#" class="block px-4 py-2">Support-2</a></li>
                    <li class="text-sm text-gray-700"><a href="#" class="block px-4 py-2">Support-3</a></li>
                </ul>
            </li>
            <li><a href="{{ route('franchise.form.get') }}" class="block px-4 py-2 text-gray-800">Franchise Registration</a></li>
        </ul>
    </div>
</nav>
<style>
    #overlay {
        z-index: 40;
        /* Adjust as needed */
    }

    #mobile-menu {
        z-index: 50;
        /* Adjust as needed */
    }

    #mobile-menu.hidden {
        transform: translateX(-100%);
    }

    #mobile-menu-button,
    #close-menu-button {
        z-index: 40;
        /* Ensure buttons are above overlay and menu */
    }
</style>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const mobileMenuButton = document.getElementById("mobile-menu-button");
    const mobileMenu = document.getElementById("mobile-menu");
    const overlay = document.getElementById("overlay");
    const closeMenuButton = document.getElementById("close-menu-button");

    function openMenu() {
        mobileMenu.classList.remove("hidden");
        overlay.classList.remove("hidden");
        setTimeout(() => {
            mobileMenu.classList.remove("-translate-x-full");
        }, 10); // Allow time for the class to be added
    }

    function closeMenu() {
        mobileMenu.classList.add("-translate-x-full");
        overlay.classList.add("hidden");
        setTimeout(() => {
            mobileMenu.classList.add("hidden");
        }, 300); // Match the duration of the transition
    }

    mobileMenuButton.addEventListener("click", openMenu);
    closeMenuButton.addEventListener("click", closeMenu);
    overlay.addEventListener("click", closeMenu);

    // Toggle visibility of submenus and close others
    const submenuToggles = document.querySelectorAll('.relative > a');
    submenuToggles.forEach(toggle => {
        toggle.addEventListener('click', function(event) {
            event.preventDefault();
            const submenu = toggle.nextElementSibling;

            // Close other submenus
            document.querySelectorAll('.relative ul').forEach(ul => {
                if (ul !== submenu) {
                    ul.classList.add('hidden');
                }
            });

            // Toggle the clicked submenu
            submenu.classList.toggle('hidden');
        });
    });
});

</script>

{{-- MOBILE MENU END --}}
