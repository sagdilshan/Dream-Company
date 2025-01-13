@extends('home.travel-dash-header')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Travel Admin Dashboard')
@section('content')



    <!-- Page Head End -->
    <br><br><br><br>
    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <!-- smalls card -->
                    <div class="small-box " style="background-color: rgb(255, 20, 20)";>
                        <div class="inner">
                            {{-- <h3>{{$formattedPending_project}}</h3> --}}

                            <p style="font-size: 1.5rem; color: white;">Pending Hires</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-archive"></i>
                        </div>
                        <a href="{{ route('admin.project') }}" class="small-box-footer">
                            More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>


                <div class="col-lg-3 col-sm-6">
                    <!-- small card -->
                    <div class="small-box " style="background-color: rgb(255, 20, 20)";>
                        <div class="inner">
                            {{-- <h3>{{$formattedCompleted_project}}</h3> --}}

                            <p style="font-size: 1.5rem; color: white;">Completed Hires</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <a href="{{ route('admin.project') }}" class="small-box-footer">
                            More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>

                <!-- ./col -->
                <div class="col-lg-3 col-sm-6">
                    <!-- small card -->
                    <div class="small-box " style="background-color: rgb(255, 20, 20)";>
                        <div class="inner">
                            {{-- <h3>{{$formattedTotalcustomers}}</h3> --}}

                            <p style="font-size: 1.5rem; color: white;">Eversys Vehicles</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-users"></i>
                        </div>
                        <a href="{{ route('travel.vehicle.info') }}" class="small-box-footer">
                            More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <!-- ./col -->

                <!-- ./col -->
                <div class="col-lg-3 col-sm-6">
                    <!-- small card -->
                    <div class="small-box " style="background-color: rgb(255, 20, 20)";>
                        <div class="inner">
                            {{-- <h3>{{$formattedTotaladmins}}</h3> --}}

                            <p style="font-size: 1.5rem; color: white;">Eversys Customers</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user-shield"></i>
                        </div>
                        <a href="{{ route('travel.client') }}" class="small-box-footer">
                            More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <!-- small card -->
                    <div class="small-box " style="background-color: rgb(255, 20, 20)";>
                        <div class="inner">
                            {{-- <h3>Rs. {{$formattedPrice}}</h3> --}}

                            <p style="font-size: 1.5rem; color: white;">Total Earn</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-archive"></i>
                        </div>
                        <a class="small-box-footer">
                            More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <!-- small card -->
                    <div class="small-box " style="background-color: rgb(255, 20, 20)";>
                        <div class="inner">
                            {{-- <h3>{{$all_staff}}</h3> --}}

                            <p style="font-size: 1.5rem; color: white;">Total Staff</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-users"></i>
                        </div>
                        <a href="{{ route('admin.staff') }}" class="small-box-footer">
                            More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <!-- small card -->
                    <div class="small-box " style="background-color: rgb(255, 20, 20)";>
                        <div class="inner">
                            {{-- <h3>{{$all_feedbacks}}</h3> --}}

                            <p style="font-size: 1.5rem; color: white;">Total Feedbacks</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <a href="{{ route('admin.feedback') }}" class="small-box-footer">
                            More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <!-- small card -->
                    <div class="small-box " style="background-color: rgb(255, 20, 20)";>
                        <div class="inner">
                            {{-- <h3>{{$all_inquire}}</h3> --}}

                            <p style="font-size: 1.5rem;color: white;">Inquires</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user-shield"></i>
                        </div>
                        <a href="{{ route('travel.inquire') }}" class="small-box-footer">
                            More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <!-- ./col -->
            </div>

        </div>


    </div>
    <!-- Contact End -->


@endsection
