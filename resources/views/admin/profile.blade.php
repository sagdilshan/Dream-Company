@extends('home.dash-header')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Profile')
@section('content')



    <!-- Page Head End -->
    <br><br><br><br>
    <!-- Contact Start -->
    <div class="container-xxl py-5">




        <section class="content ">
            <div class="container-fluid ">
                <div class="row">

                    <!-- /.col-d -->
                    <div class="col-lg-12">
                        <div class="card">

                            <div class="card-body">
                                <div class="tab-content">

                                    <h2 style="font-family: Open Sans;color: red;">Profile </h2>

                                    <br>

                                    <div class="active tab-pane" id="settings">
                                        <form method="POST" action="{{ route('admin.profile.store') }}"
                                            class="form-horizontal">
                                            @csrf


                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label" style="font-weight: 600;">Admin
                                                    Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control text-capitalize"
                                                        name= "name" placeholder="Enter admin name"
                                                        value="{{ Auth::user()->name }}" required>


                                                </div>
                                            </div>
                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label"
                                                    style="font-weight: 600;">Username</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control " name= "username"
                                                        placeholder="Enter username" value="{{ Auth::user()->username }}"
                                                        required>


                                                </div>
                                            </div>







                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label"
                                                    style="font-weight: 600;">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control" name="email"
                                                        placeholder="Enter email" value="{{ Auth::user()->email }}"
                                                        required>
                                                </div>
                                            </div>

                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label"
                                                    style="font-weight: 600;">Address</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control text-capitalize"
                                                        name="address" value="{{ Auth::user()->address }}"
                                                        placeholder="Enter address" required>
                                                </div>
                                            </div>

                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label"
                                                    style="font-weight: 600;">Phone</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="phone"
                                                        placeholder="Enter contact number" value="{{ Auth::user()->phone }}"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label" style="font-weight: 600;">NIC</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="nic"
                                                        value="{{ Auth::user()->nic }}" placeholder="Enter NIC number"
                                                        required>
                                                </div>
                                            </div>




                                            <div class="form-group row mt-3">
                                                <div class="offset-sm-2 col-sm-10 d-flex  justify-content-end">
                                                    <button type="submit" class="btn btn-danger">Update Changes</button>
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
        <br>

        <section class="content ">
            <div class="container-fluid ">
                <div class="row">

                    <!-- /.col -->
                    <div class="col-lg-12">
                        <div class="card">

                            <div class="card-body">
                                <div class="tab-content">

                                    <h2 style="font-family: Open Sans;color: red;">Update Password </h2>

                                    <br>
                                    <div class="active tab-pane" id="settings">
                                        <form method="POST" action="{{ route('admin.update.password') }}"
                                            class="form-horizontal" enctype="multipart/form-data">
                                            @csrf


                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label" style="font-weight: 600;">Old
                                                    Password</label>
                                                <div class="col-sm-10">
                                                    <input type="password"
                                                        class="form-control @error('old_password') is-invalid @enderror"
                                                        name= "old_password" id="old_password"
                                                        placeholder="Enter old password" required>
                                                    @error('old_password')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror

                                                </div>
                                            </div>






                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label" style="font-weight: 600;">New
                                                    Password</label>
                                                <div class="col-sm-10">
                                                    <input type="password"
                                                        class="form-control @error('new_password') is-invalid @enderror"
                                                        name="new_password" id="new_password"
                                                        placeholder="Enter new password" required>
                                                    @error('new_password')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label" style="font-weight: 600;">Confirm
                                                    Password</label>
                                                <div class="col-sm-10">
                                                    <input type="password" class="form-control"
                                                        name="new_password_confirmation" id="new_password_confirmation"
                                                        placeholder="Confirm password" required>
                                                </div>
                                            </div>



                                            <div class="form-group row mt-3">
                                                <div class="offset-sm-2 col-sm-10 d-flex  justify-content-end">
                                                    <button type="submit" class="btn btn-danger">Update Changes</button>
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
