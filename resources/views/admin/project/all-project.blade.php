@extends('home.dash-header')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Projects')
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
        <br>
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <!-- /.card-header -->
                        <div class="card-body">
                            <h2 style="font-family: Open Sans;">Completed Projects</h2>

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

                                    <h2 class="mb-4" style="font-family: Open Sans;color: red;">Add Project</h2>


                                    <div class="active tab-pane" id="settings">
                                        <form method="POST" action="" class="form-horizontal">
                                            @csrf


                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label" style="font-weight: 600;">Project
                                                    Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="p_name"
                                                        placeholder="Enter project name" required>


                                                </div>
                                            </div>
                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label" style="font-weight: 600;">Sub
                                                    Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="s_name"
                                                        placeholder="Enter sub name" >


                                                </div>
                                            </div>
                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label" style="font-weight: 600;">Project
                                                    Link</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="p_link"
                                                        placeholder="Enter project link" required>


                                                </div>
                                            </div>
                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label" style="font-weight: 600;">Association</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="association"
                                                        placeholder="Enter association name" required>


                                                </div>
                                            </div>

                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label" style="font-weight: 600;">Assign Customer</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control"  name="assign_customer" required>

                                                        <option value="normal">Customer 1
                                                        </option>
                                                        <option value="sale">Customer 2
                                                        </option>
                                                        <option value="sale">ll 2
                                                        </option>


                                                    </select>

                                                </div>
                                            </div>

                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label" style="font-weight: 600;">Project Fee</label>
                                                <div class="col-sm-10">
                                                    <input type="number" class="form-control" name="p_fee"
                                                        placeholder="Enter project fee" required min="10000">


                                                </div>
                                            </div>

                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label" style="font-weight: 600;">Started
                                                    Month</label>
                                                <div class="col-sm-10">
                                                    <input type="month" class="form-control" name="s_month" required>


                                                </div>
                                            </div>

                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label" style="font-weight: 600;">Finished
                                                    Month</label>
                                                <div class="col-sm-10">
                                                    <input type="month" class="form-control" name="f_month">
                                                </div>
                                            </div>

                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label" style="font-weight: 600;">Thumbnail</label>
                                                <div class="col-sm-10">
                                                    <input type="file" class="form-control" name="thumb" accept="image/*">
                                                </div>
                                            </div>

                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label" style="font-weight: 600;">Images</label>
                                                <div class="col-sm-10">
                                                    <input type="file" class="form-control"  multiple accept="image/*">
                                                </div>
                                            </div>

                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label" style="font-weight: 600;">Description</label>
                                                <div class="col-sm-10">
                                                    <textarea rows="4" class="form-control" name="description" placeholder="Description" required></textarea>

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
