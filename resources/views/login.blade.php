@extends('home.header')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Login Page')
@section('content')

 <!-- Page Header Start -->
 <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <h1 class="display-3 mb-4 animated slideInDown">Login</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a class="text-danger" href="{{ url('/') }}">Home</a></li>

                <li class="breadcrumb-item active" aria-current="page">Login</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Head End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <p class="fs-5 fw-medium text-danger">Login</p>
                    <h1 class="display-5 mb-4">Welcome Back!</h1>
                    <p class="mb-4">Please enter your credentials to log in.</p>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="email" placeholder="Enter email" required>
                                    <label for="email">Email</label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="password" placeholder="Enter password" required>
                                    <label for="password">Password</label>
                                </div>
                            </div>

                            <div class="col-md-12 mt-5">
                                <button class="btn btn-danger py-3 px-5" type="submit">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style=" object-fit: cover;">
                    <div class="position-relative rounded overflow-hidden h-100 ">
                        <img class="position-relative w-100 h-100" src="../assets/img/service-4.jpg"
                            style=" border:0; object-fit: cover; max-height: 26rem;" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


@endsection
