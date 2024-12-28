@extends('home.header')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'About Us')
@section('content')



    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-4 animated slideInDown">About</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-danger" href="{{ url('/') }}">Home</a></li>

                    <li class="breadcrumb-item active" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


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
                                <button class="nav-link fw-semi-bold text-danger" id="nav-mission-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-mission" type="button" role="tab" aria-controls="nav-mission"
                                    aria-selected="false">Mission</button>
                                <button class="nav-link fw-semi-bold text-danger" id="nav-vision-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-vision" type="button" role="tab" aria-controls="nav-vision"
                                    aria-selected="false">Vision</button>
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
                            <div class="tab-pane fade" id="nav-mission" role="tabpanel" aria-labelledby="nav-mission-tab">
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


    <!-- Facts Start -->
    <div class="container-fluid facts my-3 py-3">
        <div class="container py-3">
            <div class="row g-5">
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-users fa-3x text-white mb-3"></i>
                    <h1 class="display-4 text-white" data-toggle="counter-up">{{$formattedTotalcustomers}}</h1>
                    <span class="fs-5 text-white">Happy Clients</span>
                    <hr class="bg-white w-25 mx-auto mb-0">
                </div>
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <i class="fa fa-check fa-3x text-white mb-3"></i>
                    <h1 class="display-4 text-white" data-toggle="counter-up">{{$formattedPending_project}}</h1>
                    <span class="fs-5 text-white">Projects Completed</span>
                    <hr class="bg-white w-25 mx-auto mb-0">
                </div>
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-users-cog fa-3x text-white mb-3"></i>
                    <h1 class="display-4 text-white" data-toggle="counter-up">{{$all_staff}}</h1>
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


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container justify-content-center">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="fs-5 fw-medium text-danger">Our Team</p>
                <h1 class="display-5 mb-5">Exclusive Team</h1>
            </div>
            <div class="row g-4 justify-content-center owl-carousel project-carousel">
                @foreach ($staffs as $staff)
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item ">
                        <img class="img-fluid rounded"
                        src="{{ !empty($staff->photo) ? url('upload/staff_images/' . $staff->photo) : url('upload/no_staff.jpg') }}"
                        alt="{{ $staff->e_name }}" title="{{ $staff->e_name }}">
                        <div class="team-text">
                            <h4 class="mb-0 text-capitalize">{{ $staff->e_name }}</h4>

                            <div class="team-social d-flex">

                                <h5 class="mb-0  text-capitalize"
                                    style="color: rgb(250, 0, 0); text-shadow: -1px -1px 0 #ffffff, 1px -1px 0 #ffffff, -1px 1px 0 #ffffff, 1px 1px 0 #ffffff;">
                                    {{ $staff->job_role }}</h5>

                            </div>

                        </div>
                    </div>
                </div>

                @endforeach


            </div>
        </div>
    </div>
    <!-- Team End -->

@endsection
