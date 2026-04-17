<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Dataflow - eCommerce Admin Dashboard HTML Template</title>
    <meta name="author" content="themesflat.com">

    <meta name="description"
        content="Dataflow – Admin Dashboard HTML Template is a modern, clean, and highly flexible dashboard designed for admin panels, SaaS products, and data-driven web applications. Built with HTML5, CSS3, JavaScript, and jQuery, it focuses on performance, clarity, and ease of customization. The template features a fully responsive layout that works seamlessly across all devices and browsers. Dataflow integrates ApexCharts to deliver clear and interactive data visualizations, including bar, line, and radial charts. With well-structured code and reusable components, it is easy to extend and adapt for CRM systems, analytics platforms, and back-office management tools.">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset("student/css/animate.min.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("student/css/animation.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("student/css/bootstrap.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("student/css/bootstrap-select.min.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("student/css/styles.css") }}">
    <!-- Font -->
    <link rel="stylesheet" href="{{ asset("student/font/fonts.css") }}">
    <!-- Icon -->
    <link rel="stylesheet" href="{{ asset("student/icon/style.css") }}">
    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{ asset("student/images/favicon.png") }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset("student/images/favicon.png") }}">

</head>

<body>

    <!-- #wrapper -->
    <div id="wrapper">
        <!-- #page -->
        <div id="page" class="">
            <!-- layout-wrap -->
            <div class="layout-wrap">
                <!-- section-menu-left -->
                <div class="overplay-menu d-lg-none"></div>
                <div class="section-menu-left">
                    <div class="box-logo">
                        <a href="index.html" id="site-logo-inner">
                            <img class="" id="logo_header" alt="image" src="{{ asset("student/images/logo/logo.svg") }}"
                                data-light="{{ asset("student/images/logo/logo.svg") }}" data-dark="{{ asset("student/images/logo/logo.svg") }}">
                        </a>
                        <div class="button-show-hide">
                            <i class="icon-chevron-left"></i>
                        </div>
                    </div>
                    <div class="section-menu-left-wrap">
                        <div class="center">
                            <div class="center-item">
                                <ul class="">
                                    <li class="menu-item">
                                        <a href="{{ url("/profile") }}" class="">
                                            <div class="icon"><i class="icon-home"></i></div>
                                            <div class="text">My Profile</div>
                                        </a>
                                    </li>
                                   
                                    <li class="menu-item has-children">
                                        <a href="#" class="menu-item-button">
                                            <div class="icon"><i class="icon-file-plus"></i></div>
                                            <div class="text">Online Exam</div>
                                        </a>
                                        <ul class="sub-menu">
                                            <li class="sub-menu-item">
                                                <a href="product-list.html" class="">
                                                    <div class="text">Join Exam</div>
                                                </a>
                                            </li>
                                            <li class="sub-menu-item">
                                                <a href="add-product.html" class="">
                                                    <div class="text">Checked Answer Sheet</div>
                                                </a>
                                            </li>                            
                                        </ul>
                                    </li>
                                    <li class="menu-item has-children">
                                        <a href="#" class="menu-item-button">
                                            <div class="icon"><i class="icon-layers"></i></div>
                                            <div class="text">Online Practice Test</div>
                                        </a>
                                        <ul class="sub-menu">
                                            <li class="sub-menu-item">
                                                <a href="category-list.html" class="">
                                                    <div class="text">Join Test</div>
                                                </a>
                                            </li>
                                            
                                        </ul>
                                    </li>
                              
                                    <li class="menu-item">
                                        <a href="{{ url("/fees") }}" class="">
                                            <div class="icon"><i class="icon-pie-chart"></i></div>
                                            <div class="text">Fee Records</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{ url("/profile") }}" class="">
                                            <div class="icon"><i class="icon-pie-chart"></i></div>
                                            <div class="text">Verification</div>
                                        </a>
                                    </li>
                                   <li class="menu-item">
                                        <a href="report.html" class="">
                                            <div class="icon"><i class="icon-pie-chart"></i></div>
                                            <div class="text">Attendence Report</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="report.html" class="">
                                            <div class="icon"><i class="icon-pie-chart"></i></div>
                                            <div class="text">Admit Card</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="report.html" class="">
                                            <div class="icon"><i class="icon-pie-chart"></i></div>
                                            <div class="text">Notice</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="report.html" class="">
                                            <div class="icon"><i class="icon-pie-chart"></i></div>
                                            <div class="text">Admit Card</div>
                                        </a>
                                    </li>
                                   <li class="menu-item">
                                        <a href="report.html" class="">
                                            <div class="icon"><i class="icon-pie-chart"></i></div>
                                            <div class="text">Video Content</div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                          
                        </div>

                    </div>
                </div>
                <!-- /section-menu-left -->
                <!-- section-content-right -->
                <div class="section-content-right">
                    <!-- header-dashboard -->
                    <div class="header-dashboard">
                        <div class="wrap">
                            <div class="header-left">
                                <a href="index.html">
                                    <img class="" id="logo_header_mobile" alt="image" src="images/logo/logo.svg"
                                        data-light="images/logo/logo.svg" data-dark="images/logo/logo-white.svg">
                                </a>
                                <div class="button-show-hide">
                                    <i class="icon-chevron-left"></i>
                                </div>
                                <form class="form-search flex-grow">
                                    <fieldset class="name">
                                        <input type="text" placeholder="Search" class="show-search" name="name"
                                            tabindex="2" value="" required="">
                                    </fieldset>
                                    <div class="button-submit">
                                        <button class="" type="submit"><i class="icon-search"></i></button>
                                    </div>
                                    <div class="box-content-search" id="box-content-search">
                                        <ul class="mb-24">
                                            <li class="mb-14">
                                                <div class="body-title">Top selling product</div>
                                            </li>
                                            <li class="mb-14">
                                                <div class="divider"></div>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li class="product-item gap14 mb-10">
                                                        <div class="image no-bg">
                                                            <img src="images/products/product-1.jpg" alt="image">
                                                        </div>
                                                        <div class="flex items-center justify-between gap20 flex-grow">
                                                            <div class="name">
                                                                <a href="product-list.html" class="body-text">Neptune
                                                                    Longsleeve</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mb-10">
                                                        <div class="divider"></div>
                                                    </li>
                                                    <li class="product-item gap14 mb-10">
                                                        <div class="image no-bg">
                                                            <img src="images/products/product-2.jpg" alt="image">
                                                        </div>
                                                        <div class="flex items-center justify-between gap20 flex-grow">
                                                            <div class="name">
                                                                <a href="product-list.html" class="body-text">Ribbed
                                                                    Tank Top</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mb-10">
                                                        <div class="divider"></div>
                                                    </li>
                                                    <li class="product-item gap14">
                                                        <div class="image no-bg">
                                                            <img src="images/products/product-3.jpg" alt="image">
                                                        </div>
                                                        <div class="flex items-center justify-between gap20 flex-grow">
                                                            <div class="name">
                                                                <a href="product-list.html" class="body-text">Ribbed
                                                                    modal T-shirt</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="">
                                            <li class="mb-14">
                                                <div class="body-title">Order product</div>
                                            </li>
                                            <li class="mb-14">
                                                <div class="divider"></div>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li class="product-item gap14 mb-10">
                                                        <div class="image no-bg">
                                                            <img src="images/products/product-4.jpg" alt="image">
                                                        </div>
                                                        <div class="flex items-center justify-between gap20 flex-grow">
                                                            <div class="name">
                                                                <a href="product-list.html" class="body-text">Oversized
                                                                    Motif T-shirt</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mb-10">
                                                        <div class="divider"></div>
                                                    </li>
                                                    <li class="product-item gap14 mb-10">
                                                        <div class="image no-bg">
                                                            <img src="images/products/product-5.jpg" alt="image">
                                                        </div>
                                                        <div class="flex items-center justify-between gap20 flex-grow">
                                                            <div class="name">
                                                                <a href="product-list.html" class="body-text">V-neck
                                                                    linen T-shirt</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mb-10">
                                                        <div class="divider"></div>
                                                    </li>
                                                    <li class="product-item gap14 mb-10">
                                                        <div class="image no-bg">
                                                            <img src="images/products/product-6.jpg" alt="image">
                                                        </div>
                                                        <div class="flex items-center justify-between gap20 flex-grow">
                                                            <div class="name">
                                                                <a href="product-list.html" class="body-text">Jersey
                                                                    thong body</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mb-10">
                                                        <div class="divider"></div>
                                                    </li>
                                                    <li class="product-item gap14">
                                                        <div class="image no-bg">
                                                            <img src="images/products/product-7.jpg" alt="image">
                                                        </div>
                                                        <div class="flex items-center justify-between gap20 flex-grow">
                                                            <div class="name">
                                                                <a href="product-list.html" class="body-text">Jersey
                                                                    thong body</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </form>
                            </div>
                            <div class="header-grid">                           
                                <div class="header-item button-zoom-maximize">
                                    <div class="">
                                        <i class="icon-maximize"></i>
                                    </div>
                                </div>
                               
                                <div class="popup-wrap user type-header">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                            id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="header-user wg-user">
                                                <span class="image">
                                                    <img src="{{ asset("student/images/avatar/user-1.png") }}" alt="image">
                                                </span>
                                                <span class="text flex flex-column">
                                                    <span class="name text-main-dark">Student Name</span>
                                                    <span class="sub text-tiny">Student Panel</span>
                                                </span>
                                            </span>
                                        </button>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /header-dashboard -->
                    <!-- main-content -->
                    <div class="main-content">
                        <!-- main-content-wrap -->
                        <div class="main-content-inner">
                            <!-- main-content-wrap -->
                            @yield("content")
                            {{-- <h1>hello riya</h1> --}}
                            <!-- /main-content-wrap -->
                        </div>
                        <!-- /main-content-wrap -->
                        <!-- bottom-page -->
                        <div class="bottom-page">
                            <div class="body-text">Copyright © 2026 <a href="index.html">Dataflow</a> Design by
                                Themesflat All rights reserved.</div>
                        </div>
                        <!-- /bottom-page -->
                    </div>
                    <!-- /main-content -->
                </div>
                <!-- /section-content-right -->
            </div>
            <!-- /layout-wrap -->
        </div>
        <!-- /#page -->
    </div>
    <!-- /#wrapper -->

    <!-- Javascript -->
    <script src="{{ asset("student/js/default-theme.js") }}"></script>
    <script src="{{ asset("student/js/jquery.min.js") }}"></script>
    <script src="{{ asset("student/js/bootstrap.min.js") }}"></script>
    <script src="{{ asset("student/js/bootstrap-select.min.js") }}"></script>
    <script src="{{ asset("student/js/zoom.js") }}"></script>
    <script src="{{ asset("student/js/morris.min.js") }}"></script>
    <script src="{{ asset("student/js/raphael.min.js") }}"></script>
    <script src="{{ asset("student/js/morris.js") }}"></script>
    <script src="{{ asset("student/js/jvectormap.min.js") }}"></script>
    <script src="{{ asset("student/js/jvectormap-us-lcc.js") }}"></script>
    <script src="{{ asset("student/js/jvectormap-data.js") }}"></script>
    <script src="{{ asset("student/js/jvectormap.js") }}"></script>
    <script src="{{ asset("student/js/apexcharts/apexcharts.js") }}"></script>
    <script src="{{ asset("student/js/apexcharts/line-chart-1.js") }}"></script>
    <script src="{{ asset("student/js/apexcharts/line-chart-2.js") }}"></script>
    <script src="{{ asset("student/js/apexcharts/line-chart-3.js") }}"></script>
    <script src="{{ asset("student/js/apexcharts/line-chart-4.js") }}"></script>
    <script src="{{ asset("student/js/apexcharts/line-chart-7.js") }}"></script>
    <script src="{{ asset("student/js/switcher.js") }}"></script>
    <script defer src="{{ asset("student/js/theme-settings.js") }}"></script>
    <script src="{{ asset("student/js/main.js") }}"></script>

</body>

</html>