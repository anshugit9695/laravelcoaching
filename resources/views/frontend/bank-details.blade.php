@extends('frontend.master')
@section('content')

<!-- HERO SECTION -->
<section class="relative bg-teal py-28"
    style="background-image: url('https://images.unsplash.com/photo-1524178232363-1fb2b075b655?q=80&w=2000&auto=format&fit=crop'); background-size: cover; background-position: center; background-blend-mode: multiply;">
    <div class="absolute inset-0 bg-gradient-to-r from-navy/90 to-teal/70"></div>
    <div class="container mx-auto px-4 relative z-10 text-center">
        <h1 class="text-5xl md:text-6xl font-extrabold text-white mb-4 uppercase tracking-wider">Bank Details</h1>
        <div
            class="flex items-center justify-center space-x-3 text-orange font-semibold tracking-widest uppercase text-sm">
            <a href="index.html" class="text-white hover:text-orange transition">Home</a>
            <span class="text-gray-400"><i class="fa-solid fa-angle-right"></i></span>
            <span>Bank Details</span>
        </div>
    </div>
</section>


<!-- MAIN CONTENT -->
<main class="container mx-auto px-4 py-20 max-w-7xl">
    <div class="bg-white rounded-3xl shadow-xl overflow-hidden">
        <div class="px-6 py-8 text-center">
            <p class="text-sm uppercase tracking-[0.4em] text-teal font-semibold">Bank Details</p>
            <h1 class="mt-4 text-5xl md:text-6xl font-extrabold text-navy inline-flex items-center gap-3">
                Bank Details
            </h1>
            <div class="mt-2 h-1 w-24 bg-navy mx-auto"></div>
        </div>
        <div class="grid gap-8 lg:grid-cols-[45%_55%] items-center px-6 pb-10">
            <div class="space-y-4">
                <div class="flex items-start gap-4">
                    <span class="min-w-[150px] font-semibold text-slate-700">Name Of Account :</span>
                    <span class="text-purple-600 font-semibold">SKIITM INSTITUTE PRIVATE LIMITED</span>
                </div>
                <div class="flex items-start gap-4">
                    <span class="min-w-[150px] font-semibold text-slate-700">Account Number :</span>
                    <span class="text-red-600 font-semibold">924020057366444</span>
                </div>
                <div class="flex items-start gap-4">
                    <span class="min-w-[150px] font-semibold text-slate-700">Bank Name :</span>
                    <span class="text-orange font-semibold">Axis Bank</span>
                </div>
                <div class="flex items-start gap-4">
                    <span class="min-w-[150px] font-semibold text-slate-700">Bank Address :</span>
                    <span class="text-slate-800">Firozabad town</span>
                </div>
                <div class="flex items-start gap-4">
                    <span class="min-w-[150px] font-semibold text-slate-700">IFSC Code :</span>
                    <span class="text-slate-800 font-semibold">UTIB0004060</span>
                </div>
            </div>

            <div class="border-l border-slate-200 pl-8">
                <div class="text-center mb-6">
                    <img src="https://skiitminstitute.com/head_office/upload/400_376_6998QR.jpeg" alt="Paytm UPI QR"
                        class="mx-auto h-auto w-full max-w-[360px] rounded-xl shadow-lg">
                </div>
                <div class="text-center text-xl font-semibold text-slate-900">Paytm UPI</div>
                <div class="mt-2 text-slate-600">8191910408@pthdfc</div>
            </div>
        </div>
    </div>
</main>
<!-- Footer -->
@endsection