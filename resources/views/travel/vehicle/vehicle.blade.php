@extends('home.travel-dash-header')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Vehicle Info')
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
                            <h2 style="font-family: Open Sans;">All Quotation</h2>

                            <br>
                            <table id="example3" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Quo Number</th>
                                        <th>Customer Name</th>
                                        <th>Phone</th>
                                        <th>Vehicle No</th>
                                        <th>Destination</th>
                                        <th>KM</th>
                                        <th>Date</th>
                                        <th>No. Nights</th>
                                        <th>Total Cost</th>
                                        <th>Action</th>
                                    </tr>

                                </thead>
                                <tbody>


                                    {{-- @foreach ($quotation as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>


                                            <td>ELPL/{{ \Carbon\Carbon::parse($item->created_at)->format('d-m-Y') }}/Q/{{ str_pad($item->id, 4, '0', STR_PAD_LEFT) }}</td>

                                            <td>{{ $item->cus_name }}</td>
                                            <td>{{ $item->contact }}</td>
                                            <td>{{ $item->ser_name_1 }}</td>
                                            <td>{{ $item->total }}</td>
                                            <td>
                                            <a href="{{ route('admin.quotation.view', $item->id) }}" class="btn btn-outline-danger" title="Quotation"><i class='fas fa-file-alt'></i></a>

                                            </td>




                                        </tr>
                                    @endforeach --}}


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
                                        <form method="POST" action="{{ route('admin.quotation.store') }}"
                                            class="form-horizontal" enctype="multipart/form-data">
                                            @csrf

                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group row mt-3">
                                                            <label class="col-sm-4 col-form-label"
                                                                style="font-weight: 600;">Owner
                                                                Name</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" name="owner_name"
                                                                    placeholder="Enter owner name" required>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="form-group row mt-3">
                                                            <label class="col-sm-4 col-form-label"
                                                                style="font-weight: 600;">NIC</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" name="nic"
                                                                    placeholder="Enter nic number">


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>


                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group row mt-3">
                                                            <label class="col-sm-4 col-form-label"
                                                                style="font-weight: 600;">Phone</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" name="phone"
                                                                    placeholder="Enter phone number" required>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="form-group row mt-3">
                                                            <label class="col-sm-4 col-form-label"
                                                                style="font-weight: 600;">Address</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" name="address"
                                                                    placeholder="Enter address">


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>

                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group row mt-3">
                                                            <label class="col-sm-4 col-form-label"
                                                                style="font-weight: 600;">Vehicle Model</label>
                                                            <div class="col-sm-8">

                                                                <input type="text" class="form-control" name="v_model"
                                                                    placeholder="Enter vehicle model">


                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="form-group row mt-3">
                                                            <label class="col-sm-4 col-form-label"
                                                                style="font-weight: 600;">Vehicle Number</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" name="v_number"
                                                                    placeholder="Enter vehicle number">


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group row mt-3">
                                                            <label class="col-sm-4 col-form-label"
                                                                style="font-weight: 600;">Have Dual A/C?</label>
                                                            <div class="col-sm-8">
                                                                <select class="form-control" name="condition" required>
                                                                    <option value="" disabled selected>Select
                                                                        Condition</option>
                                                                    <option value="yes">Yes
                                                                    </option>
                                                                    <option value="no">No
                                                                    </option>
                                                                </select>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="form-group row mt-3">
                                                            <label class="col-sm-4 col-form-label"
                                                                style="font-weight: 600;">Driver Licence No</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control"
                                                                    name="licence_no"
                                                                    placeholder="Enter driven licence number">


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group row mt-3">
                                                            <label class="col-sm-4 col-form-label"
                                                                style="font-weight: 600;">V. Licence Expire</label>
                                                            <div class="col-sm-8">
                                                                <input type="date" class="form-control"
                                                                    name="v_licence_expire"
                                                                    placeholder="Enter vehicle licence expire date">


                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="form-group row mt-3">
                                                            <label class="col-sm-4 col-form-label"
                                                                style="font-weight: 600;">No of Seats</label>
                                                            <div class="col-sm-8">
                                                                <input type="number" class="form-control"
                                                                    name="no_seats" placeholder="Enter no of seats"
                                                                    min="0">


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>







                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group row mt-3">
                                                            <label class="col-sm-4 col-form-label"
                                                                style="font-weight: 600;">Per KM (w/o AC)
                                                            </label>
                                                            <div class="col-sm-8">
                                                                <input type="number" class="form-control" name="wo_ac"
                                                                    placeholder="Per Km fee (without a/c)" required
                                                                    id="wo_ac" min="0">


                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="form-group row mt-3">
                                                            <label class="col-sm-4 col-form-label"
                                                                style="font-weight: 600;">Per KM (with AC)</label>
                                                            <div class="col-sm-8">
                                                                <input type="number" class="form-control" name="wi_ac"
                                                                    placeholder="Per Km fee (within a/c)" required
                                                                    min="0" id="wi_ac">
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>







                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label"
                                                    style="font-weight: 600;">Additional</label>
                                                <div class="col-sm-10">
                                                    <textarea rows="4" class="form-control" name="additional" placeholder="Additional note"></textarea>

                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group row mt-3">
                                                            <label class="col-sm-4 col-form-label"
                                                                style="font-weight: 600;">Driver / Owner Photo</label>
                                                            <div class="col-sm-8">
                                                                <input type="file" class="form-control"
                                                                    name="owner_photo" required>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="form-group row mt-3">
                                                            <label class="col-sm-4 col-form-label"
                                                                style="font-weight: 600;">Vehicle Photo</label>
                                                            <div class="col-sm-8">
                                                                <input type="file" class="form-control"
                                                                    name="vehicle_photo" required multiple>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group row mt-3">
                                                            <label class="col-sm-4 col-form-label"
                                                                style="font-weight: 600;">NIC Photo (front)</label>
                                                            <div class="col-sm-8">
                                                                <input type="file" class="form-control"
                                                                    name="nic_front" required>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="form-group row mt-3">
                                                            <label class="col-sm-4 col-form-label"
                                                                style="font-weight: 600;">NIC Photo (back)</label>
                                                            <div class="col-sm-8">
                                                                <input type="file" class="form-control"
                                                                    name="nic_back" required>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>

                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group row mt-3">
                                                            <label class="col-sm-4 col-form-label"
                                                                style="font-weight: 600;">Licence Photo (front)</label>
                                                            <div class="col-sm-8">
                                                                <input type="file" class="form-control"
                                                                    name="licence_front" required>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="form-group row mt-3">
                                                            <label class="col-sm-4 col-form-label"
                                                                style="font-weight: 600;">Licence Photo (back)</label>
                                                            <div class="col-sm-8">
                                                                <input type="file" class="form-control"
                                                                    name="licence_back" required>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>

                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group row mt-3">
                                                            <label class="col-sm-4 col-form-label"
                                                                style="font-weight: 600;">CR Photo (Vehicle)</label>
                                                            <div class="col-sm-8">
                                                                <input type="file" class="form-control"
                                                                    name="cr_photo" required>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="form-group row mt-3">
                                                            <label class="col-sm-4 col-form-label"
                                                                style="font-weight: 600;">Revenue Licence</label>
                                                            <div class="col-sm-8">
                                                                <input type="file" class="form-control"
                                                                    name="rev_licence" required>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>

                                            </label>







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
