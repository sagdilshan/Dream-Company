@extends('home.dash-header')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Admin Details Edit')
@section('content')

    <!-- Page Head End -->
    <br><br><br><br>
    <!-- Contact Star -->
    <div class="container-xxl py-5">

        <section class="content ">
            <div class="container-fluid ">
                <div class="row">

                    <!-- /.cohbl -->
                    <div class="col-lg-12">
                        <div class="card">

                            <div class="card-body">
                                <div class="tab-content">

                                    <h2 class="mb-4" style="font-family: Open Sans;color: red;">Edit Admin</h2>


                                    <div class="active tab-pane" id="settings">
                                        <form method="POST" action="{{ route('update.admin', ['id' => $uadmin->id]) }}" class="form-horizontal">
                                            @csrf

                                            <input type="hidden" class="form-control" name="id"
                                            value="{{ $uadmin->id }}">
                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label" style="font-weight: 600;">Admin
                                                    Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control text-capitalize"
                                                        name= "name" value="{{ $uadmin->name }}" placeholder="Enter admin name" required>


                                                </div>
                                            </div>





                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label"
                                                    style="font-weight: 600;">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control" name="email"
                                                        placeholder="Enter email" value="{{ $uadmin->email }}" required>
                                                </div>
                                            </div>

                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label"
                                                    style="font-weight: 600;">Username</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="username"
                                                        placeholder="Enter username" value="{{ $uadmin->username }}" required>
                                                </div>
                                            </div>

                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label"
                                                    style="font-weight: 600;">Address</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="address"
                                                        placeholder="Enter address" value="{{ $uadmin->address }}" required>
                                                </div>
                                            </div>

                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label"
                                                    style="font-weight: 600;">Phone</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="phone"
                                                        placeholder="Enter contact number" value="{{ $uadmin->phone }}" required>
                                                </div>
                                            </div>
                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label" style="font-weight: 600;">NIC</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="nic"
                                                        placeholder="Enter NIC number" value="{{ $uadmin->nic }}" required>
                                                </div>
                                            </div>
                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label" style="font-weight: 600;">Work
                                                    Status</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="status" required>

                                                        @foreach ($statuss as $status)
                                                            <option value="{{ $status }}"
                                                                {{ $uadmin->status == $status ? 'selected' : '' }}>
                                                                {{ ucfirst($status) }}
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


@endsection
