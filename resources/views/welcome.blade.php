@extends('home.header')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Eversys Lanka - Innovation for Every Journey')
@section('content')

    <head>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    </head>

    <!-- Carouse Startt -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="../assets/img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-8">
                                    <p class="fs-5 fw-medium" style="color:rgb(255, 0, 0);">Welcome to Eversys Lanka
                                        (Pvt) Ltd</p>
                                    <h1 class="display-3 mb-4 animated slideInDown">Where Innovation Meets Expertise in Web
                                        Development.</h1><br>
                                    <a href="{{ route('contact') }}"
                                        class="btn btn-danger py-3 px-5 animated slideInDown">Let's Get Strated</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="../assets/img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7">
                                    <p class="fs-5 fw-medium" style="color:rgb(255, 0, 0);">Welcome to Eversys Lanka
                                        (Pvt) Ltd</p>

                                    <h1 class="display-3 mb-4 animated slideInDown">Elevate Your Digital Presence with
                                        Eversys Lanka.</h1><br>
                                    <a href="{{ route('contact') }}"
                                        class="btn btn-danger py-3 px-5 animated slideInDown">Let's Get Strated</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carosel End -->




    <!-- Feature Start -->
    <div class="container-xxl feature py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="fs-5 fw-medium text-danger">Why Choosing Eversys</p>
                    <h1 class="display-5 mb-4">Few Reasons Why People Choosing Us</h1>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et
                        eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <a class="btn btn-danger py-3 px-5" href="">Explore More</a>
                </div>
                <div class="col-lg-6">
                    <div class="row g-4 align-items-center">
                        <div class="col-md-6">
                            <div class="row g-4">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                    <div class="feature-box border rounded p-4">
                                        <i class="fa fa-check fa-3x text-danger mb-3"></i>
                                        <h4 class="mb-3">Innovation and Technology Leadership</h4>
                                        <p class="mb-3">At Eversys Lanka, we lead in innovation, shaping the future
                                            with cutting-edge technology solutions for transformative digital experiences.
                                        </p>
                                        <a class="fw-semi-bold text-danger">Read More <i
                                                class="fa fa-arrow-right ms-1"></i></a>
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="feature-box border rounded p-4">
                                        <i class="fa fa-check fa-3x text-danger mb-3"></i>
                                        <h4 class="mb-3">Exceptional Support and Maintenance</h4>
                                        <p class="mb-3">Experience peace of mind with Eversys Lanka – Exceptional
                                            Support and Maintenance for sustained success and worry-free digital solutions.
                                        </p>
                                        <a class="fw-semi-bold text-danger">Read More <i
                                                class="fa fa-arrow-right ms-1"></i></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6 wow fadeIn" data-wow-delay="0.7s">
                            <div class="feature-box border rounded p-4">
                                <i class="fa fa-check fa-3x text-danger mb-3"></i>
                                <h4 class="mb-3">Client-Centric Approach</h4>
                                <p class="mb-3">At Eversys Lanka, your needs are at the heart of what we do – a
                                    Client-Centric Approach delivering tailored solutions and exceptional experiences.</p>
                                <a class="fw-semi-bold text-danger">Read More <i class="fa fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->

    <!-- Facts Start -->
    <div class="container-fluid facts my-3 py-3">
        <div class="container py-3">
            <div class="row g-5">
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-users fa-3x text-white mb-3"></i>
                    <h1 class="display-4 text-white" data-toggle="counter-up">{{ $formattedTotalcustomers }}</h1>
                    <span class="fs-5 text-white">Happy Clients</span>
                    <hr class="bg-white w-25 mx-auto mb-0">
                </div>
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <i class="fa fa-check fa-3x text-white mb-3"></i>
                    <h1 class="display-4 text-white" data-toggle="counter-up">{{ $formattedPending_project }}</h1>
                    <span class="fs-5 text-white">Projects Completed</span>
                    <hr class="bg-white w-25 mx-auto mb-0">
                </div>
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-users-cog fa-3x text-white mb-3"></i>
                    <h1 class="display-4 text-white" data-toggle="counter-up">{{ $all_staff }}</h1>
                    <span class="fs-5 text-white">Dedicated Staff</span>
                    <hr class="bg-white w-25 mx-auto mb-0">
                </div>
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                    <i class="fa fa-award fa-3x text-white mb-3"></i>
                    <h1 class="display-4 text-white" data-toggle="counter-up">1</h1>
                    <span class="fs-5 text-white">Awards Achieved</span>
                    <hr class="bg-white w-25 mx-auto mb-0">
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4 align-items-end mb-4">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid rounded" src="../assets/img/about.jpg">
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">

                    <p class="fs-5 fw-medium text-danger">About Us</p>
                    <h1 class="display-6 mb-4">We Help Our Clients To Grow Their Business Website</h1>
                    <p class="mb-4">At Eversys Lanka, we are more than a web development company – we are architects
                        of digital experiences, weaving innovation and technology to shape the future. Established with a
                        vision to transform ideas into impactful digital realities, our journey is driven by a passion for
                        excellence.</p>
                    <div class="border rounded p-4">
                        <nav>
                            <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                                <button class="nav-link fw-semi-bold text-danger active" id="nav-story-tab"
                                    data-bs-toggle="tab" data-bs-target="#nav-story" type="button" role="tab"
                                    aria-controls="nav-story" aria-selected="true">Story</button>
                                <button class="nav-link fw-semi-bold text-danger" id="nav-mission-tab"
                                    data-bs-toggle="tab" data-bs-target="#nav-mission" type="button" role="tab"
                                    aria-controls="nav-mission" aria-selected="false">Mission</button>
                                <button class="nav-link fw-semi-bold text-danger" id="nav-vision-tab"
                                    data-bs-toggle="tab" data-bs-target="#nav-vision" type="button" role="tab"
                                    aria-controls="nav-vision" aria-selected="false">Vision</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-story" role="tabpanel"
                                aria-labelledby="nav-story-tab">
                                <p class="mb-0">Our story is one of relentless passion for digital excellence. From our
                                    inception, we've embraced the dynamic intersection of innovation and technology, turning
                                    ideas into impactful digital realities. Every project is a chapter in our journey, and
                                    each client success story is a testament to our commitment to shaping the future of the
                                    digital landscape.</p>
                            </div>
                            <div class="tab-pane fade" id="nav-mission" role="tabpanel"
                                aria-labelledby="nav-mission-tab">
                                <p class="mb-0">Our mission at Eversys Lanka aims to deliver exceptional technology
                                    solutions that enhance productivity and foster sustainable growth. We prioritize
                                    customer satisfaction, innovation, and a culture of trust in all our endeavors.</p>
                            </div>
                            <div class="tab-pane fade" id="nav-vision" role="tabpanel" aria-labelledby="nav-vision-tab">
                                <p class="mb-0">Our vision is to inspire progress and innovation, becoming the most
                                    trusted partner in delivering transformative solutions for a better tomorrow.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border rounded p-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row g-4">
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                        <div class="h-100">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-danger">
                                    <i class="fa fa-times text-white"></i>
                                </div>
                                <div class="ps-3">
                                    <h4>No Hidden Cost</h4>
                                    <span>Transparent pricing with no hidden costs for clear collaboration.</span>
                                </div>
                                <div class="border-end d-none d-lg-block"></div>
                            </div>
                            <div class="border-bottom mt-4 d-block d-lg-none"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                        <div class="h-100">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-danger">
                                    <i class="fa fa-users text-white"></i>
                                </div>
                                <div class="ps-3">
                                    <h4>Dedicated Team</h4>
                                    <span>Passionate experts committed to your project's success and growth.</span>
                                </div>
                                <div class="border-end d-none d-lg-block"></div>
                            </div>
                            <div class="border-bottom mt-4 d-block d-lg-none"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                        <div class="h-100">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-danger">
                                    <i class="fa fa-phone text-white"></i>
                                </div>
                                <div class="ps-3">
                                    <h4>12/7 Available</h4>
                                    <span>Accessible and responsive support, available 12/7 for you.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->







    <!-- Projects Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="fs-5 fw-medium text-danger">Our Projects</p>
                <h1 class="display-5 mb-5">We Have Completed Latest Projects</h1>
            </div>
            <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.3s">
                <div class="project-item pe-5 pb-5">
                    <div class="project-img mb-3">
                        <img class="img-fluid rounded" src="../assets/img/service-1.jpg" alt="">
                        <a href=""><i class="fa fa-link fa-3x text-danger"></i></a>
                    </div>
                    <div class="project-title">
                        <h4 class="mb-0">E - Commerce Website</h4>
                    </div>
                </div>
                <div class="project-item pe-5 pb-5">
                    <div class="project-img mb-3">
                        <img class="img-fluid rounded" src="../assets/img/service-2.jpg" alt="">
                        <a href=""><i class="fa fa-link fa-3x text-danger"></i></a>
                    </div>
                    <div class="project-title">
                        <h4 class="mb-0">Woodify Web Portal</h4>
                    </div>
                </div>
                <div class="project-item pe-5 pb-5">
                    <div class="project-img mb-3">
                        <img class="img-fluid rounded" src="../assets/img/service-3.jpg" alt="">
                        <a href=""><i class="fa fa-link fa-3x text-danger"></i></a>
                    </div>
                    <div class="project-title">
                        <h4 class="mb-0">InnovateHub Portal</h4>
                    </div>
                </div>
                <div class="project-item pe-5 pb-5">
                    <div class="project-img mb-3">
                        <img class="img-fluid rounded" src="../assets/img/service-4.jpg" alt="">
                        <a href="https://gridspro.tech" target="_blank"><i class="fa fa-link fa-3x text-danger"></i></a>
                    </div>
                    <div class="project-title">
                        <h4 class="mb-0">Grids Pro Website</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Projects End -->







    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="fs-5 fw-medium text-danger">Testimonial</p>
                <h1 class="display-5 mb-5">What Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.3s">

                @foreach ($allfeedback as $feedback)
                    <div class="testimonial-item">
                        <div class="testimonial-text border rounded p-4 pt-5 mb-5">
                            <div class="btn-square bg-white border rounded-circle">
                                <i class="fa fa-quote-right fa-2x text-danger"></i>
                            </div>
                            {!! nl2br(e(Str::limit($feedback->feedback, 200))) !!}

                        </div>
                        <img style="object-fit: cover; height: 100px; width: 100px" class="rounded-circle mb-3"
                        src="{{ !empty($feedback->photo) ? url('upload/feedback_images/' . $feedback->photo) : url('../../upload/no_image.png') }}"
                        alt="{{ $feedback->cus_name }}">


                        <h4>{{ $feedback->cus_name }}</h4>
                        <span></span>
                    </div>
                @endforeach

                {{-- <div class="testimonial-item">
                    <div class="testimonial-text border rounded p-4 pt-5 mb-5">
                        <div class="btn-square bg-white border rounded-circle">
                            <i class="fa fa-quote-right fa-2x text-danger"></i>
                        </div>
                        Eversys Lanka exceeded our expectations in every aspect. From the initial consultation to the
                        final delivery, their team's dedication to quality and innovation shone through. Highly recommended.
                    </div>
                    <img class="rounded-circle mb-3" src="../assets/img/testimonial-2.jpg" alt="">
                    <h4>Abdhul Raazeen</h4>
                    <span></span>
                </div> --}}

            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Callback Start -->
    <div class="container-fluid callback my-5 pt-5">
        <div class="container pt-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="bg-white border rounded p-4 p-sm-5 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                            <p class="fs-5 fw-medium text-danger">Get In Touch</p>
                            <h1 class="display-5 mb-5">Request A Call-Back</h1>
                        </div>
                        <form method="POST" action="{{ route('inquire.store') }}">
                            @csrf
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control text-capitalize" id="name"
                                            name="name" placeholder="Your Name" required>
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="mail" name="email"
                                            placeholder="Your Email" required>
                                        <label for="mail">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="mobile" name="mobile"
                                            placeholder="Your Mobile" required>
                                        <label for="mobile">Your Mobile</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" name="subject"
                                            placeholder="Subject" required>
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message" name="message"
                                            style="height: 100px" required></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button class="btn btn-danger w-100 py-3" type="submit">Submit Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Callback End -->
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
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


@endsection
