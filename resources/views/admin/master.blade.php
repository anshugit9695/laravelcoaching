<!DOCTYPE html>
<html lang="en">

<head>
     <!-- Title Meta -->
     <meta charset="utf-8" />
     <title>Dashboard | Larkon - Responsive Admin Dashboard Template</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="description" content="A fully responsive premium admin dashboard template" />
     <meta name="author" content="Techzaa" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />

     <!-- App favicon -->
     <link rel="shortcut icon" href="assets/images/favicon.ico">

     <!-- Vendor css (Require in all Page) -->
     <link href="{{ asset('admin/assets/css/vendor.min.css') }}" rel="stylesheet" type="text/css" />

     <!-- Icons css (Require in all Page) -->
     <link href="{{ asset('admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

     <!-- App css (Require in all Page) -->
     <link href="{{ asset('admin/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

     <!-- Theme Config js (Require in all Page) -->
     <script src="{{ asset('admin/assets/js/config.js') }}"></script>
</head>

<body>

     <!-- START Wrapper -->
     <div class="wrapper">

          <!-- ========== Topbar Start ========== -->
          <header class="topbar">
               <div class="container-fluid">
                    <div class="navbar-header">
                         <div class="d-flex align-items-center">
                              <!-- Menu Toggle Button -->
                              <div class="topbar-item">
                                   <button type="button" class="button-toggle-menu me-2">
                                        <iconify-icon icon="solar:hamburger-menu-broken" class="fs-24 align-middle">
                                        </iconify-icon>
                                   </button>
                              </div>

                              <!-- Menu Toggle Button -->
                              <div class="topbar-item">
                                   <h4 class="fw-bold topbar-button pe-none text-uppercase mb-0">Welcome!</h4>
                              </div>
                         </div>

                         <div class="d-flex align-items-center gap-1">

                              <!-- Theme Color (Light/Dark) -->
                              <div class="topbar-item">
                                   <button type="button" class="topbar-button" id="light-dark-mode">
                                        <iconify-icon icon="solar:moon-bold-duotone" class="fs-24 align-middle">
                                        </iconify-icon>
                                   </button>
                              </div>
                              <!-- User -->
                              <div class="dropdown topbar-item">
                                   <a type="button" class="topbar-button" id="page-header-user-dropdown"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Logout <iconify-icon icon="solar:logout-bold-duotone"
                                             class="fs-24 align-middle"></iconify-icon>
                                   </a>
                              </div>
                         </div>
                    </div>
               </div>
          </header>
          <!-- ========== Topbar End ========== -->

          <!-- ========== App Menu Start ========== -->
          <div class="main-nav">
               <!-- Sidebar Logo -->
               <div class="logo-box">
                    <a href="index.html" class="logo-dark">
                         <img src="assets/images/logo-sm.png" class="logo-sm" alt="logo sm">
                         <img src="assets/images/logo-dark.png" class="logo-lg" alt="logo dark">
                    </a>

                    <a href="index.html" class="logo-light">
                         <img src="assets/images/logo-sm.png" class="logo-sm" alt="logo sm">
                         <img src="assets/images/logo-light.png" class="logo-lg" alt="logo light">
                    </a>
               </div>

               <!-- Menu Toggle Button (sm-hover) -->
               <button type="button" class="button-sm-hover" aria-label="Show Full Sidebar">
                    <iconify-icon icon="solar:double-alt-arrow-right-bold-duotone" class="button-sm-hover-icon">
                    </iconify-icon>
               </button>

               <div class="scrollbar" data-simplebar>
                    <ul class="navbar-nav" id="navbar-nav">

                         <!-- Dashboard -->
                         <li class="nav-item">
                              <a class="nav-link" href="{{ url('/dashboard') }}">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:widget-5-bold-duotone"></iconify-icon>
                                   </span>
                                   <span class="nav-text"> Dashboard </span>
                              </a>
                         </li>

                         <!-- Center -->
                         <li class="nav-item">
                              <a class="nav-link" href="{{ url('/center-list') }}">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:buildings-bold-duotone"></iconify-icon>
                                   </span>
                                   <span class="nav-text"> Center List </span>
                              </a>
                         </li>

                         <!-- Students -->
                         <li class="nav-item">
                              <a class="nav-link menu-arrow" href="#studentMenu" data-bs-toggle="collapse">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:users-group-rounded-bold-duotone"></iconify-icon>
                                   </span>
                                   <span class="nav-text"> Students </span>
                              </a>

                              <div class="collapse" id="studentMenu">
                                   <ul class="nav sub-navbar-nav">
                                        <li class="sub-nav-item"><a class="sub-nav-link"
                                                  href="{{ url('/students-form') }}">Add Student</a></li>
                                        <li class="sub-nav-item"><a class="sub-nav-link"
                                                  href="{{ url('/all-student') }}">All Students</a></li>
                                        <li class="sub-nav-item"><a class="sub-nav-link"
                                                  href="{{ url('/in-active-student') }}">Inactive Students</a></li>
                                        <li class="sub-nav-item"><a class="sub-nav-link"
                                                  href="{{ url('/passout-student') }}">Passout Students</a></li>
                                   </ul>
                              </div>
                         </li>

                         <!-- Course -->
                         <li class="nav-item">
                              <a class="nav-link" href="{{ url('/course') }}">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:book-bold-duotone"></iconify-icon>
                                   </span>
                                   <span class="nav-text"> Course </span>
                              </a>
                         </li>

                         <!-- Test & Questions -->
                         <li class="nav-item">
                              <a class="nav-link menu-arrow" href="#testMenu" data-bs-toggle="collapse">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:clipboard-text-bold-duotone"></iconify-icon>
                                   </span>
                                   <span class="nav-text"> Test & Questions </span>
                              </a>

                              <div class="collapse" id="testMenu">
                                   <ul class="nav sub-navbar-nav">
                                        <li class="sub-nav-item"><a class="sub-nav-link"
                                                  href="{{ url('/test') }}">Test</a></li>
                                        <li class="sub-nav-item"><a class="sub-nav-link"
                                                  href="{{ url('/question-category') }}">Question Category</a></li>
                                        <li class="sub-nav-item"><a class="sub-nav-link"
                                                  href="{{ url('/question') }}">Question</a></li>
                                        <li class="sub-nav-item"><a class="sub-nav-link"
                                                  href="{{ url('/import-question') }}">Import Question</a></li>
                                   </ul>
                              </div>
                         </li>

                         <!-- Staff -->
                         <li class="nav-item">
                              <a class="nav-link menu-arrow" href="#staffMenu" data-bs-toggle="collapse">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:user-bold-duotone"></iconify-icon>
                                   </span>
                                   <span class="nav-text"> Staff </span>
                              </a>

                              <div class="collapse" id="staffMenu">
                                   <ul class="nav sub-navbar-nav">
                                        <li class="sub-nav-item"><a class="sub-nav-link"
                                                  href="{{ url('/employee') }}">Employee</a></li>
                                        <li class="sub-nav-item"><a class="sub-nav-link"
                                                  href="{{ url('/staff-attendance') }}">Attendance</a></li>
                                   </ul>
                              </div>
                         </li>

                         <!-- Enquiry -->
                         <li class="nav-item">
                              <a class="nav-link menu-arrow" href="#enquiryMenu" data-bs-toggle="collapse">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:chat-round-dots-bold-duotone"></iconify-icon>
                                   </span>
                                   <span class="nav-text"> Enquiry </span>
                              </a>

                              <div class="collapse" id="enquiryMenu">
                                   <ul class="nav sub-navbar-nav">
                                        <li class="sub-nav-item"><a class="sub-nav-link"
                                                  href="{{ url('/enquiry-data') }}">Enquiry Data</a></li>
                                        <li class="sub-nav-item"><a class="sub-nav-link"
                                                  href="{{ url('/job-data') }}">Job Data</a></li>
                                        <li class="sub-nav-item"><a class="sub-nav-link"
                                                  href="{{ url('/contact-enquiry') }}">Contact Enquiry</a></li>
                                   </ul>
                              </div>
                         </li>

                         <!-- Messages -->
                         <li class="nav-item">
                              <a class="nav-link menu-arrow" href="#messageMenu" data-bs-toggle="collapse">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:mailbox-bold-duotone"></iconify-icon>
                                   </span>
                                   <span class="nav-text"> Messages </span>
                              </a>

                              <div class="collapse" id="messageMenu">
                                   <ul class="nav sub-navbar-nav">
                                        <li class="sub-nav-item"><a class="sub-nav-link"
                                                  href="{{ url('/create-message') }}">Create Message</a></li>
                                        <li class="sub-nav-item"><a class="sub-nav-link"
                                                  href="{{ url('/message-student') }}">Student Messages</a></li>
                                   </ul>
                              </div>
                         </li>


                         <!-- Certificate -->
                         <li class="nav-item">
                              <a class="nav-link" href="{{ url('/certificate-requests') }}">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:diploma-bold-duotone"></iconify-icon>
                                   </span>
                                   <span class="nav-text"> Certificate Requests </span>
                              </a>
                         </li>

                         <!-- Content -->
                         <li class="nav-item">
                              <a class="nav-link menu-arrow" href="#contentMenu" data-bs-toggle="collapse">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:video-library-bold-duotone"></iconify-icon>
                                   </span>
                                   <span class="nav-text"> Content </span>
                              </a>

                              <div class="collapse" id="contentMenu">
                                      <ul class="nav sub-navbar-nav">
                                        <li class="sub-nav-item"><a class="sub-nav-link"
                                                  href="{{ url('/pdf-notes') }}">PDF Notes</a></li>
                                        <li class="sub-nav-item"><a class="sub-nav-link"
                                                  href="{{ url('/video-content') }}">Video Content</a></li>
                                   </ul>
                                  
                              </div>
                         </li>

                         <!-- Expense -->
                         <li class="nav-item">
                              <a class="nav-link" href="{{ url('/expense') }}">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:wallet-money-bold-duotone"></iconify-icon>
                                   </span>
                                   <span class="nav-text"> Expense </span>
                              </a>
                         </li>

                         <!-- Category Maker -->
                         <li class="nav-item">
                              <a class="nav-link" href="{{ url('/category-maker') }}">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:layers-bold-duotone"></iconify-icon>
                                   </span>
                                   <span class="nav-text"> Category Maker </span>
                              </a>
                         </li>

                    </ul>
                    
               </div>
          </div>
          <!-- ========== App Menu End ========== -->

          <!-- ==================================================== -->
          <!-- Start right Content here -->
          <!-- ==================================================== -->
          <div class="page-content">

               <!-- Start Container Fluid -->
               <div class="container-fluid">

                    @yield('content')

               </div>
               <!-- End Container Fluid -->

               <!-- ========== Footer Start ========== -->
               <footer class="footer">
                    <div class="container-fluid">
                         <div class="row">
                              <div class="col-12 text-center">
                                   <script>
                                        document.write(new Date().getFullYear())
                                   </script> &copy; Larkon. Crafted by <iconify-icon icon="iconamoon:heart-duotone"
                                        class="fs-18 align-middle text-danger"></iconify-icon> <a
                                        href="https://1.envato.market/techzaa" class="fw-bold footer-text"
                                        target="_blank">Techzaa</a>
                              </div>
                         </div>
                    </div>
               </footer>
               <!-- ========== Footer End ========== -->

          </div>
     </div>
     <!-- END Wrapper -->

     <!-- Vendor Javascript (Require in all Page) -->
     <script src="{{ asset('admin/assets/js/vendor.js') }}"></script>

     <!-- App Javascript (Require in all Page) -->
     <script src="{{ asset('admin/assets/js/app.js') }}"></script>

     <!-- Vector Map Js -->
     <script src="{{ asset('admin/assets/vendor/jsvectormap/js/jsvectormap.min.js') }}"></script>
     <script src="{{ asset('admin/assets/vendor/jsvectormap/maps/world-merc.js') }}"></script>
     <script src="{{ asset('admin/assets/vendor/jsvectormap/maps/world.js') }}"></script>

     <!-- Dashboard Js -->
     <script src="{{ asset('admin/assets/js/pages/dashboard.js') }}"></script>

</body>

</html>