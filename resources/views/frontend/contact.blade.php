@extends('frontend.master')
@section('content')
    <!-- Page Banner -->
    <section class="relative bg-teal py-28"
        style="background-image: url('https://images.unsplash.com/photo-1524178232363-1fb2b075b655?q=80&w=2000&auto=format&fit=crop'); background-size: cover; background-position: center; background-blend-mode: multiply;">
        <div class="absolute inset-0 bg-gradient-to-r from-navy/90 to-teal/70"></div>
        <div class="container mx-auto px-4 relative z-10 text-center">
            <h1 class="text-5xl md:text-6xl font-extrabold text-white mb-4 uppercase tracking-wider">About Us</h1>
            <div class="flex items-center justify-center space-x-3 text-orange font-semibold tracking-widest uppercase text-sm">
                <a href="index.html" class="text-white hover:text-orange transition">Home</a>
                <span class="text-gray-400"><i class="fa-solid fa-angle-right"></i></span>
                <span>About Us</span>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-20 bg-slate-100">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="grid gap-10 lg:grid-cols-[45%_55%] justify-center">
                <div class="bg-white rounded-[40px] shadow-2xl p-8 lg:p-12">
                    <div class="mb-8">
                        <span class="inline-block text-sm uppercase tracking-[0.4em] text-teal font-semibold mb-3">Get In Touch</span>
                        <p class="text-gray-600 mt-4">Here’s how you can reach us.</p>
                    </div>

                    <div class="grid gap-6">
                        <div class="rounded-3xl border border-slate-200 p-6">
                            <div class="flex items-center gap-4 mb-4">
                                <span class="inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-navy text-white text-xl"><i class="fa-solid fa-phone"></i></span>
                                <div>
                                    <p class="text-sm uppercase tracking-[0.25em] text-gray-400">Call Us</p>
                                    <p class="text-lg font-semibold text-navy">+91 8191910408</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-4">
                                <span class="inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-teal text-white text-xl"><i class="fa-solid fa-location-dot"></i></span>
                                <div>
                                    <p class="text-sm uppercase tracking-[0.25em] text-gray-400">Visit Us</p>
                                    <p class="text-base text-gray-700">Near Sailai purani puliya, By Pass Road, Abbas Nagar, Firozabad, Uttar Pradesh-283203</p>
                                </div>
                            </div>
                        </div>

                        <div class="rounded-3xl border border-slate-200 p-6">
                            <p class="text-sm uppercase tracking-[0.4em] text-gray-400 mb-4">Connect With Us</p>
                            <div class="flex items-center gap-4">
                                <a href="#" class="inline-flex h-12 w-12 items-center justify-center rounded-full bg-slate-100 text-navy hover:bg-orange hover:text-white transition"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#" class="inline-flex h-12 w-12 items-center justify-center rounded-full bg-slate-100 text-navy hover:bg-orange hover:text-white transition"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#" class="inline-flex h-12 w-12 items-center justify-center rounded-full bg-slate-100 text-navy hover:bg-orange hover:text-white transition"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#" class="inline-flex h-12 w-12 items-center justify-center rounded-full bg-slate-100 text-navy hover:bg-orange hover:text-white transition"><i class="fa-brands fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-[40px] shadow-2xl p-8 lg:p-12">
                    <div class="mb-8">
                        <h3 class="inline-block text-sm uppercase  text-teal font-semibold mb-3">Send Us a Message</h3>
                        <p class="text-navy">Fill out the form below, and we'll get back to you soon.</p>
                    </div>
                    <form class="space-y-6">
                        <div class="grid gap-4 md:grid-cols-2">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Your Name</label>
                                <input type="text" placeholder="Enter your name" class="w-full rounded-3xl border border-gray-200 bg-slate-50 px-4 py-4 focus:border-orange focus:ring-orange/20 focus:outline-none">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Your Email</label>
                                <input type="email" placeholder="Enter your email" class="w-full rounded-3xl border border-gray-200 bg-slate-50 px-4 py-4 focus:border-orange focus:ring-orange/20 focus:outline-none">
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Your Message</label>
                            <textarea rows="6" placeholder="Enter your message" class="w-full rounded-3xl border border-gray-200 bg-slate-50 px-4 py-4 focus:border-orange focus:ring-orange/20 focus:outline-none"></textarea>
                        </div>
                        <button type="submit" class="inline-flex items-center justify-center rounded-3xl bg-navy px-8 py-4 text-white text-base font-semibold hover:bg-[#0b1f39] transition w-full">
                            Send Message <i class="fa-solid fa-arrow-right ml-3"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="container mx-auto px-4">
            <div class="overflow-hidden rounded-[40px] border border-slate-200 shadow-2xl">
                <iframe class="w-full h-[520px]" frameborder="0" loading="lazy" allowfullscreen
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3506.7888969970893!2d78.15496931504803!3d27.154010582976146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3974a923d206e3eb%3A0x3a7ad92dabc5e384!2sShare%20Knowledge%20Institute%20Of%20IT%20And%20Management!5e0!3m2!1sen!2sin!4v1714451730000!5m2!1sen!2sin">
                </iframe>
            </div>
        </div>
    </section>

    <section class="py-20 bg-slate-100">
        <div class="container mx-auto px-4">
            <div class="grid gap-6 md:grid-cols-3">
                <div class="bg-white rounded-[30px] p-8 shadow-xl text-center">
                    <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-full bg-navy text-white text-2xl mb-6">
                        <i class="fa-solid fa-headset"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-navy mb-4">24/7 Support</h3>
                    <p class="text-gray-600">We're here to help you whenever you need assistance with our services.</p>
                </div>
                <div class="bg-white rounded-[30px] p-8 shadow-xl text-center">
                    <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-full bg-navy text-white text-2xl mb-6">
                        <i class="fa-solid fa-paper-plane"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-navy mb-4">Quick Response</h3>
                    <p class="text-gray-600">Our team is dedicated to providing fast and effective responses to all inquiries.</p>
                </div>
                <div class="bg-white rounded-[30px] p-8 shadow-xl text-center">
                    <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-full bg-navy text-white text-2xl mb-6">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-navy mb-4">Visit Our Campus</h3>
                    <p class="text-gray-600">Schedule a visit to our campus and experience our facilities firsthand.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
   @endsection