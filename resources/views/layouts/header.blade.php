<nav class="bg-gray-50 shadow fixed w-full z-50">

    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">

        <!-- Logo -->
        {{-- <img src="{{ asset('images/logo.png') }}" alt="YatraX Logo" class="w-36 h-20"> --}}

        <a href="/" class="text-2xl font-bold text-blue-700 hover:text-blue-800 transition">YatraX Consultancy</a>


        <!-- Navbar -->
        <div class="space-x-6 text-gray-700 text-md font-medium hidden md:block">
            <a href="/" class="hover:text-blue-600 transition">Home</a>
            <a href="/#about" class="hover:text-blue-600 transition">About Us</a>
            <a href="/#services" class="hover:text-blue-600 transition">Services</a>
            <a href="/#testimonials" class="hover:text-blue-600 transition">Testimonails</a>
            <a href="/#contact" class="bg-red-600 hover:bg-red-700 p-2 rounded-md text-white transition">Contact Us</a>
        </div>

        <!-- Toggle/Icon -->
        <div class="md:hidden">
            <button id="menu-toggle" class="text-gray-700 focus:text-blue-600">

                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>

            </button>

        </div>

    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden px-4 pb-4 hidden">
        <a href="/" class="block py-2 text-gray-700 hover:text-blue-600">Home</a>
        <a href="/#about" class="block py-2 text-gray-700 hover:text-blue-600">About</a>
        <a href="/#services" class="block py-2 text-gray-700 hover:text-blue-600">Services</a>
        <a href="/#testimonials" class="block py-2 text-gray-700 hover:text-blue-600">Testimonials</a>
        <a href="/#contact" class="block py-2 text-gray-700 hover:text-blue-600">Contact</a>

    </div>

    <script>
        document.addEventListener('DOMContentLoaded',function(){
            const toggle = document.getElementById('menu-toggle');
            const menu = document.getElementById('mobile-menu');
            toggle.addEventListener('click', ()=>{
                menu.classList.toggle('hidden');
            });
        });
    </script>
</nav>
