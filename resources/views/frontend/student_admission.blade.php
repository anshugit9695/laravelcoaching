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
<div class="max-w-7xl mx-auto px-4 py-10  gap-8">

    <form method="post" enctype="multipart/form-data" action="payment.php">

        <!-- BASIC DETAILS -->
        <div class="grid grid-cols-1 md:grid-cols-12 gap-4">

            <div class="md:col-span-9 grid grid-cols-1 md:grid-cols-12 gap-4">

                <div class="md:col-span-12">
                    <label class="block font-medium mb-1">Name</label>
                    <input type="text" name="name" class="w-full border rounded px-3 py-2" required>
                </div>

                <div class="md:col-span-3">
                    <label class="block mb-1">ID Proof</label>
                    <select name="id_proof" class="w-full border rounded px-3 py-2">
                        <option>Aadhar Card</option>
                        <option>Pan Card</option>
                        <option>Voter Id</option>
                        <option>DL</option>
                        <option>Others</option>
                    </select>
                </div>

                <div class="md:col-span-6">
                    <label class="block mb-1">Aadhar No.</label>
                    <input type="text" name="id_number" class="w-full border rounded px-3 py-2">
                </div>

                <div class="md:col-span-3">
                    <label class="block mb-1">DOB</label>
                    <input type="date" name="dob" class="w-full border rounded px-3 py-2">
                </div>

                <div class="md:col-span-3">
                    <label class="block mb-1">Guardian Type</label>
                    <select name="guardian_type" class="w-full border rounded px-3 py-2">
                        <option>Father</option>
                        <option>Husband</option>
                    </select>
                </div>

                <div class="md:col-span-9">
                    <label class="block mb-1">Guardian Name</label>
                    <input type="text" name="guardian" class="w-full border rounded px-3 py-2">
                </div>

                <div class="md:col-span-3">
                    <label class="block mb-1">Mother Name</label>
                    <input type="text" name="mother" class="w-full border rounded px-3 py-2">
                </div>

                <div class="md:col-span-5">
                    <label class="block mb-1">Email</label>
                    <input type="email" name="email" class="w-full border rounded px-3 py-2">
                </div>

                <div class="md:col-span-4">
                    <label class="block mb-1">Gender</label>
                    <select name="gender" class="w-full border rounded px-3 py-2">
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
                    </select>
                </div>

            </div>

            <!-- IMAGE -->
            <div class="md:col-span-3 text-center">
                <div class="border h-[150px] flex items-center justify-center mb-2">
                    <img id="blah" src="#" class="h-full object-cover hidden">
                    <span class="text-gray-400 text-sm">Preview</span>
                </div>
                <input type="file" name="image" id="imgInp" class="w-full border rounded px-2 py-1">
            </div>

        </div>

        <!-- COMMUNICATION -->
        <h3 class="text-red-500 mt-6 font-semibold">Communication Details</h3>
        <div class="grid md:grid-cols-3 gap-4 mt-2">

            <div>
                <label>Address</label>
                <input type="text" name="address" class="w-full border rounded px-3 py-2">
            </div>

            <div>
                <label>Mobile</label>
                <input type="text" name="mobile" class="w-full border rounded px-3 py-2">
            </div>

            <div>
                <label>Guardian Mobile</label>
                <input type="text" name="guardianmobile" class="w-full border rounded px-3 py-2">
            </div>

        </div>

        <!-- EDUCATION -->
        <h3 class="text-red-500 mt-6 font-semibold">Education Details</h3>
        <div class="grid md:grid-cols-12 gap-4 mt-2">

            <div class="md:col-span-8">
                <label>Qualification</label>
                <input type="text" name="qualification" class="w-full border rounded px-3 py-2">
            </div>

            <div class="md:col-span-4">
                <label>Session</label>
                <input type="text" name="session_year" class="w-full border rounded px-3 py-2">
            </div>

        </div>

        <!-- REGISTRATION -->
        <h3 class="text-red-500 mt-6 font-semibold">Registration Details</h3>
        <div class="grid md:grid-cols-12 gap-4 mt-2">

            <div class="md:col-span-3">
                <label>Center</label>
                <select name="center" class="w-full border rounded px-3 py-2">
                    <option>Select Center</option>
                </select>
            </div>

            <div class="md:col-span-2">
                <label>Fees</label>
                <input type="text" name="course_amount" class="w-full border rounded px-3 py-2" readonly>
            </div>

            <div class="md:col-span-4">
                <label>Course</label>
                <select name="course" class="w-full border rounded px-3 py-2"></select>
            </div>

            <div class="md:col-span-3">
                <label>Joining Date</label>
                <input type="date" name="joining_date" class="w-full border rounded px-3 py-2">
            </div>

        </div>

        <!-- FILE UPLOAD -->
        <div class="grid md:grid-cols-2 gap-4 mt-4">
            <div>
                <label>Upload ID</label>
                <input type="file" name="id_pic" class="w-full border rounded px-2 py-1">
            </div>

            <div>
                <label>Education Proof</label>
                <input type="file" name="eduproof" class="w-full border rounded px-2 py-1">
            </div>
        </div>

        <!-- REMARK -->
        <div class="mt-4">
            <label>Remark</label>
            <textarea name="remark" class="w-full border rounded px-3 py-2"></textarea>
        </div>

        <!-- BUTTON -->
        <div class="mt-6">
            <button class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-3 rounded w-full md:w-auto">
                Submit
            </button>
        </div>

    </form>
</div>
<!-- Footer -->
@endsection