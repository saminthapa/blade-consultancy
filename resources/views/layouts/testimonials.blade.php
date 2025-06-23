<section id="testimonials" class="bg-white py-24">
    <div class="max-w-4xl mx-auto text-center mb-16" data-aos="fade-down">
        <h2 class="text-4xl sm:text-5xl font-extrabold text-gray-800 mb-4">What Our Students Say</h2>
        <p class="text-gray-600 text-lg">Real experiences from those who’ve trusted Yatrax for their study abroad journey.</p>
    </div>

    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 items-center gap-14">

        <!-- Left Side Image -->
        <div data-aos="fade-right">
            <img src="{{ asset('images/testimonials.png') }}" alt="Happy Students">
        </div>

        <!-- Right Side Enhanced Slider -->
        <div data-aos="fade-left">
            <div id="testimonial-slider" class="relative bg-gradient-to-br from-blue-50 to-white p-10 rounded-2xl shadow-lg border border-blue-100">

                @php
                    $testimonials = [
                        ['name' => 'Anjali Sharma', 'country' => 'Canada', 'quote' => 'Yatrax helped me every step of the way. I am now pursuing my dream education abroad.'],
                        ['name' => 'Ravi Thapa', 'country' => 'Australia', 'quote' => 'Smooth and friendly process — highly recommend them!'],
                        ['name' => 'Sneha Karki', 'country' => 'UK', 'quote' => 'The team guided me through everything, from college selection to visa.'],
                    ];
                @endphp

                @foreach ($testimonials as $index => $t)
                    <div class="testimonial-item transition-all duration-300 {{ $index === 0 ? '' : 'hidden' }}">
                        <svg class="w-10 h-10 text-blue-400 mx-auto mb-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M7 17a4 4 0 0 1 0-8 1 1 0 0 0 1-1V6a1 1 0 0 0-1-1 6 6 0 0 0 0 12 1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1zm10 0a4 4 0 0 1 0-8 1 1 0 0 0 1-1V6a1 1 0 0 0-1-1 6 6 0 0 0 0 12 1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1z"/>
                        </svg>
                        <p class="text-gray-700 text-lg italic mb-6">“{{ $t['quote'] }}”</p>
                        <h4 class="text-blue-700 font-bold text-lg">{{ $t['name'] }}</h4>
                        <span class="text-sm text-gray-500">{{ $t['country'] }}</span>
                    </div>
                @endforeach

                <!-- Navigation -->
                <div class="mt-6 flex justify-center space-x-5">
                    <button onclick="changeTestimonial(-1)" class=" text-blue-700 w-10 h-10 rounded-full font-extrabold text-2xl shadow">
                        ‹
                    </button>
                    <button onclick="changeTestimonial(1)" class=" text-blue-700 w-10 h-10 rounded-full font-extrabold text-2xl shadow">
                        ›
                    </button>
                </div>
            </div>
        </div>

    </div>
</section>

<script>
    let current = 0;
    const testimonials = document.querySelectorAll('.testimonial-item');

    function changeTestimonial(dir) {
        testimonials[current].classList.add('hidden');
        current = (current + dir + testimonials.length) % testimonials.length;
        testimonials[current].classList.remove('hidden');
    }
</script>
