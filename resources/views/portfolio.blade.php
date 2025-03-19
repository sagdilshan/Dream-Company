@extends('home.software-header')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Portfolio')
@section('content')



    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-4 animated slideInDown">Portfolio</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-danger" href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->




    <!-- Projects Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="fs-5 fw-medium text-danger">Our Projects</p>
                <h1 class="display-5 mb-5">We Have Completed Latest Projects</h1>
            </div>
            <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.3s">



                @foreach ($projectsviews as $projectsview)
                <div class="project-item pe-5 pb-5">
                    <div class="project-img mb-3">
                        <img class="img-fluid rounded" src="{{ !empty($projectsview->thumb) ? url('upload/project_images/' . $projectsview->thumb) : url('upload/no_staff.jpg') }}" alt="{{ $projectsview->p_name }}" title="{{ $projectsview->p_name }}">
                        <a href="{{ Str::startsWith($projectsview->p_link, 'http') ? $projectsview->p_link : 'https://' . $projectsview->p_link }}" target="_blank" rel="noopener noreferrer"><i class="fa fa-link fa-3x text-danger"></i></a>
                    </div>
                    <div class="project-title">
                        <h4 class="mb-0">{{ $projectsview->p_name }}</h4>
                    </div>
                </div>
                @endforeach



            </div>
        </div>
    </div>
    <!-- Project End -->



@endsection
