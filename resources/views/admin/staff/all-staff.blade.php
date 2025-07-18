@extends('home.dash-header')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Staff')
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
                            <h2 style="font-family: Open Sans;">All Staff</h2>

                            <br>
                            <table id="example3" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Employee Image</th>
                                        <th>Employee Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Job</th>
                                        <th>Address</th>
                                        <th>Status</th>

                                        <th>Action</th>
                                    </tr>

                                </thead>
                                <tbody>


                                    @foreach ($allstaff as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>

                                            <td>
                                                @if (!empty($item->photo) && file_exists(public_path('upload/staff_images/' . $item->photo)))
                                                    <img src="{{ url('upload/staff_images/' . $item->photo) }}"
                                                        class=" mr-2"
                                                        style="width: 60px; height: 60px; border-radius: 50%; object-fit: cover;">
                                                @else
                                                    <img src="{{ url('upload/no_image.png') }}" class="mr-2"
                                                        style="width: 60px; height: 60px; border-radius: 50%; object-fit: cover;">
                                                @endif
                                            </td>
                                            <td>{{ $item->e_name }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->phone }}</td>
                                            <td>{{ $item->job_role }}</td>
                                            <td>{{ $item->address }}</td>
                                            <td>
                                                @if ($item->status == 'work')
                                                    <span class="badge badge-success text-uppercase"
                                                        style="font-size: 1rem;background-color: rgb(42, 253, 0);">Work</span>
                                                @elseif ($item->status == 'resigned')
                                                    <span class="badge badge-danger text-uppercase"
                                                        style="font-size: 1rem;background-color: rgb(255, 18, 18);">Resigned</span>
                                                @else
                                                    <span class="badge badge-warning text-uppercase"
                                                        style="font-size: 1rem;background-color: rgb(255, 144, 18);">{{ $item->status }}</span>
                                                @endif
                                            </td>

                                            <td>
                                                <a href="{{ route('edit.staff', $item->id) }}"
                                                    class="btn btn-outline-success">Edit</a>
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
                                    <h2 class="mb-4" style="font-family: Open Sans;color: red;">Add Employee</h2>



                                    <div class="active tab-pane" id="settings">
                                        <form method="POST" action="{{ route('admin.staff.store') }}"
                                            class="form-horizontal" enctype="multipart/form-data">
                                            @csrf


                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label" style="font-weight: 600;">Employee
                                                    Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name= "e_name"
                                                        placeholder="Enter employee name" required>


                                                </div>
                                            </div>




                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label" style="font-weight: 600;">Employee
                                                    Image</label>
                                                <div class="col-sm-10">
                                                    {{-- <input type="file" class="form-control" name="photo"
                                                        accept="image/*" required> --}}
                                                        <input type="file" class="form-control" name="photo" accept="image/*" required onchange="validateImage(this)">
                                                </div>
                                            </div>


                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label" style="font-weight: 600;">Job
                                                    Role</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="job_role"
                                                        placeholder="Enter job role" required>
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
                                                    style="font-weight: 600;">Phone</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="phone"
                                                        placeholder="Enter phone number" required>
                                                </div>
                                            </div>

                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label"
                                                    style="font-weight: 600;">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control" name="email"
                                                        placeholder="Enter email address" required>
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
                                                <label class="col-sm-2 col-form-label" style="font-weight: 600;">Joined
                                                    Date</label>
                                                <div class="col-sm-10">
                                                    <input type="date" class="form-control" name="join_date" id="join_date"
                                                        placeholder="Enter joining date" required>
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

    <script>
        function validateImage(input) {
            const file = input.files[0];
            if (file) {
                const img = new Image();
                img.onload = function () {
                    if (img.width !== img.height) {
                        alert("Please upload a square image (1:1 aspect ratio).");
                        input.value = ""; // Clear the input value
                    }
                };
                img.src = URL.createObjectURL(file);
            }
        }
    </script>

    <script>
        // Function to get today's date inh the format yyyy-mm-dd
        function setMaxDate() {
            var today = new Date();
            var year = today.getFullYear();
            var month = ('0' + (today.getMonth() + 1)).slice(-2); // getMonth() is zero-based, so we add 1
            var day = ('0' + today.getDate()).slice(-2);

            return year + '-' + month + '-' + day;
        }

        // Set max attribute to the current date to prevent future dates
        document.getElementById('join_date').setAttribute('max', setMaxDate());
    </script>

@endsection
