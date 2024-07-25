@extends('home.dash-header')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Admin')
@section('content')



    <!-- Page Head End -->
    <br><br><br><br>
    <!-- Contact Start -->
    <div class="container-xxl py-5">


        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <!-- /.card-header -->
                        <div class="card-body">
                            <h2 style="font-family: Open Sans;">All Admins</h2>

                            <br>
                            <table id="example3" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Admin Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Status</th>

                                        <th>Action</th>
                                    </tr>

                                </thead>
                                <tbody>

                                    @foreach ($alladmins as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>


                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->phone }}</td>
                                            <td>{{ $item->address }}</td>

                                            <td>
                                                @if ($item->status == 'active')
                                                    <span class="badge badge-success text-uppercase"
                                                        style="font-size: 1rem;background-color: rgb(42, 253, 0);">Active</span>
                                                @elseif ($item->status == 'deactive')
                                                    <span class="badge badge-danger text-uppercase"
                                                        style="font-size: 1rem;background-color: rgb(255, 18, 18);">Deactive</span>
                                                @else
                                                    <span class="badge badge-warning text-uppercase"
                                                        style="font-size: 1rem;background-color: rgb(255, 144, 18);">{{ $item->status }}</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('edit.admin', $item->id) }}" class="btn btn-outline-success">Edit</a>
                                                <a href="" class="btn btn-outline-danger">Delete</a>
                                            </td>

                                        </tr>
                                    @endforeach


                                    </tfoot>
                            </table>
                        </div>
                        <!-- /.car-body -->
                    </div>


                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->



        <br>


        <section class="content ">
            <div class="container-fluid ">
                <div class="row">

                    <!-- /.col -->
                    <div class="col-lg-12">
                        <div class="card">

                            <div class="card-body">
                                <div class="tab-content">

                                    <h2 class="mb-4" style="font-family: Open Sans;color: red;">Add Admins</h2>


                                    <div class="active tab-pane" id="settings">
                                        <form method="POST" action="{{ route('admin.store') }}" class="form-horizontal">
                                            @csrf


                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label" style="font-weight: 600;">Admin
                                                    Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control text-capitalize"
                                                        name= "name" placeholder="Enter admin name" required>


                                                </div>
                                            </div>




                                            {{-- <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label" style="font-weight: 600;">Employee Image</label>
                                                <div class="col-sm-10">
                                                    <input type="file" class="form-control" name="image" accept="image/*">
                                                </div>
                                            </div> --}}


                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label"
                                                    style="font-weight: 600;">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control" name="email"
                                                        placeholder="Enter email" required>
                                                </div>
                                            </div>

                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label"
                                                    style="font-weight: 600;">Username</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="username"
                                                        placeholder="Enter username" required>
                                                </div>
                                            </div>

                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label"
                                                    style="font-weight: 600;">Address</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="address"
                                                        placeholder="Enter address" required>
                                                </div>
                                            </div>

                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label"
                                                    style="font-weight: 600;">Phone</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="phone"
                                                        placeholder="Enter contact number" required>
                                                </div>
                                            </div>
                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label" style="font-weight: 600;">NIC</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="nic"
                                                        placeholder="Enter NIC number" required>
                                                </div>
                                            </div>

                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label"
                                                    style="font-weight: 600;">Password</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="password"
                                                        value="SpectraZ@123" required>
                                                </div>
                                            </div>




                                            <div class="form-group row mt-3">
                                                <div class="offset-sm-2 col-sm-10 d-flex  justify-content-end">
                                                    <button type="submit" class="btn btn-danger">Save Changes</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>


                                    <!-- /.tab-pane -->
                                </div>
                                <!-- /.tab-content -->
                            </div><!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
    </div>
    <!-- Contact End -->


@endsection
