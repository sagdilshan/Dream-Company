@extends('home.dash-header')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Inquires')
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
                            <h2 style="font-family: Open Sans;">All Inquires</h2>

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



    </div>
    <!-- Contact End -->


@endsection
