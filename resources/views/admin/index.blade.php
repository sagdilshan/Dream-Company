@extends('home.dash-header')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Admin Dashboard')
@section('content')



    <!-- Page Head End -->
    <br><br><br><br>
    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <!-- small card -->
                    <div class="small-box " style="background-color: rgb(255, 20, 20)";>
                        <div class="inner">
                            <h3>{{$formattedPending_project}}</h3>

                            <p style="font-size: 1.5rem; color: white;">Pending Projects</p>
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
                            <h3>{{$formattedCompleted_project}}</h3>

                            <p style="font-size: 1.5rem; color: white;">Completed Projects</p>
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
                            <h3>{{$formattedTotalcustomers}}</h3>

                            <p style="font-size: 1.5rem; color: white;">SpectraZ Customers</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-users"></i>
                        </div>
                        <a href="{{ route('admin.client') }}" class="small-box-footer">
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
                            <h3>{{$formattedTotaladmins}}</h3>

                            <p style="font-size: 1.5rem; color: white;">SpectraZ Admins</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user-shield"></i>
                        </div>
                        <a href="{{ route('admin.all') }}" class="small-box-footer">
                            More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <!-- small card -->
                    <div class="small-box " style="background-color: rgb(255, 20, 20)";>
                        <div class="inner">
                            <h3>Rs. {{$formattedPrice}}</h3>

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
                            <h3>{{$all_staff}}</h3>

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
                            <h3>{{$all_feedbacks}}</h3>

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
                            <h3>{{$all_inquire}}</h3>

                            <p style="font-size: 1.5rem;color: white;">Inquires</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user-shield"></i>
                        </div>
                        <a href="{{ route('admin.inquire') }}" class="small-box-footer">
                            More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <!-- ./col -->
            </div>

        </div>

        <br>
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <!-- /.card-header -->
                        <div class="card-body">
                            <h2 style="font-family: Open Sans;">Pending Projects</h2>
                            <br>
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Project Name</th>
                                        <th>Association</th>
                                        <th>Price</th>
                                        <th>Start Month</th>
                                        <th>Status</th>

                                        <th>Action</th>
                                    </tr>

                                </thead>
                                <tbody>


                                    @foreach ($pending_project as $key => $item)
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
                                            {{-- {{ route('manage.edit.products', $item->id) }} --}}
                                            <td>
                                                <a href="" class="btn btn-outline-success">Edit</a>
                                            </td>

                                        </tr>
                                    @endforeach


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
