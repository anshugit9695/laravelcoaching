@extends('frontend.master')
@section('content')

<!-- Page Banner -->
<section class="relative bg-teal py-28"
    style="background-image: url('https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=2000&auto=format&fit=crop'); background-size: cover; background-position: center; background-blend-mode: multiply;">
    <div class="absolute inset-0 bg-gradient-to-r from-navy/90 to-teal/70"></div>
    <div class="container mx-auto px-4 relative z-10 text-center">
        <h1 class="text-5xl md:text-6xl font-extrabold text-white mb-4 uppercase tracking-wider">Verify Student</h1>
        <div
            class="flex items-center justify-center space-x-3 text-orange font-semibold tracking-widest uppercase text-sm">
            <a href="index.html" class="text-white hover:text-orange transition">Home</a>
            <span class="text-gray-400"><i class="fa-solid fa-angle-right"></i></span>
            <span>Scholarship</span>
        </div>
    </div>
</section>


<section class="container mx-auto px-4 py-20 max-w-7xl">
    <div class="grid gap-12 lg:grid-cols-[70%_30%] items-center">

        <!-- Left (70%) -->
        <div class="space-y-6">
            <h2 class="text-4xl font-bold text-navy">Scholarship Support for Your Success</h2>
            <p class="text-gray-600 leading-relaxed">
                Students holding diplomas or certificates at graduation ceremonies, representing the culmination of
                their studies and the achievement of their goals, possibly aided by a scholarship.
            </p>
            <p class="text-gray-600 leading-relaxed">
                Students applying for scholarships, working on laptops, or reviewing documents related to the
                application process.
            </p>
        </div>

        <!-- Right (30%) -->
        <div class="rounded-3xl overflow-hidden shadow-2xl w-full">
            <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?q=80&w=1200&auto=format&fit=crop"
                alt="Apply for scholarships" class="w-full h-auto object-cover">
        </div>

    </div>
</section>
@endsection