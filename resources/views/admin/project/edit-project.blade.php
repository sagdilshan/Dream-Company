@extends('home.dash-header')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Edit Projects')
@section('content')



    <br><br><br><br>
    <!-- Contct Start -->
    <div class="container-xxl py-5">



        <section class="content ">
            <div class="container-fluid ">
                <div class="row">

                    <!-- /.col -->
                    <div class="col-lg-12">
                        <div class="card">

                            <div class="card-body">
                                <div class="tab-content">

                                    <h2 class="mb-4" style="font-family: Open Sans;color: red;">Edit Project</h2>


                                    <div class="active tab-pane" id="settings">
                                        <form method="POST" action=" "
                                            class="form-horizontal">
                                            @csrf
                                            <input type="hidden" class="form-control" name="id"
                                            value="{{ $uproject->id }}">

                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label" style="font-weight: 600;">Project
                                                    Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="p_name" value="{{ $uproject->p_name }}"
                                                        placeholder="Enter project name" required>

                                                </div>
                                            </div>
                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label" style="font-weight: 600;">Sub
                                                    Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="s_name" value="{{ $uproject->s_name }}"
                                                        placeholder="Enter sub name (optional)">


                                                </div>
                                            </div>
                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label" style="font-weight: 600;">Project
                                                    Link</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="p_link"
                                                        placeholder="Enter project link" value="{{ $uproject->p_link }}" required>


                                                </div>
                                            </div>








                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label" style="font-weight: 600;">Finished
                                                    Month</label>
                                                <div class="col-sm-10">
                                                    <input type="month" class="form-control" name="f_month" value="{{ $uproject->f_month }}">
                                                    <small class="form-text text-muted"><span style="color: red;">Project not
                                                        finished... Don't fill this...</span></small>
                                                </div>
                                            </div>

                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label" style="font-weight: 600;">Project
                                                    Status</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="project_status" value="{{ $uproject->project_status }}" required>

                                                        <option value="pending">Pending Project
                                                        </option>
                                                        <option value="completed">Completed Project
                                                        </option>
                                                        <option value="cancel">Cancel Project
                                                        </option>

                                                    </select>

                                                </div>
                                            </div>



                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label"
                                                    style="font-weight: 600;">Description</label>
                                                <div class="col-sm-10">
                                                    <textarea rows="4" class="form-control"   name="description" placeholder="Description" required>{{ old('description', $uproject->description) }}</textarea>

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
