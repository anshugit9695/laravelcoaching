@extends('frontend.master')
@section('content')

<!-- HERO SECTION -->
<section class="relative bg-teal py-28"
    style="background-image: url('https://images.unsplash.com/photo-1524178232363-1fb2b075b655?q=80&w=2000&auto=format&fit=crop'); background-size: cover; background-position: center; background-blend-mode: multiply;">
    <div class="absolute inset-0 bg-gradient-to-r from-navy/90 to-teal/70"></div>
    <div class="container mx-auto px-4 relative z-10 text-center">
        <h1 class="text-5xl md:text-6xl font-extrabold text-white mb-4 uppercase tracking-wider">Course</h1>
        <div
            class="flex items-center justify-center space-x-3 text-orange font-semibold tracking-widest uppercase text-sm">
            <a href="index.html" class="text-white hover:text-orange transition">Home</a>
            <span class="text-gray-400"><i class="fa-solid fa-angle-right"></i></span>
            <span>Course details</span>
        </div>
    </div>
</section>


<!-- MAIN CONTENT -->
<section class="max-w-7xl mx-auto px-4 py-10 grid grid-cols-1 lg:grid-cols-3 gap-8">

    <!-- LEFT CONTENT (SCROLL NORMAL) -->
    <div class="lg:col-span-2">

        <!-- IMAGE -->
        <img src="https://images.unsplash.com/photo-1588072432836-e10032774350" class="w-full rounded-lg mb-6">

        <!-- TEACHER CARD -->
        <div class="flex justify-between items-center bg-teal-800 text-white p-4 rounded-lg mb-6">
            <div class="flex items-center gap-3">
                <img src="https://randomuser.me/api/portraits/women/44.jpg" class="w-12 h-12 rounded-full">
                <div>
                    <p class="font-semibold">Robo Jane</p>
                    <p class="text-sm">Language Teacher</p>
                </div>
            </div>
            <div class="bg-orange-500 px-4 py-2 rounded font-semibold">$49.00</div>
        </div>

        <!-- COURSE OVERVIEW -->
        <h2 class="text-2xl font-bold mb-3">Course Overview</h2>
        <p class="text-gray-600 mb-6">
            Lorem ipsum is simply free text used by copytyping refreshing.
            Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta
            sunt explicabo.
        </p>

        <!-- ACCORDION -->
        <div class="space-y-3">

            <details class="bg-white p-4 rounded border">
                <summary class="font-semibold cursor-pointer">
                    01 Cras turpis felis, elementum sed mi at arcu ?
                </summary>
                <p class="mt-2 text-gray-600">
                    Our community is being called to reimagine the future.
                </p>
            </details>

            <details class="bg-white p-4 rounded border">
                <summary class="font-semibold cursor-pointer">
                    02 Vestibulum nibh risus, in neque eleifendputate sem ?
                </summary>
            </details>

            <details class="bg-white p-4 rounded border">
                <summary class="font-semibold cursor-pointer">
                    03 Donec maximus, sapien id auctor ornare ?
                </summary>
            </details>

        </div>

        <!-- FEATURES -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-8">
            <div class="flex items-center gap-2 text-gray-600">
                ✔ Crawl accessibility so engines can read your website
            </div>
            <div class="flex items-center gap-2 text-gray-600">
                ✔ Share-worthy content that earns links
            </div>
            <div class="flex items-center gap-2 text-gray-600">
                ✔ Keyword optimized
            </div>
            <div class="flex items-center gap-2 text-gray-600">
                ✔ Title, URL & description optimization
            </div>
        </div>

        <!-- STUDY OPTIONS -->
        <div class="mt-10">
            <h3 class="text-xl font-bold mb-3">Study Options:</h3>

            <table class="w-full border">
                <thead class="bg-orange-500 text-white">
                    <tr>
                        <th class="p-3 text-left">Qualification</th>
                        <th class="p-3 text-left">Length</th>
                        <th class="p-3 text-left">Code</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-t">
                        <td class="p-3">Basic</td>
                        <td class="p-3">3 Months</td>
                        <td class="p-3">LC101</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

    <!-- RIGHT SIDEBAR (STICKY) -->
    <div class="relative">
        <div class="sticky top-20 bg-white p-6 rounded-lg shadow">

            <h3 class="text-lg font-bold mb-4">Course Features</h3>

            <div class="text-orange-500 text-2xl font-bold mb-4">
                $49.00 <span class="text-sm text-gray-400 line-through">$129.00</span>
            </div>

            <ul class="space-y-3 text-gray-600">
                <li>📚 Class Size: 18</li>
                <li>📖 Lectures: 12</li>
                <li>⏰ Time: 8:30-10am</li>
                <li>👨‍🎓 Enrolled: 20 students</li>
                <li>🌐 Language: English</li>
            </ul>

            <button class="mt-6 w-full bg-orange-500 text-white py-3 rounded hover:bg-orange-600">
                Enroll →
            </button>

        </div>
    </div>

</section>
<!-- Footer -->
@endsection