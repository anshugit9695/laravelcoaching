@extends('frontend.master')
@section('content')

<!-- Page Banner -->
<section class="relative bg-teal py-28"
    style="background-image: url('https://images.unsplash.com/photo-1524178232363-1fb2b075b655?q=80&w=2000&auto=format&fit=crop'); background-size: cover; background-position: center; background-blend-mode: multiply;">
    <div class="absolute inset-0 bg-gradient-to-r from-navy/90 to-teal/70"></div>
    <div class="container mx-auto px-4 relative z-10 text-center">
        <h1 class="text-5xl md:text-6xl font-extrabold text-white mb-4 uppercase tracking-wider">About Us</h1>
        <div
            class="flex items-center justify-center space-x-3 text-orange font-semibold tracking-widest uppercase text-sm">
            <a href="index.html" class="text-white hover:text-orange transition">Home</a>
            <span class="text-gray-400"><i class="fa-solid fa-angle-right"></i></span>
            <span>About Us</span>
        </div>
    </div>
</section>

<!-- General About Section -->
<section class="py-24 bg-white">
    <div class="container mx-auto px-4 flex flex-col lg:flex-row items-center gap-16">
        <div class="w-full lg:w-1/2">
            <div class="relative group">
                <img src="https://images.unsplash.com/photo-1513258496099-48168024aec0?q=80&w=1200&auto=format&fit=crop"
                    class="rounded-xl shadow-2xl z-10 relative group-hover:scale-105 transition-transform duration-700"
                    alt="SKIITM Institute">
                <div
                    class="absolute -bottom-8 -left-8 w-64 h-64 bg-orange/20 rounded-full z-0 blur-3xl group-hover:bg-orange/30 transition-colors duration-700">
                </div>
                <div
                    class="absolute -top-8 -right-8 w-64 h-64 bg-teal/20 rounded-full z-0 blur-3xl group-hover:bg-teal/30 transition-colors duration-700">
                </div>
            </div>
        </div>
        <div class="w-full lg:w-1/2">
            <h4 class="text-orange font-semibold mb-2 flex items-center uppercase tracking-wider text-sm">
                <i class="fa-solid fa-graduation-cap text-orange mr-2"></i> Know About Us
            </h4>
            <h2 class="text-4xl lg:text-5xl font-extrabold text-navy mb-6 leading-tight">Welcome to <span
                    class="text-teal border-b-4 border-orange">SKIITM</span></h2>
            <p class="text-gray-600 leading-relaxed mb-6 text-[16px]">
                छात्रों के लिए करियर का भरोसेमंद संस्थान, और भारत भर के Institutes के लिए कंपनी से जुड़ने और फ्रेंचाइज़ी
                लेने का मौका – सर्टिफिकेट, ट्रेनिंग, टेक्निकल व ब्रांडिंग सपोर्ट के साथ!
            </p>
            <div class="bg-lightbg border-l-4 border-orange p-6 mb-8 rounded-r-lg">
                <p class="text-navy font-semibold italic text-[16px]">
                    "We want to completely digitalize computer institute at very lowest cost. We want all computer
                    institute should have best facilitied & they provided all facilities to students."
                </p>
            </div>
            <ul class="space-y-4 text-gray-600 mb-8 font-medium">
                <li class="flex items-center"><i class="fa-solid fa-circle-check text-orange mr-3 text-lg"></i>
                    Top-quality training & certifications</li>
                <li class="flex items-center"><i class="fa-solid fa-circle-check text-orange mr-3 text-lg"></i> Full
                    technical and branding support</li>
                <li class="flex items-center"><i class="fa-solid fa-circle-check text-orange mr-3 text-lg"></i>
                    Affordable and accessible education</li>
            </ul>
        </div>
    </div>
</section>

<!-- Mission and Vision Section -->
<section class="py-24 bg-lightbg relative overflow-hidden">
    <!-- Abstract Background -->
    <div class="absolute inset-0 opacity-5"
        style="background-image: radial-gradient(#ff5438 1px, transparent 1px); background-size: 30px 30px;"></div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center mb-16">
            <h4
                class="text-orange font-semibold mb-2 flex items-center justify-center uppercase tracking-wider text-sm">
                <i class="fa-solid fa-bullseye text-orange mr-2"></i> Core Purpose
            </h4>
            <h2 class="text-4xl lg:text-5xl font-extrabold text-navy uppercase">Our Mission & Vision</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 lg:gap-14">
            <!-- Mission Card -->
            <div
                class="bg-navy text-white rounded-2xl p-10 md:p-14 shadow-2xl relative group overflow-hidden hover:-translate-y-2 transition-all duration-500 border-t-4 border-orange">
                <div
                    class="absolute -right-10 -top-10 text-9xl text-white opacity-5 group-hover:scale-110 group-hover:opacity-10 transition-all duration-700">
                    <i class="fa-solid fa-rocket"></i>
                </div>
                <div
                    class="w-20 h-20 bg-orange/20 rounded-full flex items-center justify-center mb-8 border border-orange/50 group-hover:bg-orange transition-colors duration-500 shadow-[0_0_20px_rgba(255,84,56,0.3)]">
                    <i
                        class="fa-solid fa-bullseye text-4xl text-orange group-hover:text-white transition-colors duration-500"></i>
                </div>
                <h3 class="text-3xl font-bold mb-6 text-orange tracking-wider uppercase">Our Mission</h3>
                <p class="text-gray-300 text-[16px] leading-relaxed relative z-10">
                    Our mission is to ensure that no child is left behind due to lack of education or financial
                    difficulties. We provide affordable, skill-based, and industry-relevant training to help students
                    improve their lives and build their future. We are rapidly expanding our network of franchise
                    centers to reach every village, town, and city with quality education.
                </p>
            </div>

            <!-- Vision Card -->
            <div
                class="bg-teal text-white rounded-2xl p-10 md:p-14 shadow-2xl relative group overflow-hidden hover:-translate-y-2 transition-all duration-500 border-t-4 border-orange">
                <div
                    class="absolute -right-10 -top-10 text-9xl text-white opacity-5 group-hover:scale-110 group-hover:opacity-10 transition-all duration-700">
                    <i class="fa-solid fa-eye"></i>
                </div>
                <div
                    class="w-20 h-20 bg-orange/20 rounded-full flex items-center justify-center mb-8 border border-orange/50 group-hover:bg-orange transition-colors duration-500 shadow-[0_0_20px_rgba(255,84,56,0.3)]">
                    <i
                        class="fa-solid fa-globe text-4xl text-orange group-hover:text-white transition-colors duration-500"></i>
                </div>
                <h3 class="text-3xl font-bold mb-6 text-orange tracking-wider uppercase">Our Vision</h3>
                <p class="text-gray-300 text-[16px] leading-relaxed relative z-10">
                    Our vision is to see India become the number one country in the world in education and skill
                    development. Through a strong network of SKiiTM Institute centers, we strive to make quality
                    education accessible and affordable to every corner of India. We envision a future where every young
                    person in India, regardless of their social or economic background, is empowered with the skills
                    necessary to secure good employment or start their own business.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
@endsection