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
<div class="max-w-7xl mx-auto px-4 py-10">

    <form method="post" enctype="multipart/form-data" action="/franchise-form.php" class="space-y-6">
        <div class="grid gap-4 md:grid-cols-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Username</label>
                <input type="text" name="name" placeholder="Username" required
                    class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:border-orange focus:ring-orange/20 focus:outline-none">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                <input type="password" name="pass" placeholder="Password" required
                    class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:border-orange focus:ring-orange/20 focus:outline-none">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Center Name</label>
                <input type="text" name="center" placeholder="Center Name" required
                    class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:border-orange focus:ring-orange/20 focus:outline-none">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Phone No.</label>
                <input type="text" name="phone" placeholder="Phone No." required
                    class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:border-orange focus:ring-orange/20 focus:outline-none">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Email Id</label>
                <input type="email" name="email" placeholder="Email Id" required
                    class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:border-orange focus:ring-orange/20 focus:outline-none">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Address</label>
                <input type="text" name="address" placeholder="Address" required
                    class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:border-orange focus:ring-orange/20 focus:outline-none">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">City</label>
                <input type="text" name="city" placeholder="City" required
                    class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:border-orange focus:ring-orange/20 focus:outline-none">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Pin</label>
                <input type="text" name="pin" placeholder="Pin" required
                    class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:border-orange focus:ring-orange/20 focus:outline-none">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">State</label>
                <input type="text" name="state" placeholder="State" required
                    class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:border-orange focus:ring-orange/20 focus:outline-none">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Person Name</label>
                <input type="text" name="person_name" placeholder="Person Name" required
                    class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:border-orange focus:ring-orange/20 focus:outline-none">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Father's Name</label>
                <input type="text" name="father" placeholder="Father's Name"
                    class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:border-orange focus:ring-orange/20 focus:outline-none">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Mother's Name</label>
                <input type="text" name="mother" placeholder="Mother's Name"
                    class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:border-orange focus:ring-orange/20 focus:outline-none">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Upload Image</label>
                <input type="file" name="image"
                    class="w-full rounded-xl border border-gray-300 px-4 py-2 text-sm text-gray-600 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-orange file:text-white">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Upload Documents</label>
                <input type="file" name="document"
                    class="w-full rounded-xl border border-gray-300 px-4 py-2 text-sm text-gray-600 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-orange file:text-white">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Upload Signature</label>
                <input type="file" name="sign" required
                    class="w-full rounded-xl border border-gray-300 px-4 py-2 text-sm text-gray-600 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-orange file:text-white">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Center Type</label>
                <select name="cen_type"
                    class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:border-orange focus:ring-orange/20 focus:outline-none">
                    <option value="Franchise">Franchise</option>
                    <option value="Referal">Partnership</option>
                </select>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">No. of Computers</label>
                <input type="text" name="no_of_computer" placeholder="No. of Computers" required
                    class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:border-orange focus:ring-orange/20 focus:outline-none">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">No. of Teachers</label>
                <select name="no_of_teacher"
                    class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:border-orange focus:ring-orange/20 focus:outline-none">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">No. of Computer Lab</label>
                <input type="text" name="no_of_computerlab" placeholder="No. of Computer Lab" required
                    class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:border-orange focus:ring-orange/20 focus:outline-none">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">No. of Theory Lab</label>
                <input type="text" name="no_of_theorylab" placeholder="No. of Theory Lab" required
                    class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:border-orange focus:ring-orange/20 focus:outline-none">
            </div>

            <div class="md:col-span-1">
                <button type="submit" name="sub"
                    class="w-full rounded-xl bg-orange text-white px-6 py-3 font-semibold hover:bg-orange-hover transition">
                    Submit
                </button>
            </div>
        </div>
    </form>
</div>

<!-- Footer -->
@endsection