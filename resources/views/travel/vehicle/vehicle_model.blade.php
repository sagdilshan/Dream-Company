@extends('home.travel-dash-header')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Vehicle Model')
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
                            <h2 style="font-family: Open Sans;">Vehicle Models</h2>

                            <br>
                            <table id="example3" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Model Name</th>

                                        <th>Without AC Price</th>
                                        <th>With AC Price</th>

                                        <th>Action</th>
                                    </tr>

                                </thead>
                                <tbody>


                                    @foreach ($modelname as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>



                                            <td>{{ $item->model_name }}</td>
                                            <td>{{ $item->non_ac_price }}</td>
                                            <td>{{ $item->with_ac_price }}</td>

                                            <td>
                                            <a href=" " class="btn btn-outline-danger" title="Edit">Edit</a>

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



        <br>


        <section class="content ">
            <div class="container-fluid ">
                <div class="row">

                    <!-- /.col -->
                    <div class="col-lg-12">
                        <div class="card">

                            <div class="card-body">
                                <div class="tab-content">

                                    <h2 class="mb-4" style="font-family: Open Sans;color: red;">Create Vehicle Info</h2>


                                    <div class="active tab-pane" id="settings">
                                        <form method="POST" action="{{ route('vehicle.model.store') }}"
                                            class="form-horizontal" enctype="multipart/form-data">
                                            @csrf

                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group row mt-3">
                                                            <label class="col-sm-2 col-form-label"
                                                                style="font-weight: 600;">Model Name</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="model_name"
                                                                    placeholder="Enter model name" required>

                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>


                                            </div>


                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group row mt-3">
                                                            <label class="col-sm-2 col-form-label"
                                                                style="font-weight: 600;">W/O A/C 1KM</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="non_ac_price"
                                                                    placeholder="Enter without a/c price per KM" required>

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                            </div>

                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group row mt-3">
                                                            <label class="col-sm-2 col-form-label"
                                                                style="font-weight: 600;">W/I A/C 1KM</label>
                                                            <div class="col-sm-10">

                                                                <input type="text" class="form-control" name="with_ac_price"
                                                                    placeholder="Enter within a/c price per KM">


                                                            </div>
                                                        </div>
                                                    </div>


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
