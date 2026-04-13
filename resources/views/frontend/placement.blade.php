@extends('frontend.master')
@section('content')

<!-- Page Banner -->
<section class="relative bg-teal py-28"
    style="background-image: url('https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=2000&auto=format&fit=crop'); background-size: cover; background-position: center; background-blend-mode: multiply;">
    <div class="absolute inset-0 bg-gradient-to-r from-navy/90 to-teal/70"></div>
    <div class="container mx-auto px-4 relative z-10 text-center">
        <h1 class="text-5xl md:text-6xl font-extrabold text-white mb-4 uppercase tracking-wider">Placement </h1>
        <div
            class="flex items-center justify-center space-x-3 text-orange font-semibold tracking-widest uppercase text-sm">
            <a href="index.html" class="text-white hover:text-orange transition">Home</a>
            <span class="text-gray-400"><i class="fa-solid fa-angle-right"></i></span>
            <span>Placement </span>
        </div>
    </div>
</section>


<section class="container mx-auto px-4 py-20 max-w-7xl">
    <div class="grid gap-12 lg:grid-cols-[45%_55%] items-center">

        <!-- Left (List) -->
        <div class="space-y-8">
            <div>
                <h2 class="text-5xl font-bold text-navy">Placement</h2>
                <p class="text-gray-600 mt-4 max-w-2xl">Explore the top placement roles our students qualify for
                    after successful completion of their training.</p>
            </div>

            <ul class="list-disc pl-6 space-y-4 text-xl text-teal font-medium">
                <li>Marketing Executive</li>
                <li>Computer Teacher</li>
                <li>Youtube Video Editor</li>
                <li>Web Developer</li>
                <li>Web Designer</li>
                <li>Computer Operator</li>
                <li>Tele Caller</li>
                <li>Tally Expert</li>
                <li>Ms Excel Expert</li>
                <li>Photoshop Expert</li>
                <li>CorelDraw Expert</li>
            </ul>
        </div>

        <!-- Right (Image) -->
        <div class="rounded-3xl overflow-hidden shadow-2xl">
            <img src="https://skiitminstitute.com/head_office/upload/7702911788placement.jpg" alt="Placement Careers"
                class="w-full h-full object-cover min-h-[420px]">
        </div>

    </div>
</section>
@endsection