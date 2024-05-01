@extends('home.header')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Services')
@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-4 animated slideInDown">Services</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-danger" href="{{ url('/') }}">Home</a></li>

                    <li class="breadcrumb-item active" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


 <!-- Service Start -->
 <div class="container-xxl service py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="fs-5 fw-medium text-danger">Our Services</p>
            <h1 class="display-5 mb-5">Awesome Financial Services For Business</h1>
        </div>
        <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-lg-4">
                <div class="nav nav-pills d-flex justify-content-between w-100 h-100 me-4">
                    <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-4 active" data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                        <h5 class="m-0"><i class="fa fa-bars text-danger me-3"></i>Web Development</h5>
                    </button>
                    <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                        <h5 class="m-0"><i class="fa fa-bars text-danger me-3"></i>E-Commerce Solutions</h5>
                    </button>
                    <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                        <h5 class="m-0"><i class="fa fa-bars text-danger me-3"></i>Custom Software Development</h5>
                    </button>
                    <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-0" data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                        <h5 class="m-0"><i class="fa fa-bars text-danger me-3"></i>Maintenance and Support</h5>
                    </button>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="tab-content w-100">
                    <div class="tab-pane fade show active" id="tab-pane-1">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute rounded w-100 h-100" src="../assets/img/service-1.jpg"
                                        style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-4">Web Development and Hosting</h3>
                                <p class="mb-4">Empowering online presence through expert web development. Secure and reliable web hosting for seamless digital experiences. Your journey to success begins here.</p>
                                <p><i class="fa fa-check text-danger me-3"></i>Integrated Web Solutions:</p>
                                <p><i class="fa fa-check text-danger me-3"></i>Reliable Hosting Services</p>
                                <p><i class="fa fa-check text-danger me-3"></i>Security and Support</p>
                                <a class="btn btn-danger py-3 px-5 mt-3" href="{{ route('contact') }}">Contact Us</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-2">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute rounded w-100 h-100" src="../assets/img/service-2.jpg"
                                        style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-4">E - Commerce Websites</h3>
                                <p class="mb-4">Unlock the full potential of online commerce with our comprehensive e-commerce solutions. We design and develop user-friendly, secure, and scalable online stores that drive business growth.</p>
                                <p><i class="fa fa-check text-danger me-3"></i>User-Centric Online Stores</p>
                                <p><i class="fa fa-check text-danger me-3"></i>Secure Transaction Solutions</p>
                                <p><i class="fa fa-check text-danger me-3"></i>Scalable E-Commerce Solutions</p>
                                <a class="btn btn-danger py-3 px-5 mt-3"href="{{ route('contact') }}">Contact Us</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-3">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute rounded w-100 h-100" src="../assets/img/service-3.jpg"
                                        style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-4">Custom Software Development</h3>
                                <p class="mb-4">Harness the power of bespoke software solutions. Our custom development services cater to your specific requirements, ensuring efficiency, scalability, and seamless integration.</p>
                                <p><i class="fa fa-check text-danger me-3"></i>Tailored Solutions for Unique Needs</p>
                                <p><i class="fa fa-check text-danger me-3"></i>Scalable and Efficient Software</p>
                                <p><i class="fa fa-check text-danger me-3"></i>Integration and Compatibility</p>
                                <a class="btn btn-danger py-3 px-5 mt-3"href="{{ route('contact') }}">Contact Us</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-4">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute rounded w-100 h-100" src="../assets/img/service-4.jpg"
                                        style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-4">Maintenance and Support</h3>
                                <p class="mb-4">Ensure the longevity of your digital assets with our reliable maintenance and support services. We provide updates, and optimizations to keep your solutions running smoothly.</p>
                                <p><i class="fa fa-check text-danger me-3"></i>Proactive System Maintenance</p>
                                <p><i class="fa fa-check text-danger me-3"></i>Timely Updates and Upgrades</p>
                                <p><i class="fa fa-check text-danger me-3"></i>Responsive Customer Support</p>
                                <a class="btn btn-danger py-3 px-5 mt-3"href="{{ route('contact') }}">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->



    <!-- Callback Start -->
    <div class="container-fluid callback mt-5 py-5">
        <div class="container pt-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="bg-white border rounded p-4 p-sm-5 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                            <p class="fs-5 fw-medium text-danger justify-content-center">Get In Touch</p>
                            <h1 class="display-5 mb-5">Request A Call-Back</h1>
                        </div>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="mail" placeholder="Your Email">
                                    <label for="mail">Your Email</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="mobile" placeholder="Your Mobile">
                                    <label for="mobile">Your Mobile</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <button class="btn btn-danger w-100 py-3" type="button"><a href="mailto:spectraztechlabs@gmail.com" style="color: aliceblue;">Submit Now</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Callback End -->


@endsection
