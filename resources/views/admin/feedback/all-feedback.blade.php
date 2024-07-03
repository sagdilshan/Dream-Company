@extends('home.dash-header')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Feedbacks')
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
                            <h2 style="font-family: Open Sans;">All Feedbacks</h2>

                            <br>
                            <table id="example3" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Customer Image</th>
                                        <th>Customer Name</th>
                                        <th>Feedback</th>


                                        <th>Action</th>
                                    </tr>

                                </thead>
                                <tbody>


                                    @foreach ($feedbacks as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>

                                            <td>
                                                @if (!empty($item->photo) && file_exists(public_path('upload/feedback_images/' . $item->photo)))
                                                    <img src="{{ url('upload/feedback_images/' . $item->photo) }}"
                                                        class=" mr-2" style="width: 60px; height: 60px; border-radius: 50%; object-fit: cover;">
                                                @else
                                                    <img src="{{ url('upload/no_image.png') }}"
                                                        class="mr-2"  style="width: 60px; height: 60px; border-radius: 50%; object-fit: cover;">
                                                @endif
                                            </td>
                                            <td>{{ $item->cus_name }}</td>
                                            <td>{{ $item->feedback }}</td>

                                            <td>
                                                <a href="" class="btn btn-outline-danger">Delete</a>
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

                                    <h2 class="mb-4" style="font-family: Open Sans;color: red;">Add Feedbacks</h2>


                                    <div class="active tab-pane" id="settings">
                                        <form method="POST" action="{{ route('admin.feedback.store') }}" enctype="multipart/form-data">
                                            @csrf


                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label" style="font-weight: 600;">Customer
                                                    Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name= "cus_name"
                                                        placeholder="Enter customer name" required>


                                                </div>
                                            </div>




                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label" style="font-weight: 600;">Customer Image</label>
                                                <div class="col-sm-10">
                                                    <input type="file" class="form-control" name="photo" accept="image/*" id="image">
                                                </div>
                                            </div>


                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label" style="font-weight: 600;">Feedback</label>
                                                <div class="col-sm-10">
                                                    <textarea rows="4" class="form-control" name="feedback" placeholder="Feedback" required></textarea>

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
