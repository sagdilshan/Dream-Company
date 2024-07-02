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
                            <h3>hfgf</h3>

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
                            <h3>sw</h3>

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
                            <h3>nnb</h3>

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
                            <h3>rgg</h3>

                            <p style="font-size: 1.5rem; color: white;">SpectraZ Admins</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user-shield"></i>
                        </div>
                        <a href="{{route('admin.all')}}" class="small-box-footer">
                            More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <!-- small card -->
                    <div class="small-box " style="background-color: rgb(255, 20, 20)";>
                        <div class="inner">
                            <h3>dbb</h3>

                            <p style="font-size: 1.5rem; color: white;">Total Earn</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-archive"></i>
                        </div>
                        <a  class="small-box-footer">
                            More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <!-- small card -->
                    <div class="small-box " style="background-color: rgb(255, 20, 20)";>
                        <div class="inner">
                            <h3>dbd</h3>

                            <p style="font-size: 1.5rem; color: white;">Total Staff</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-users"></i>
                        </div>
                        <a href="{{route('admin.staff')}}" class="small-box-footer">
                            More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <!-- small card -->
                    <div class="small-box " style="background-color: rgb(255, 20, 20)";>
                        <div class="inner">
                            <h3>db</h3>

                            <p style="font-size: 1.5rem; color: white;">Total Feedbacks</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <a href="{{route('admin.feedback')}}" class="small-box-footer">
                            More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <!-- small card -->
                    <div class="small-box " style="background-color: rgb(255, 20, 20)";>
                        <div class="inner">
                            <h3>cfb</h3>

                            <p style="font-size: 1.5rem;color: white;">Inquires</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user-shield"></i>
                        </div>
                        <a href="{{route('admin.inquire')}}" class="small-box-footer">
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
                                        <th>Item Name</th>
                                        <th>Sale Price</th>
                                        <th>Category</th>
                                        <th>Stocks</th>
                                        <th>Status</th>

                                        <th>Action</th>
                                    </tr>

                                </thead>
                                <tbody>

                                    {{-- @foreach ($alldisapprove as $key => $item) --}}
                                    <tr>
                                        <td>4re</td>


                                        <td>feg</td>
                                        <td>erg</td>
                                        <td>htht</td>
                                        <td>htht</td>
                                        <td>htht</td>


                                        <td>
                                            <a href=" " class="btn btn-outline-info">Edit</a>

                                        </td>

                                    </tr>

                                    <tr>
                                        <td>dv</td>


                                        <td>feg</td>
                                        <td>erg</td>
                                        <td>htht</td>
                                        <td>333</td>
                                        <td>htht</td>


                                        <td>
                                            <a href=" " class="btn btn-outline-info">Ced</a>

                                        </td>

                                    </tr>

                                    {{-- @endforeach --}}


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
