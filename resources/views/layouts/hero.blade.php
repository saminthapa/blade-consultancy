<section class="relative min-h-screen bg-gradient-to-br from-blue-100 via-white to-purple-100 py-20 md:py-28 overflow-hidden">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 items-center gap-16 relative z-10">

        <!-- Image First on Mobile -->
        <div data-aos="fade-left" class="order-1 md:order-2">
            <img src="{{ asset('images/logo.png') }}" alt="Study Abroad Illustration" class="w-full max-w-xl mx-auto">
        </div>

        <!-- Text Second on Mobile -->
        <div data-aos="fade-right" class="order-2 md:order-1 space-y-6 text-center md:text-left">
            <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold text-gray-700 leading-tight">
                Study Abroad with Confidence<br>
                Begin Your Global Journey
            </h1>
            <p class="text-lg sm:text-xl text-gray-700">
                At <strong>Yatrax Consultancy</strong>, we simplify your path to international education with
                personalized guidance, university admissions, and expert visa support.
            </p>

            <div class="pt-4 flex flex-col sm:flex-row sm:justify-center md:justify-start space-y-4 sm:space-y-0 sm:space-x-6">
                <a href="/#services" class="bg-blue-700 text-white px-8 py-4 rounded-xl text-lg font-semibold shadow-lg hover:bg-blue-800 transition-transform transform hover:-translate-y-1 text-center">
                    Explore Services
                </a>
                <a href="/#contact" class="bg-gray-100 text-blue-700 px-8 py-4 rounded-xl text-lg font-semibold shadow-lg hover:bg-white transition-transform transform hover:-translate-y-1 text-center">
                    Talk to an Expert
                </a>
            </div>
        </div>
    </div>

    <!-- Decorative Gradient Circles -->
    <div class="absolute top-24 left-8 w-64 h-64 bg-gradient-to-tr from-blue-400 to-indigo-500 opacity-20 rounded-full blur-3xl animate-pulse -z-10"></div>
    <div class="absolute bottom-16 right-8 w-80 h-80 bg-gradient-to-br from-purple-400 to-pink-500 opacity-15 rounded-full blur-3xl animate-spin-slow -z-10"></div>


<div class="overflow-hidden py-6 bg-gray-100">
    <div class="flex animate-scroll space-x-8 w-max">
        @foreach(['usa', 'uk', 'canada', 'australia', 'japan', 'germany', 'south-korea', 'newzealand','italy','denmark','ireland'] as $flag)
            <img src="{{ asset('images/' . $flag . '.png') }}" alt="{{ $flag }}" class="h-12 w-auto object-contain">
        @endforeach

        <!-- Duplicate for seamless infinite loop -->
        @foreach(['usa', 'uk', 'canada', 'australia', 'japan', 'germany', 'south-korea', 'newzealand','italy','denmark','ireland'] as $flag)
            <img src="{{ asset('images/' . $flag . '.png') }}" alt="{{ $flag }}" class="h-12 w-auto object-contain">
        @endforeach
    </div>

    <style>
        @keyframes scroll {
            0%   { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
        .animate-scroll {
            animation: scroll 25s linear infinite;
        }
    </style>
</div>

</section>

