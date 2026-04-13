@extends('frontend.master')
@section('content')

<!-- hero section -->
<section class="relative bg-teal py-28"
    style="background-image: url('https://images.unsplash.com/photo-1524178232363-1fb2b075b655?q=80&w=2000&auto=format&fit=crop'); background-size: cover; background-position: center; background-blend-mode: multiply;">
    <div class="absolute inset-0 bg-gradient-to-r from-navy/90 to-teal/70"></div>
    <div class="container mx-auto px-4 relative z-10 text-center">
        <h1 class="text-5xl md:text-6xl font-extrabold text-white mb-4 uppercase tracking-wider">Director</h1>
        <div
            class="flex items-center justify-center space-x-3 text-orange font-semibold tracking-widest uppercase text-sm">
            <a href="index.html" class="text-white hover:text-orange transition">Home</a>
            <span class="text-gray-400"><i class="fa-solid fa-angle-right"></i></span>
            <span>Director</span>
        </div>
    </div>
</section>

<section class="py-10 bg-lightbg">
    <div class="container mx-auto px-4">

        <div class="bg-white rounded-2xl shadow-md p-6 md:p-10 flex flex-col md:flex-row items-center gap-8">

            <!-- Left Image / Logo -->
            <div class="w-full md:w-1/3 flex justify-center">
                <img src="https://skiitminstitute.com/head_office/upload/92608SKIITM.png" alt="Institute Logo"
                    class="max-w-[280px] w-full object-contain">
            </div>

            <!-- Right Content -->
            <div class="w-full md:w-2/3">
                <p class="text-gray-700 text-[16px] leading-relaxed">
                    We firmly believe that every student in India - whether from a village, town, or city -
                    deserves access to quality education. Even today, many children remain deprived of
                    education because their families cannot afford high fees or lack proper support.
                    This challenge exists not only in remote areas but also in many parts of cities.
                </p>
            </div>

        </div>

    </div>
</section>

@endsection