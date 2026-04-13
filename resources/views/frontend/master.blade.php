<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qeducato - HTML Template</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        orange: {
                            DEFAULT: '#ff5438',
                            hover: '#e0452d'
                        },
                        navy: '#062633',
                        teal: '#0e3a47',
                        lightbg: '#f8fbfc',
                        cardbg: '#f1f6f9'
                    },
                    fontFamily: {
                        sans: ['Jost', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>
        .clip-slant {
            clip-path: polygon(0 0, 100% 0, 95% 100%, 0 100%);
        }
    </style>
</head>

<body class="font-sans text-gray-600 bg-white antialiased text-[15px]">

    <!-- Top Bar -->
    <div class="hidden md:flex relative h-12 text-sm z-50">
        <div class="w-1/2 bg-orange flex justify-end items-center pr-10 text-white relative right-4"
            style="clip-path: polygon(0 0, 100% 0, 96% 100%, 0% 100%); width: 55%; z-index: 2;">
            <div class="flex space-x-6 mr-10 uppercase font-medium text-[13px] tracking-wide">
                <a href="mailto:info@website.com" class="flex items-center hover:text-gray-200"><i
                        class="fa-solid fa-envelope mr-2"></i> info@website.com</a>
                <a href="tel:+1234567890" class="flex items-center hover:text-gray-200"><i
                        class="fa-solid fa-phone mr-2"></i> +123 456 7890</a>
            </div>
        </div>
        <div class="w-1/2 bg-navy flex justify-start items-center pl-10 text-white absolute right-0 h-full"
            style="width: 50%; z-index: 1;">
            <div class="ml-16 flex space-x-4 items-center">
                <a href="#" class="hover:text-orange text-[#aeb6b9] transition">Log in</a>
                <span class="text-[#aeb6b9]">|</span>
                <a href="#" class="hover:text-orange text-[#aeb6b9] transition">Register</a>
                <div class="flex space-x-3 ml-6 text-[#aeb6b9]">
                    Follow us :
                    <a href="#" class="hover:text-white transition ml-2"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="hover:text-white transition"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#" class="hover:text-white transition"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="hover:text-white transition"><i class="fa-brands fa-dribbble"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Header / Navbar -->
    <header class="bg-white border-b border-gray-100 sticky top-0 z-40">
        <div class="container mx-auto px-4 py-auto flex justify-between items-center h-24">
            <!-- Logo -->
            <a href="{{ url('/') }}" class="flex items-center text-3xl font-bold text-navy">
                <i class="fa-solid fa-graduation-cap text-orange text-4xl mr-2"></i>Skiitm
            </a>

            <!-- Mid Nav Links -->
            <nav class="hidden lg:flex space-x-8 font-semibold text-navy text-[16px]">

                <a href="#" class="text-orange hover:text-orange transition">Home</a>

                <!-- About -->
                <div class="relative group inline-block">
                    <a href="#" class="hover:text-orange transition flex items-center">
                        About
                        <i class="fa-solid fa-angle-down text-xs ml-1 text-gray-400"></i>
                    </a>

                    <div class="absolute left-0 top-full pt-2 w-44 bg-white shadow-lg rounded
            opacity-0 invisible translate-y-2
            group-hover:opacity-100 group-hover:visible group-hover:translate-y-0
            transition-all duration-300 ease-in-out delay-100 z-50">

                        <a href="{{ url('/about') }}" class="block px-4 py-2 hover:bg-gray-100">About Us</a>
                        <a href="{{ url('/director') }}" class="block px-4 py-2 hover:bg-gray-100">Director</a>
                    </div>
                </div>

                <!-- Courses -->
                <div class="relative group inline-block">
                    <a href="#" class="hover:text-orange transition flex items-center">
                        Courses
                        <i class="fa-solid fa-angle-down text-xs ml-1 text-gray-400"></i>
                    </a>

                    <div class="absolute left-0 top-full pt-2 w-44 bg-white shadow-lg rounded
            opacity-0 invisible translate-y-2
            group-hover:opacity-100 group-hover:visible group-hover:translate-y-0
            transition-all duration-300 ease-in-out delay-100 z-50">

                        <a href="{{ url('/course-1') }}" class="block px-4 py-2 hover:bg-gray-100">Course 1</a>
                        <a href="{{ url('/course-2') }}" class="block px-4 py-2 hover:bg-gray-100">Course 2</a>
                        <a href="{{ url('/course-detail') }}" class="block px-4 py-2 hover:bg-gray-100">Course details
                            Page</a>
                    </div>
                </div>

                <!-- Student Zone -->
                <div class="relative group inline-block">
                    <a href="#" class="hover:text-orange transition flex items-center">
                        Student Zone
                        <i class="fa-solid fa-angle-down text-xs ml-1 text-gray-400"></i>
                    </a>

                    <div class="absolute left-0 top-full pt-2 w-44 bg-white shadow-lg rounded
            opacity-0 invisible translate-y-2
            group-hover:opacity-100 group-hover:visible group-hover:translate-y-0
            transition-all duration-300 ease-in-out delay-100 z-50">

                        <a href="{{ url('/student-admission') }}" class="block px-4 py-2 hover:bg-gray-100">Student
                            Admission</a>
                        <a href="{{ url('/student-login') }}" class="block px-4 py-2 hover:bg-gray-100">Student
                            Login</a>
                        <a href="{{ url('/student-verification') }}" class="block px-4 py-2 hover:bg-gray-100">Student
                            Verification</a>
                        <a href="{{ url('/scholarship') }}" class="block px-4 py-2 hover:bg-gray-100">Apply for
                            Scholarship</a>
                    </div>
                </div>

                <!-- Franchise -->
                <div class="relative group inline-block">
                    <a href="#" class="hover:text-orange transition flex items-center">
                        Franchise
                        <i class="fa-solid fa-angle-down text-xs ml-1 text-gray-400"></i>
                    </a>

                    <div class="absolute left-0 top-full pt-2 w-44 bg-white shadow-lg rounded
            opacity-0 invisible translate-y-2
            group-hover:opacity-100 group-hover:visible group-hover:translate-y-0
            transition-all duration-300 ease-in-out delay-100 z-50">

                        <a href="{{ url('/center-login') }}" class="block px-4 py-2 hover:bg-gray-100">Franchise
                            Login</a>
                        <a href="{{ url('/franchise-form') }}" class="block px-4 py-2 hover:bg-gray-100">Franchise
                            Form</a>
                        <a href="{{ url('/centers') }}" class="block px-4 py-2 hover:bg-gray-100">Learining Center</a>
                        <a href="{{ url('/franchise') }}" class="block px-4 py-2 hover:bg-gray-100">Franchise
                            Agreement</a>
                    </div>
                </div>

                <!-- Job Zone -->
                <div class="relative group inline-block">
                    <a href="#" class="hover:text-orange transition flex items-center">
                        Job Zone
                        <i class="fa-solid fa-angle-down text-xs ml-1 text-gray-400"></i>
                    </a>

                    <div class="absolute left-0 top-full pt-2 w-44 bg-white shadow-lg rounded
            opacity-0 invisible translate-y-2
            group-hover:opacity-100 group-hover:visible group-hover:translate-y-0
            transition-all duration-300 ease-in-out delay-100 z-50">

                        <a href="{{ url('/placement-process') }}" class="block px-4 py-2 hover:bg-gray-100">Placement
                            Process</a>
                        <a href="{{ url('/placement') }}" class="block px-4 py-2 hover:bg-gray-100">Placement</a>
                        <a href="{{ url('/job') }}" class="block px-4 py-2 hover:bg-gray-100">Apply For Job</a>
                    </div>
                </div>

                <a href="{{ url('/bank') }}" class="hover:text-orange transition">Payment</a>
                <a href="{{ url('/contact') }}" class="hover:text-orange transition">Contact</a>

            </nav>
            <!-- Mobile Menu -->
            <button class="lg:hidden text-navy text-2xl focus:outline-none"><i class="fa-solid fa-bars"></i></button>
        </div>
    </header>

    @yield('content')

    <!-- Footer -->
    <footer class="bg-navy pt-20 mt-20 relative">
        <!-- Subscribe overlapping Box -->
        <div class="container mx-auto px-4 relative z-20">
            <div class="bg-teal p-10 py-12 rounded-lg flex flex-col md:flex-row items-center justify-between shadow-xl -mt-40 mb-16 relative overflow-hidden"
                style="background-image: url('https://www.transparenttextures.com/patterns/stardust.png');">
                <div class="flex items-center gap-6 w-full md:w-1/2 mb-6 md:mb-0 relative z-10 text-white">
                    <i class="fa-regular fa-paper-plane text-orange text-5xl opacity-90"></i>
                    <div>
                        <h3 class="text-3xl font-bold mb-1">Subscribe For Newsletter</h3>
                        <p class="text-gray-300">Manage your education properly</p>
                    </div>
                </div>
                <div class="w-full md:w-1/2 flex relative z-10">
                    <input type="email" placeholder="Enter Your Email"
                        class="w-full px-6 py-4 bg-white text-gray-800 outline-none rounded-l border-none text-[15px]">
                    <button
                        class="bg-orange text-white px-8 py-4 font-bold text-[15px] uppercase tracking-widest hover:bg-orange-hover transition rounded-r">Subscribe</button>
                </div>
            </div>
        </div>

        <div class="container mx-auto px-4 pb-16 pt-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
            <!-- Col 1 -->
            <div>
                <a href="#" class="flex items-center text-3xl font-bold text-white mb-6">
                    <i class="fa-solid fa-graduation-cap text-orange text-4xl mr-2"></i> Qeducato
                </a>
                <p class="text-[#aeb6b9] mb-8 text-[15px] leading-relaxed">Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                <div class="flex space-x-3">
                    <a href="#"
                        class="w-10 h-10 rounded bg-[#0d3444] text-white flex items-center justify-center hover:bg-orange transition"><i
                            class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"
                        class="w-10 h-10 rounded bg-[#0d3444] text-white flex items-center justify-center hover:bg-orange transition"><i
                            class="fa-brands fa-twitter"></i></a>
                    <a href="#"
                        class="w-10 h-10 rounded bg-[#0d3444] text-white flex items-center justify-center hover:bg-orange transition"><i
                            class="fa-brands fa-instagram"></i></a>
                    <a href="#"
                        class="w-10 h-10 rounded bg-[#0d3444] text-white flex items-center justify-center hover:bg-orange transition"><i
                            class="fa-brands fa-linkedin-in"></i></a>
                </div>
            </div>

            <!-- Col 2 -->
            <div>
                <h3 class="text-xl font-bold text-white mb-8 border-b border-orange inline-block pb-2">Site Info</h3>
                <ul class="space-y-4">
                    <li><a href="#" class="text-[#aeb6b9] hover:text-orange transition flex items-center text-[15px]"><i
                                class="fa-solid fa-angle-right text-orange text-xs mr-3"></i> About Us</a></li>
                    <li><a href="#" class="text-[#aeb6b9] hover:text-orange transition flex items-center text-[15px]"><i
                                class="fa-solid fa-angle-right text-orange text-xs mr-3"></i> Services</a></li>
                    <li><a href="#" class="text-[#aeb6b9] hover:text-orange transition flex items-center text-[15px]"><i
                                class="fa-solid fa-angle-right text-orange text-xs mr-3"></i> Projects</a></li>
                    <li><a href="#" class="text-[#aeb6b9] hover:text-orange transition flex items-center text-[15px]"><i
                                class="fa-solid fa-angle-right text-orange text-xs mr-3"></i> Contact Us</a></li>
                </ul>
            </div>

            <!-- Col 3 -->
            <div>
                <h3 class="text-xl font-bold text-white mb-8 border-b border-orange inline-block pb-2">Quick Links</h3>
                <ul class="space-y-4">
                    <li><a href="#" class="text-[#aeb6b9] hover:text-orange transition flex items-center text-[15px]"><i
                                class="fa-solid fa-angle-right text-orange text-xs mr-3"></i> Course Search</a></li>
                    <li><a href="#" class="text-[#aeb6b9] hover:text-orange transition flex items-center text-[15px]"><i
                                class="fa-solid fa-angle-right text-orange text-xs mr-3"></i> Registration</a></li>
                    <li><a href="#" class="text-[#aeb6b9] hover:text-orange transition flex items-center text-[15px]"><i
                                class="fa-solid fa-angle-right text-orange text-xs mr-3"></i> Notice Board</a></li>
                    <li><a href="#" class="text-[#aeb6b9] hover:text-orange transition flex items-center text-[15px]"><i
                                class="fa-solid fa-angle-right text-orange text-xs mr-3"></i> Terms & Conditions</a>
                    </li>
                </ul>
            </div>

            <!-- Col 4 -->
            <div>
                <h3 class="text-xl font-bold text-white mb-8 border-b border-orange inline-block pb-2">Contact Us</h3>
                <ul class="space-y-5 text-[#aeb6b9] text-[15px]">
                    <li class="flex items-start">
                        <i class="fa-solid fa-location-dot text-orange text-lg mt-1 w-8"></i>
                        <span>123 Street, New York, USA<br>Area #214</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fa-solid fa-phone text-orange text-lg mt-1 w-8"></i>
                        <span>+1 246 333 879<br>+1 445 667 999</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fa-solid fa-envelope text-orange text-lg mt-1 w-8"></i>
                        <span>info@qeducato.com<br>support@qeducato.com</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="border-t border-[#0d3444] py-6 text-center text-[#aeb6b9] text-[15px]">
            <div class="container mx-auto px-4 flex flex-col md:flex-row justify-between items-center">
                <p>&copy; 2023 <span class="text-orange font-bold">Qeducato</span>. All Rights Reserved.</p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="#" class="hover:text-white transition">Privacy Policy</a>
                    <a href="#" class="hover:text-white transition">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>