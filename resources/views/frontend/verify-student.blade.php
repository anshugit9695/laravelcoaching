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
            <span>Verify Student</span>
        </div>
    </div>
</section>

<main class="container mx-auto px-4 py-20">
    <div class="grid gap-12 lg:grid-cols-2 items-center">
        <div class="rounded-3xl overflow-hidden shadow-2xl">
            <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=1200&auto=format&fit=crop"
                alt="Student verification" class="w-full h-full object-cover min-h-[400px]">
        </div>
        <div class="bg-white rounded-3xl shadow-xl p-10 lg:p-14">
            <span class="inline-block text-orange uppercase tracking-[0.3em] text-[13px] font-semibold mb-4">Student
                Verification</span>
            <h2 class="text-4xl font-bold text-navy mb-6">Enter your roll number to verify your details</h2>
            <p class="text-gray-500 mb-8">Use the input below to check your student record. Make sure your roll number
                is entered correctly.</p>
            <form action="#" method="POST" class="space-y-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2" for="roll">Roll Number</label>
                    <input id="roll" name="roll" type="text" placeholder="Enter Roll No."
                        class="w-full rounded-2xl border border-gray-200 px-5 py-4 text-gray-700 focus:border-orange focus:ring-2 focus:ring-orange/20 outline-none"
                        required>
                </div>
                <button type="submit"
                    class="inline-flex items-center justify-center rounded-2xl bg-orange px-8 py-4 text-white text-base font-semibold shadow-[0_15px_35px_rgba(255,84,56,0.2)] hover:bg-orange-hover transition w-full">
                    Submit Now
                </button>
            </form>
        </div>
    </div>
</main>

@endsection