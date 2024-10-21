@extends('home.dash-header')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Edit Staff')
@section('content')



    <!-- Page Head End -->
    <br><br><br><br>
    <!-- Contact Start -->
    <div class="container-xxl py-5">


        <section class="content ">
            <div class="container-fluid ">
                <div class="row">

                    <!-- /.col -->
                    <div class="col-lg-12">
                        <div class="card">

                            <div class="card-body">
                                <div class="tab-content">
                                    <h2 class="mb-4" style="font-family: Open Sans;color: red;">Edit Employee</h2>



                                    <div class="active tab-pane" id="settings">
                                        <form method="POST" action=" "
                                            class="form-horizontal" enctype="multipart/form-data">
                                            @csrf

                                            <input type="hidden" class="form-control" name="id"
                                            value="{{ $ustaff->id }}">

                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label" style="font-weight: 600;">Employee
                                                    Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name= "e_name"
                                                        placeholder="Enter employee name" required value="{{ $ustaff->e_name }}">


                                                </div>
                                            </div>




                                            {{-- <div class="form-group row mt-3" id="uploadForm">
                                                <label class="col-sm-2 col-form-label" style="font-weight: 600;">Employee
                                                    Image</label>
                                                <div class="col-sm-10">
                                                    <input type="file" class="form-control" id="fileInput" name="fileInput"
                                                        accept="image/*">
                                                        <input type="hidden" class="form-control"  name="photo" id="fileLink"
                                                         required value="{{ $ustaff->photo }}">
                                                </div>
                                            </div> --}}


                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label" style="font-weight: 600;">Job
                                                    Role</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="job_role" value="{{ $ustaff->job_role }}"
                                                        placeholder="Enter Job Role" required>
                                                </div>
                                            </div>
                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label" style="font-weight: 600;">NIC</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="nic" value="{{ $ustaff->nic }}"
                                                        placeholder="Enter NIC number" required>
                                                </div>
                                            </div>
                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label"
                                                    style="font-weight: 600;">Phone</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="phone" value="{{ $ustaff->phone }}"
                                                        placeholder="Enter phone number" required>
                                                </div>
                                            </div>

                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label"
                                                    style="font-weight: 600;">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control" name="email" value="{{ $ustaff->email }}"
                                                        placeholder="Enter email address" required>
                                                </div>
                                            </div>

                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label"
                                                    style="font-weight: 600;">Address</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="address" value="{{ $ustaff->address }}"
                                                        placeholder="Enter address" required>
                                                </div>
                                            </div>

                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label" style="font-weight: 600;">Work
                                                    Status</label>
                                                <div class="col-sm-10">
                                                    {{-- <select class="form-control" name="status" value="{{ $ustaff->status }}" required> --}}
                                                        <select class="form-control" name="status" required>
                                                            @foreach ($status as $statu)
                                                                <option value="{{ $statu }}"
                                                                    {{ $ustaff->statu == $statu ? 'selected' : '' }}>
                                                                    {{ $statu }}
                                                                </option>
                                                            @endforeach
                                                        </select>

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
        document.getElementById('fileInput').addEventListener('change', function(event) {
            var fileInput = event.target;
            if(fileInput.files.length > 0) {
                var file = fileInput.files[0];
                document.getElementById('fileLink').value = file.name;
            }
        });
    </script>

@endsection
