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
                                        <th>Project Name</th>
                                        <th>Association</th>
                                        <th>Price</th>
                                        <th>Start Month</th>
                                        <th>Status</th>

                                        <th>Action</th>
                                    </tr>

                                </thead>
                                <tbody>


                                    @foreach ($pending_project as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>


                                            <td>{{ $item->p_name }}</td>
                                            <td>{{ $item->association }}</td>
                                            <td>{{ $item->p_fee }}</td>
                                            <td>{{ $item->s_month }}</td>

                                            <td>
                                                @if ($item->project_status == 'completed')
                                                    <span class="badge badge-success text-uppercase"
                                                        style="font-size: 1rem;background-color: rgb(42, 253, 0);">Completed</span>
                                                @elseif ($item->project_status == 'pending')
                                                    <span class="badge badge-danger text-uppercase"
                                                        style="font-size: 1rem;background-color: rgb(255, 18, 18);">Pending</span>
                                                @else
                                                    <span class="badge badge-warning text-uppercase"
                                                        style="font-size: 1rem;background-color: rgb(255, 144, 18);">Canceled</span>
                                                @endif
                                            </td>
                                            {{-- {{ route('manage.edit.products', $item->id) }} --}}
                                            <td>
                                                <a href="{{ route('edit.project', $item->id) }}" class="btn btn-outline-success">Edit</a>
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
                                        <th>Project Name</th>
                                        <th>Association</th>
                                        <th>Price</th>
                                        <th>Start Month</th>
                                        <th>Finished Month</th>
                                        <th>Status</th>

                                    </tr>

                                </thead>
                                <tbody>


                                    @foreach ($completed_project as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>


                                            <td>{{ $item->p_name }}</td>
                                            <td>{{ $item->association }}</td>
                                            <td>{{ $item->p_fee }}</td>
                                            <td>{{ $item->s_month }}</td>
                                            <td>{{ $item->f_month }}</td>


                                            <td>
                                                @if ($item->project_status == 'completed')
                                                    <span class="badge badge-success text-uppercase"
                                                        style="font-size: 1rem;background-color: rgb(42, 253, 0);">Completed</span>
                                                @elseif ($item->project_status == 'pending')
                                                    <span class="badge badge-danger text-uppercase"
                                                        style="font-size: 1rem;background-color: rgb(255, 18, 18);">Pending</span>
                                                @else
                                                    <span class="badge badge-warning text-uppercase"
                                                        style="font-size: 1rem;background-color: rgb(255, 144, 18);">Canceled</span>
                                                @endif
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

                                    <h2 class="mb-4" style="font-family: Open Sans;color: red;">Add Project</h2>


                                    <div class="active tab-pane" id="settings">
                                        <form method="POST" action="{{ route('admin.project.store') }}"
                                            class="form-horizontal" enctype="multipart/form-data">
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
                                                        placeholder="Enter sub name (optional)">


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
                                                <label class="col-sm-2 col-form-label"
                                                    style="font-weight: 600;">Association</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="association"
                                                        placeholder="Enter association name" required>


                                                </div>
                                            </div>

                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label" style="font-weight: 600;">Assign
                                                    Customer</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="assign_customer" required>

                                                        {{-- <option value="1">Customer 1
                                                        </option>
                                                        <option value="2">Customer 2
                                                        </option>
                                                        <option value="3">ll 2
                                                        </option> --}}

                                                        @foreach ($customers as $customer)
                                                            <option value="{{ $customer->id }}">{{ $customer->cus_name }}
                                                            </option>
                                                        @endforeach


                                                    </select>

                                                </div>
                                            </div>


                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label" style="font-weight: 600;">Project
                                                    Fee</label>
                                                <div class="col-sm-10">
                                                    <input type="number" class="form-control" name="p_fee"
                                                        placeholder="Enter project fee" required min="10000">
                                                    <small id="emailHelp" class="form-text text-muted">Minimum value
                                                        10000</small>


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
                                                    <small id="emailHelp" class="form-text text-muted">Project not
                                                        finished... Don't fill this...</small>
                                                </div>
                                            </div>

                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label" style="font-weight: 600;">Project
                                                    Status</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="project_status" required>

                                                        <option value="pending">Pending Project
                                                        </option>
                                                        <option value="completed">Completed Project
                                                        </option>




                                                    </select>

                                                </div>
                                            </div>

                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label"
                                                    style="font-weight: 600;">Thumbnail</label>
                                                <div class="col-sm-10">
                                                    <input type="file" class="form-control" name="thumb"
                                                        accept="image/*">
                                                </div>
                                            </div>

                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label"
                                                    style="font-weight: 600;">Images</label>
                                                <div class="col-sm-10">
                                                    <input type="file" class="form-control" name="photo[]" multiple
                                                        accept="image/*">
                                                </div>
                                            </div>

                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label"
                                                    style="font-weight: 600;">Description</label>
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
