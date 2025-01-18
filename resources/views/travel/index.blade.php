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
                            <h3>15</h3>

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
                            <h3>24</h3>

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
                            <h3>12</h3>

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
                            <h3>45</h3>

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
                            <h3>Rs. 105,100</h3>
                            <p style="font-size: 1.5rem; color: white;">Total Earn</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-money"></i>
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
                            <h3>Rs. 15,000</h3>

                            <p style="font-size: 1.5rem; color: white;"> Hire's Commission</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-money"></i>
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
                            <h3>15</h3>

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
                            <h3>30</h3>

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

                <div class="col-lg-3 col-sm-6">
                    <!-- smalls card -->
                    <div class="small-box " style="background-color: rgb(255, 20, 20)";>
                        <div class="inner">
                            {{-- <h3>{{$formattedPending_project}}</h3> --}}
                            <h3>15</h3>

                            <p style="font-size: 1.5rem; color: white;">Vehicle Models</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-archive"></i>
                        </div>
                        <a href="{{ route('travel.vehicle.model') }}" class="small-box-footer">
                            More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>


                <div class="col-lg-3 col-sm-6">
                    <!-- small card -->
                    <div class="small-box " style="background-color: rgb(255, 20, 20)";>
                        <div class="inner">
                            {{-- <h3>{{$formattedCompleted_project}}</h3> --}}
                            <h3>24</h3>

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
                            <h3>12</h3>

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
                            <h3>45</h3>

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
            </div>

        </div>
        <br>
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <!-- /.card-header -->
                        <div class="card-body">
                            <h2 style="font-family: Open Sans;">Pending Hires</h2>
                            <br>
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Customer Name</th>
                                        <th>Customer Phone</th>
                                        <th>Vehicle No</th>
                                        <th>Driver Phone</th>
                                        <th>Destination</th>
                                        <th>Date & Time</th>

                                        <th>Action</th>
                                    </tr>

                                </thead>
                                <tbody>


                                    {{-- @foreach ($pending_project as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>


                                            <td>{{ $item->p_name }}</td>
                                            <td>{{ $item->association }}</td>
                                            <td>{{ $item->p_fee }}</td>
                                            <td>{{ $item->s_month }}</td>

                                            <td>
                                                @if ($item->project_status == 'completed')
                                                    <span class="badge badge-success text-uppercase"
                                                        style="font-size: 1rem;background-color: rgb(42, 253, 0);">Completed</span>
                                                @elseif ($item->project_status == 'pending')
                                                    <span class="badge badge-danger text-uppercase"
                                                        style="font-size: 1rem;background-color: rgb(255, 18, 18);">Pending</span>
                                                @else
                                                    <span class="badge badge-warning text-uppercase"
                                                        style="font-size: 1rem;background-color: rgb(255, 144, 18);">Canceled</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('edit.project', $item->id) }}" class="btn btn-outline-success">Edit</a>
                                            </td>

                                        </tr>
                                    @endforeach --}}


                                    </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>


                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->



    </div>
    <!-- Contact End -->


@endsection
