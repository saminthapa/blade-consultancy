<section id="contact" class="py-24 bg-gradient-to-br from-blue-100 via-white to-purple-100">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-down">
            <h2 class="text-4xl font-extrabold text-gray-800">Get in Touch</h2>
            <p class="mt-4 text-gray-600 text-lg">Visit our office or send us a message. We're ready to help!</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

            <!-- Embedded Google Map -->
            <div data-aos="fade-right">
                <div class="w-full h-96 rounded-xl overflow-hidden shadow-lg border border-gray-300">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5527.224307958057!2d84.44580201948567!3d27.681419860833305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3994e5006f751fc1%3A0x2f72881d63e6994b!2sYatrax!5e1!3m2!1sen!2snp!4v1750694396999!5m2!1sen!2snp"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <!-- Contact Form -->
            <div data-aos="fade-left">
                <form action="/" method="POST" class="bg-white rounded-2xl shadow-lg p-8 space-y-6">
                    @csrf
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Name</label>
                        <input type="text" name="name" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Email</label>
                        <input type="email" name="email" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Message</label>
                        <textarea name="message" rows="5" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"></textarea>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="bg-blue-700 hover:bg-blue-800 text-white px-6 py-3 rounded-lg font-semibold shadow-md transition-transform transform hover:-translate-y-1">
                            Send Message
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>
