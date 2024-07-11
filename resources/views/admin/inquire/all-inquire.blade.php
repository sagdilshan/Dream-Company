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
                                        <th>Customer Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Subject</th>
                                        <th>Message</th>

                                        <th>Action</th>
                                    </tr>

                                </thead>
                                <tbody>


                                    @foreach ($allinquir as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>

                                            <td>{{ $item->name }}</td>
                                            <td><a style="color: red;" href="{{ $item->email }}">{{ $item->email }}</a>
                                            </td>
                                            <td>{{ $item->mobile }}</td>
                                            <td>{{ $item->subject }}</td>
                                            <td>{{ $item->message }}</td>


                                            <td>

                                                @if ($item->status == 'new')
                                                    <form method="POST"
                                                        action="{{ route('admin.inquire.status', $item->id) }}">
                                                        @csrf
                                                        @method('PUT')
                                                        <button type="submit"
                                                            class="btn btn-outline-danger">Replied</button>
                                                    </form>
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
        </div><!-- /.containerfluid -->



    </div>
    <!-- Contact End -->


@endsection
