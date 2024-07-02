@extends('home.dash-header')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Customers')
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
                            <h2 style="font-family: Open Sans;">All Customers</h2>

                            <br>
                            <table id="example3" class="table table-bordered table-striped">
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



        <br>


        <section class="content ">
            <div class="container-fluid ">
                <div class="row">

                    <!-- /.col -->
                    <div class="col-lg-12">
                        <div class="card">

                            <div class="card-body">
                                <div class="tab-content">

                                    <h2 class="mb-4" style="font-family: Open Sans;color: red;">Add Customers</h2>


                                    <div class="active tab-pane" id="settings">
                                        <form method="POST" action="" class="form-horizontal">
                                            @csrf


                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label" style="font-weight: 600;">Customer
                                                    Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name= "c_name"
                                                        placeholder="Enter customer name" required>


                                                </div>
                                            </div>




                                            {{-- <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label" style="font-weight: 600;">Employee Image</label>
                                                <div class="col-sm-10">
                                                    <input type="file" class="form-control" name="image" accept="image/*">
                                                </div>
                                            </div> --}}


                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label" style="font-weight: 600;">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control" name="email"
                                                    placeholder="Enter email" required>
                                                </div>
                                            </div>

                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label" style="font-weight: 600;">Address</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="address"
                                                    placeholder="Enter address" required>
                                                </div>
                                            </div>

                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label" style="font-weight: 600;">Phone</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="linkedin"
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
