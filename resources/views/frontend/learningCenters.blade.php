@extends('frontend.master')
@section('content')

<!-- Page Banner -->
<section class="relative bg-teal py-28"
    style="background-image: url('https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=2000&auto=format&fit=crop'); background-size: cover; background-position: center; background-blend-mode: multiply;">
    <div class="absolute inset-0 bg-gradient-to-r from-navy/90 to-teal/70"></div>
    <div class="container mx-auto px-4 relative z-10 text-center">
        <h1 class="text-5xl md:text-6xl font-extrabold text-white mb-4 uppercase tracking-wider">Learning Centers</h1>
        <div
            class="flex items-center justify-center space-x-3 text-orange font-semibold tracking-widest uppercase text-sm">
            <a href="index.html" class="text-white hover:text-orange transition">Home</a>
            <span class="text-gray-400"><i class="fa-solid fa-angle-right"></i></span>
            <span>Learning Centers</span>
        </div>
    </div>
</section>

<main class="container mx-auto max-w-7xl px-4 py-20">
    <div class="mx-auto max-w-6xl bg-white rounded-3xl shadow-xl overflow-hidden">
        <div class="px-6 py-8 border-b border-gray-200 bg-slate-100">
            <h2 class="text-3xl font-bold text-navy">Learning Centers</h2>
            <p class="text-gray-600 mt-2">Browse center codes, names, head details, addresses, and photos.</p>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full text-left divide-y divide-gray-200">
                <thead class="bg-slate-500 text-white">
                    <tr>
                        <th class="px-6 py-4 text-sm font-semibold uppercase">Centre Code</th>
                        <th class="px-6 py-4 text-sm font-semibold uppercase">Center Name</th>
                        <th class="px-6 py-4 text-sm font-semibold uppercase">Centre Head Name</th>
                        <th class="px-6 py-4 text-sm font-semibold uppercase">Address</th>
                        <th class="px-6 py-4 text-sm font-semibold uppercase">Photo</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 bg-white">
                    <tr class="hover:bg-slate-50">
                        <td class="px-6 py-5 align-top">SKIITM/UP/1002</td>
                        <td class="px-6 py-5 align-top">Share Knowledge Institute of IT and Management</td>
                        <td class="px-6 py-5 align-top">Mansi Rana</td>
                        <td class="px-6 py-5 align-top">Ghadhi Nagar Road, Muzaffarnagar, Uttar Pradesh - 251001</td>
                        <td class="px-6 py-5 align-top">
                            <img src="https://via.placeholder.com/80x80?text=Photo" alt="Mansi Rana"
                                class="h-20 w-20 rounded-lg object-cover">
                        </td>
                    </tr>
                    <tr class="hover:bg-slate-50">
                        <td class="px-6 py-5 align-top">SKIITM/UP/1003</td>
                        <td class="px-6 py-5 align-top">Indian Institute Computer Center</td>
                        <td class="px-6 py-5 align-top">Sahnaz</td>
                        <td class="px-6 py-5 align-top">[ IICC ] Ghass Mandi, Ashok Nagar, Pilkhuwa, Hapur, Uttar
                            Pradesh - 245304</td>
                        <td class="px-6 py-5 align-top">
                            <img src="https://via.placeholder.com/80x80?text=Photo" alt="Sahnaz"
                                class="h-20 w-20 rounded-lg object-cover">
                        </td>
                    </tr>
                    <tr class="hover:bg-slate-50">
                        <td class="px-6 py-5 align-top">SKIITM/UP/1001</td>
                        <td class="px-6 py-5 align-top">Share Knowledge Institute Of IT And Management</td>
                        <td class="px-6 py-5 align-top">IRSHAD ALI</td>
                        <td class="px-6 py-5 align-top">Near Sailai purani puliya, By Pass Road, Abbas Nagar, Firozabad,
                            Uttar Pradesh-283203</td>
                        <td class="px-6 py-5 align-top">
                            <img src="https://via.placeholder.com/80x80?text=Photo" alt="IRSHAD ALI"
                                class="h-20 w-20 rounded-lg object-cover">
                        </td>
                    </tr>
                    <tr class="hover:bg-slate-50">
                        <td class="px-6 py-5 align-top">SKIITM/UP/1005</td>
                        <td class="px-6 py-5 align-top">Kavyanjali Institute Of Computer Education</td>
                        <td class="px-6 py-5 align-top">Mr. DIGAMBAR</td>
                        <td class="px-6 py-5 align-top">Near shree chand market main bazar tappal, Khair, Aligarh -
                            202165</td>
                        <td class="px-6 py-5 align-top">
                            <img src="https://via.placeholder.com/80x80?text=Logo" alt="Kavyanjali"
                                class="h-20 w-20 rounded-lg object-cover">
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>

@endsection