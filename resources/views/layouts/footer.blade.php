<footer class="bg-gray-900 text-gray-200 pt-16 pb-10">
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-10">

        <!-- Logo & About -->
        <div class="space-y-4">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-36">
            <p class="text-sm text-gray-400">
                Yatrax Consultancy — guiding your journey to global education with trusted experience and expert support.
            </p>
        </div>

        <!-- Services -->
        <div>
            <h4 class="text-lg font-semibold text-white mb-4">Services</h4>
            <ul class="space-y-2 text-sm text-gray-400">
                <li><a href="/#services" class="hover:text-white transition">Career Counseling</a></li>
                <li><a href="/#services" class="hover:text-white transition">Test Preparation</a></li>
                <li><a href="/#services" class="hover:text-white transition">Visa Assistance</a></li>
                <li><a href="/#services" class="hover:text-white transition">University Selection</a></li>
            </ul>
        </div>

        <!-- Quick Links -->
        <div>
            <h4 class="text-lg font-semibold text-white mb-4">Quick Links</h4>
            <ul class="space-y-2 text-sm text-gray-400">
                <li><a href="/" class="hover:text-white transition">Home</a></li>
                <li><a href="/#about" class="hover:text-white transition">About Us</a></li>
                <li><a href="/#testimonials" class="hover:text-white transition">Testimonials</a></li>
                <li><a href="/#contact" class="hover:text-white transition">Contact Us</a></li>
            </ul>
        </div>

        <!-- Contact Info & Social -->
        <div class="space-y-4">
            <h4 class="text-lg font-semibold text-white">Contact</h4>
            <p class="text-sm text-gray-400">Bhatarpur, Nepal<br>+977-9768887374<br>info@yatrax.com.np</p>

            <div class="flex space-x-4 mt-4">
                <a href="#" class="text-gray-400 hover:text-white transition">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-white transition">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-white transition">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-white transition">
                    <i class="fab fa-tiktok"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="mt-12 text-center text-sm text-gray-500 border-t border-gray-700 pt-6">
        &copy; {{ date('Y') }} Yatrax Consultancy. All rights reserved.
    </div>
</footer>
