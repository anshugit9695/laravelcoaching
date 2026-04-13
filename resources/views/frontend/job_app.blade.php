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
<div class="max-w-6xl mx-auto px-4 py-10 gap-8">

    <form method="post" enctype="multipart/form-data" class="space-y-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Job Title</label>
                <input type="text" name="title" required
                    class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:border-orange focus:ring-orange/20 focus:outline-none">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Name</label>
                <input type="text" name="name" required
                    class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:border-orange focus:ring-orange/20 focus:outline-none">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                <input type="email" name="email" required
                    class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:border-orange focus:ring-orange/20 focus:outline-none">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Phone</label>
                <input type="tel" name="phone" required
                    class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:border-orange focus:ring-orange/20 focus:outline-none">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Educational Qualification</label>
                <input type="text" name="education" required
                    class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:border-orange focus:ring-orange/20 focus:outline-none">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Experience</label>
                <input type="text" name="experience"
                    class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:border-orange focus:ring-orange/20 focus:outline-none">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">DOB</label>
                <input type="date" name="dob" required
                    class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:border-orange focus:ring-orange/20 focus:outline-none">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Present Salary</label>
                <input type="text" name="p_salary" required
                    class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:border-orange focus:ring-orange/20 focus:outline-none">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Expected Salary</label>
                <input type="text" name="e_salary" required
                    class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:border-orange focus:ring-orange/20 focus:outline-none">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Current Employer</label>
                <input type="text" name="emp" required
                    class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:border-orange focus:ring-orange/20 focus:outline-none">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Address</label>
                <input type="text" name="address" required
                    class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:border-orange focus:ring-orange/20 focus:outline-none">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Resume</label>
                <input type="file" name="resume" required
                    class="w-full rounded-xl border border-gray-300 px-4 py-3 text-sm text-gray-600 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-orange file:text-white">
            </div>

            <div>
                <button type="submit" name="submit"
                    class="w-full rounded-xl bg-orange text-white px-6 py-3 font-semibold hover:bg-orange-hover transition">
                    SUBMIT
                </button>
            </div>
        </div>
    </form>
</div>
<!-- Footer -->
@endsection