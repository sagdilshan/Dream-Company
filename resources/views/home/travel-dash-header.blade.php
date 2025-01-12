<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    {{-- <title>Eversys Lanka - Innovation for Every Journey</title> --}}
    <title>@yield('pageTitle') - Eversys Lanka (Pvt) Ltd</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    {{-- <meta name="keywords" content="Web Developers, Software Developers, Panadura web developers, ">
    <meta name="description"
        content="Eversys Lanka, a premier web development company, is dedicated to reshaping
    online experiences through innovative and tailored solutions. As expert web developers, we blend technical prowess
    with creative flair to bring your digital visions to life. Elevate your online presence with Eversys Lanka –
    where cutting-edge technology meets exceptional web development expertise for unparalleled digital success."> --}}

    <meta name="author" content="Eversys Lanka (Pvt) Ltd">


    <!-- Favicon -->
    <link rel="icon" href="../../assets/img/logo.jpg" alt="eversys-lanka-logo" type="image/gif">


    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../../assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="../../assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <link href="../../assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../../assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../../assets/css/style.css" rel="stylesheet">
    <link href="../../assets/css/mystyle.css" rel="stylesheet">
    <link rel="stylesheet"
        href="{{ asset('../../assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('../../assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">


    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

    <link rel="stylesheet" href="{{ asset('../../assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">

    @stack('stylesheets')
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-danger" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                <small><a href="https://www.google.com/maps/place/6.696325,79.935113" class="text-dark"
                        target="_blank"><i class="fa fa-map-marker-alt me-2" style="color:rgb(255, 0, 0);"></i>265 2/B, Kurunduwatta Rd,
                        Madupitiya, Panadura.</a></small>
                <small class="ms-4 text-dark"><i class="fa fa-clock me-2" style="color:rgb(255, 0, 0);"></i>09.00 AM -
                    06.00 PM</small>
            </div>
            <div class="col-lg-6 px-5 text-end">
                <small><i class="fa fa-envelope me-2" style="color:rgb(255, 0, 0);"></i><a
                        href="mailto:eversyslanka.travels@gmail.com"
                        class="text-dark">eversyslanka.travels@gmail.com</a></small>
                <small class="ms-4"><i class="fa fa-phone-alt me-2" style="color:rgb(255, 0, 0);"></i><a
                        href="tel:+94763839634" target="_blank" class="text-dark">+94 76 38 39 634</a></small>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="{{ route('travel') }}" class="navbar-brand ms-4 ms-lg-0">
                <h1 class="display-5 m-0"
                style="background: radial-gradient(circle, #264242, #424242, #d32f2f, #b71c1c);-webkit-background-clip: text;-webkit-text-fill-color: transparent; background-clip: text; text-fill-color: transparent; text-align: center;">
                Eversys Travels
            </h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="{{ route('admin.index') }}"
                        class="nav-item nav-link {{ Route::is('admin.index') ? 'active' : '' }}">Dashboard</a>

                    <a href="{{ route('admin.project') }}"
                        class="nav-item nav-link {{ Route::is('admin.project') ? 'active' : '' }}">Tours</a>
                    <a href="{{ route('admin.quotation') }}"
                        class="nav-item nav-link {{ Route::is('admin.quotation') ? 'active' : '' }}">Quotation</a>
                    
                    <a href="{{ route('travel.client') }}"
                        class="nav-item nav-link {{ Route::is('travel.client') ? 'active' : '' }}">Customers</a>
                    <a href="{{ route('travel.inquire') }}"
                        class="nav-item nav-link {{ Route::is('travel.inquire') ? 'active' : '' }}">Inquires</a>
                    <a href="{{ route('travel.profile') }}"
                        class="nav-item nav-link {{ Route::is('travel.profile') ? 'active' : '' }}">Profile</a>

                    <a href="{{ route('admin.logout') }}"
                        class="nav-item d-lg-none d-block nav-link {{ Route::is('admin.logout') ? 'active' : '' }}">Log
                        Out</a>

                </div>
                <div class="d-none d-lg-flex ms-2">
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="{{ route('admin.logout') }}">
                        <small class="fa fa-power-off" style="color:rgb(255, 0, 0);"></small>
                    </a>

                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    @yield('content')


    <!-- Footer Start -->
    <div class="container-fluid text-light footer mt-5 py-5 wow fadeIn" style="background-color:rgb(0, 0, 0);"
        data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Our Office</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i><a
                            href="https://www.google.com/maps/place/6.696325,79.935113" class="text-light"
                            target="_blank"> 265 2/B, Madupitiya, Panadura.</a></p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i><a href="tel:+94763839634" target="_blank"
                            class="text-light">+94763839634</a></p>
                            <p class="mb-2"><i class="fa fa-envelope me-3"></i> <a href="mailto:eversyslanka@gmail.com"
                                class="text-light">eversyslanka@gmail.com</a></p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i> <a
                                href="mailto:eversyslanka.travels@gmail.com" class="text-light"
                                style="font-size: 14px;">eversyslanka.travels@gmail.com</a></p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i
                                class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Services</h4>
                    <a class="btn btn-link">Flight Ticket Booking</a>
                    <a class="btn btn-link">Support for Travel Needs</a>
                    <a class="btn btn-link">Customized Travel Packages</a>
                    <a class="btn btn-link">Special Vehicle Hire Booking</a>
                    <a class="btn btn-link">Travel Insurance Assistance</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Pages</h4>
                    <a class="btn btn-link" href="{{ route('admin.staff') }}">Staff</a>


                    <a class="btn btn-link" href="{{ route('admin.client') }}">Clients</a>
                    <a class="btn btn-link" href="{{ route('admin.inquire') }}">Inquires</a>

                    <a class="btn btn-link" href="{{ route('admin.project') }}">Projects</a>

                    <a class="btn btn-link" href="{{ route('admin.feedback') }}">Feedbacks</a>

                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Our Vision</h4>
                    <p>Innovation for Every Journey.</p>

                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4" style="background-color: rgb(230, 39, 39);">
        <div class="container">
            <div class="row">
                <div class="text-center">
                    &copy; Copyright 2023 <a href="">Eversys Lanka (Pvt) Ltd</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-warning btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/lib/wow/wow.min.js"></script>
    <script src="../../assets/lib/easing/easing.min.js"></script>
    <script src="../../assets/lib/waypoints/waypoints.min.js"></script>
    <script src="../../assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../../assets/lib/counterup/counterup.min.js"></script>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


    <script src="{{ asset('../../assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('../../assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('../../assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('../../assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('../../assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('../../assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('../../assets/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('../../assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('../../assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('../../assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('../../assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('../../assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}"
            switch (type) {
                case 'info':
                    toastr.info(" {{ Session::get('message') }} ");
                    break;

                case 'success':
                    toastr.success(" {{ Session::get('message') }} ");
                    break;

                case 'warning':
                    toastr.warning(" {{ Session::get('message') }} ");
                    break;

                case 'error':
                    toastr.error(" {{ Session::get('message') }} ");
                    break;
            }
        @endif
    </script>
    <script>
        $(function() {
            $("#example2").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["excel", "pdf", "print"]
            }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');

        });

        $(function() {
            $("#example3").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["excel", "pdf", "print"]
            }).buttons().container().appendTo('#example3_wrapper .col-md-6:eq(0)');

        });
    </script>

    <!-- Template Javascript -->
    <script src="../../assets/js/main.js"></script>
    @stack('scripts')
</body>

</html>
