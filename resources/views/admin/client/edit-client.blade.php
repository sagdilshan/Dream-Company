@extends('home.dash-header')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Edit Customer')
@section('content')



    <!-- Page Head End -->
    <br><br><br><br>
    <!-- Contact Stabjrt -->
    <div class="container-xxl py-5">



        <section class="content ">
            <div class="container-fluid ">
                <div class="row">

                    <!-- /.col -->
                    <div class="col-lg-12">
                        <div class="card">

                            <div class="card-body">
                                <div class="tab-content">

                                    <h2 class="mb-4" style="font-family: Open Sans;color: red;">Edit Customer</h2>


                                    <div class="active tab-pane" id="settings">
                                        <form method="post" action="{{ route('update.client', ['id' => $ucustomer->id]) }}">
                                            @csrf
                                            <input type="hidden" class="form-control" name="id"
                                            value="{{ $ucustomer->id }}">
                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label" style="font-weight: 600;">Customer
                                                    Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name= "cus_name"
                                                        placeholder="Enter customer name" value="{{ $ucustomer->cus_name }}" required>


                                                </div>
                                            </div>


                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label"
                                                    style="font-weight: 600;">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control" name="email"
                                                        placeholder="Enter email" value="{{ $ucustomer->email }}" required>
                                                </div>
                                            </div>

                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label"
                                                    style="font-weight: 600;">Address</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="address"
                                                        placeholder="Enter address" value="{{ $ucustomer->address }}" required>
                                                </div>
                                            </div>

                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label"
                                                    style="font-weight: 600;">Phone</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="phone"
                                                        placeholder="Enter contact number" value="{{ $ucustomer->phone }}" required>
                                                </div>
                                            </div>
                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label" style="font-weight: 600;">NIC</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" value="{{ $ucustomer->nic }}" name="nic"
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
                                <!-- /.ta-content -->
                            </div><!-- /.card-ody -->
                        </div>
                        <!-- /.car -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
    </div>
    <!-- Contact End -->


@endsection
