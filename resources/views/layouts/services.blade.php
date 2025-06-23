<section id="services" class="relative py-28 bg-gradient-to-br from-white via-blue-50 to-white overflow-hidden">
    <!-- Decorative Background -->
    <div class="absolute top-[-100px] right-[-100px] w-[400px] h-[400px] bg-indigo-200 opacity-20 rounded-full blur-3xl -z-10"></div>

    <div class="max-w-6xl mx-auto px-6">
        <!-- Section Header -->
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-4xl font-extrabold text-gray-900 mb-4">What We Offer</h2>
            <p class="text-lg text-gray-600">We make your journey to international education smooth and successful.</p>
        </div>

        <!-- Timeline Services -->
        <div class="space-y-16 relative border-l-4 border-blue-200 pl-16">

            @php
                $services = [
                    ['num' => '01', 'title' => 'University Selection', 'desc' => 'Shortlisting top universities based on your goals, budget, and preferences.', 'color' => 'bg-blue-600'],
                    ['num' => '02', 'title' => 'Application Guidance', 'desc' => 'Help with forms, SOPs, LORs, and document preparation.', 'color' => 'bg-purple-600'],
                    ['num' => '03', 'title' => 'Visa Support', 'desc' => 'Mock interviews, document checklists, and embassy appointments.', 'color' => 'bg-green-600'],
                    ['num' => '04', 'title' => 'Career & Country Counseling', 'desc' => 'Guidance based on your academic profile and goals.', 'color' => 'bg-yellow-500'],
                    ['num' => '05', 'title' => 'Test Preparation', 'desc' => 'Support for IELTS, TOEFL, GRE, and other exams.', 'color' => 'bg-pink-500'],
                    ['num' => '06', 'title' => 'Pre-Departure Support', 'desc' => 'Travel prep, accommodation, and packing tips.', 'color' => 'bg-indigo-500'],
                ];
            @endphp

            @foreach ($services as $index => $service)
                <div class="relative group" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                    <!-- Number Badge -->
                    <div class="absolute -left-10 top-0 w-10 h-10 {{ $service['color'] }} text-white font-bold text-sm flex items-center justify-center rounded-full shadow-md animate-bounce">
                        {{ $service['num'] }}
                    </div>
                    <!-- Content -->
                    <div class="ml-2">
                        <h3 class="text-xl font-semibold text-gray-800 mb-1">{{ $service['title'] }}</h3>
                        <p class="text-gray-600 text-sm">{{ $service['desc'] }}</p>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
