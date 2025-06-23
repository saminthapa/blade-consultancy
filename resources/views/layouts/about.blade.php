<section id="about" class="relative py-28 bg-gradient-to-tr from-white via-blue-50 to-white overflow-hidden">
    <!-- Blurred background shape -->
    <div class="absolute -top-24 left-10 w-[500px] h-[500px] bg-purple-200 opacity-20 blur-3xl rounded-full -z-10">
    </div>

    <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 items-center gap-20">

        <!-- Image and floating cards -->
        <div class="relative" data-aos="zoom-in">
            <!-- Decorative blur behind image -->
            <div
                class="absolute -top-10 -left-10 w-72 h-72 bg-gradient-to-br from-blue-200 to-purple-300 opacity-30 blur-3xl rounded-full -z-10">
            </div>

            <!-- Main image -->
            <img src="{{ asset('images/about-logo-r.png') }}" alt="About Us">

            <!-- Floating card 1 -->
            <div
                class="absolute -bottom-8 -left-6 bg-white rounded-xl px-6 py-4 shadow-xl border-l-4 border-blue-600 w-64 animate-float">
                <h4 class="text-lg font-bold text-gray-800">Guided 1000+ Students</h4>
                <p class="text-sm text-gray-500">Towards top universities globally.</p>
            </div>

            <!-- Floating card 2 -->
            <div
                class="absolute -top-6 -right-6 bg-white rounded-xl px-4 py-3 shadow-md border-l-4 border-green-500 w-56 animate-float-slow">
                <h4 class="text-sm font-semibold text-gray-700">✔ Visa Success Rate: 95%</h4>
                <p class="text-xs text-gray-500 mt-1">Proven process & expert counseling</p>
            </div>

            <!-- Floating card 3 -->
            <div
                class="absolute bottom-12 right-0 bg-white rounded-xl px-5 py-3 shadow-md border-l-4 border-yellow-400 w-60 animate-float-mid">
                <h4 class="text-sm font-semibold text-gray-700">Global Partnerships</h4>
                <p class="text-xs text-gray-500 mt-1">200+ Institutions across 15+ countries</p>
            </div>

        </div>

        <!-- Text Content -->
        <div data-aos="fade-left" class="space-y-6">
            <h3 class="text-5xl font-extrabold text-gray-900 leading-tight">
                Turning Study Abroad Dreams<br> Into Reality.
            </h3>
            <p class="text-lg text-gray-700">
                We are a trusted foreign education consultancy helping students shape their global careers. From career
                counseling to university admission and visa processing — we provide end-to-end guidance to make studying
                abroad simple and successful.
            </p>


            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-6">
                <div class="bg-white rounded-lg shadow-md p-5 border-l-4 border-blue-500">
                    <h4 class="font-semibold text-gray-800">Career Counseling</h4>
                    <p class="text-sm text-gray-500 mt-1">We help you choose the right country, course, and university.
                    </p>
                </div>
                <div class="bg-white rounded-lg shadow-md p-5 border-l-4 border-purple-500">
                    <h4 class="font-semibold text-gray-800">Visa & Admission Support</h4>
                    <p class="text-sm text-gray-500 mt-1">Complete documentation, SOP, and visa interview guidance.</p>
                </div>

            </div>
        </div>
    </div>
</section>


<style>
    @keyframes float {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-8px);
        }
    }

    @keyframes floatSlow {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-4px);
        }
    }

    @keyframes floatMid {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-6px);
        }
    }

    .animate-float {
        animation: float 3s ease-in-out infinite;
    }

    .animate-float-slow {
        animation: floatSlow 5s ease-in-out infinite;
    }

    .animate-float-mid {
        animation: floatMid 4s ease-in-out infinite;
    }
</style>
