@extends('home.travel-dash-header')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Hire Quotation')
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
                                        <th>Date & Time</th>
                                        <th>No. Nights</th>
                                        <th>Total Cost</th>
                                        <th>Action</th>
                                    </tr>

                                </thead>
                                <tbody>


                                    @foreach ($hireq as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>


                                            <td>ELPL/{{ \Carbon\Carbon::parse($item->created_at)->format('d-m') }}/TRA/{{ str_pad($item->id, 4, '0', STR_PAD_LEFT) }}
                                            </td>

                                            <td>{{ $item->cus_name }}</td>
                                            <td>{{ $item->phone }}</td>
                                            <td>{{ $item->v_number }}</td>
                                            <td>{{ $item->destination }}</td>

                                            <td>{{ $item->no_km }}</td>
                                            <td>{{ \Carbon\Carbon::parse($item->date_time)->format('d/m - h:i A') }}</td>


                                            <td>{{ $item->no_night }}</td>
                                            <td>{{ $item->total }}</td>
                                            <td>
                                                <a href="{{ route('admin.quotation.view', $item->id) }}"
                                                    class="btn btn-outline-danger" title="Quotation"><i
                                                        class='fas fa-file-alt'></i></a>

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

                                    <h2 class="mb-4" style="font-family: Open Sans;color: red;">Create Quotation</h2>


                                    <div class="active tab-pane" id="settings">
                                        <form method="POST" action="{{ route('hire.quotation.store') }}"
                                            class="form-horizontal" enctype="multipart/form-data">
                                            @csrf

                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group row mt-3">
                                                            <label class="col-sm-4 col-form-label"
                                                                style="font-weight: 600;">Customer
                                                                Name</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" name="cus_name"
                                                                    placeholder="Enter customer name" required>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="form-group row mt-3">
                                                            <label class="col-sm-4 col-form-label"
                                                                style="font-weight: 600;">Phone</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" name="phone"
                                                                    placeholder="Enter phone number">


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>


                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group row mt-3">
                                                            <label class="col-sm-2 col-form-label"
                                                                style="font-weight: 600;">Vehicle Model</label>
                                                            <div class="col-sm-10">

                                                                <select class="form-control" name="vehicel_model"
                                                                    id="vehicel_model" required>
                                                                    <option value="" disabled selected>Select Model
                                                                    </option>
                                                                    @foreach ($vehicleModels as $model)
                                                                        <option value="{{ $model->id }}"
                                                                            data-non-ac-price="{{ $model->non_ac_price }}"
                                                                            data-with-ac-price="{{ $model->with_ac_price }}">
                                                                            {{ $model->model_name }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>

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
                                                                style="font-weight: 600;">Non-AC Price</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control"
                                                                    name="non_ac_price" id="non_ac_price" readonly />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group row mt-3">
                                                            <label class="col-sm-4 col-form-label"
                                                                style="font-weight: 600;">With AC Price</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control"
                                                                    name="with_ac_price" id="with_ac_price" readonly />
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
                                                                style="font-weight: 600;">Dual A/C</label>
                                                            <div class="col-sm-8">
                                                                <select class="form-control" name="ac_condition" required>
                                                                    <option value="" disabled selected>Select
                                                                        Condition</option>
                                                                    <option value="yes">With Dual A/C
                                                                    </option>
                                                                    <option value="no">Without Dual A/C
                                                                    </option>
                                                                </select>

                                                            </div>
                                                        </div>
                                                    </div>





                                                    <div class="col-lg-6">
                                                        <div class="form-group row mt-3">
                                                            <label class="col-sm-4 col-form-label"
                                                                style="font-weight: 600;">Hire
                                                                Type</label>
                                                            <div class="col-sm-8">
                                                                <select class="form-control" name="type" required>
                                                                    <option value="" disabled selected>Select Type
                                                                    </option>
                                                                    <option value="dp">Drop & Pick
                                                                    </option>
                                                                    <option value="do">Drop Only
                                                                    </option>

                                                                </select>

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
                                                                style="font-weight: 600;">Destination</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control"
                                                                    name="destination"
                                                                    placeholder="Enter hire destination">


                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="form-group row mt-3">
                                                            <label class="col-sm-4 col-form-label"
                                                                style="font-weight: 600;">No of
                                                                KM</label>
                                                            <div class="col-sm-8">
                                                                <input type="number" class="form-control" name="no_km"
                                                                    placeholder="Extimate KM" min="0">


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
                                                                style="font-weight: 600;">Pickup
                                                                Date & Time</label>
                                                            <div class="col-sm-8">
                                                                <input type="datetime-local" class="form-control"
                                                                    name="date_time">


                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="form-group row mt-3">
                                                            <label class="col-sm-4 col-form-label"
                                                                style="font-weight: 600;">No of
                                                                Nights</label>
                                                            <div class="col-sm-8">
                                                                <input type="number" class="form-control"
                                                                    name="no_night" placeholder="Enter no of nights"
                                                                    min="0" value="0">


                                                            </div>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="yes" name="need_to_be_night" id="checkbox1">
                                                            <label class="form-check-label text-danger" for="checkbox1">
                                                                Need to be calculate night charges?
                                                            </label>
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
                                                    <label class="col-sm-4 col-form-label" style="font-weight: 600;">KM
                                                        Cost
                                                    </label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" name="km_cost"
                                                            value="0" required readonly id="km_cost">


                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group row mt-3">
                                                    <label class="col-sm-4 col-form-label" style="font-weight: 600;">A/C
                                                        Cost</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" name="ac_cost"
                                                            value="0" required readonly id="ac_cost">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group row mt-3">
                                                    <label class="col-sm-4 col-form-label" style="font-weight: 600;">Night
                                                        Charges
                                                    </label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" name="n_charges"
                                                            value="0" required readonly id="n_charges">


                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group row mt-3">
                                                    <label class="col-sm-4 col-form-label"
                                                        style="font-weight: 600;">Average Per
                                                        KM</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" name="ave_per_km"
                                                            value="0" required readonly id="ave_per_km">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6" hidden>
                                        <div class="form-group row mt-3">
                                            <label class="col-sm-4 col-form-label"
                                                style="font-weight: 600;">Adavance</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="advance" value="0"
                                                    required readonly id="advance">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="form-group row mt-3">
                                        <label class="col-sm-2 col-form-label" style="font-weight: 600;">Total
                                            Hire Price</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="total" name="total"
                                                value="0" required readonly>
                                        </div>
                                    </div>



                                    {{-- <input type="checkbox" name="option1" value="option1"> Option 1 --}}
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
    <script>
        function toggleServiceFields() {
            var fields = document.querySelectorAll('#service-fields');
            // Toggle visibility of the service fields
            fields.forEach(function(field) {
                field.style.display = field.style.display === 'none' ? 'block' : 'none';
            });
        }
    </script>





    {{--
    <script>
        // Pass vehicle data to JavaScript (use the correct field names: v_model and v_number)
        const vehicleData = @json($vehicleData);

        document.getElementById('vehicel_model').addEventListener('change', function() {
            const selectedModel = this.value;
            const vehicleNumberSelect = document.getElementById('vehicle_number');

            // Clear the current options in the vehicle number dropdown
            vehicleNumberSelect.innerHTML = '<option value="" disabled selected>Select Vehicle Number</option>';

            // Filter the vehicle data to match the selected model
            const filteredVehicles = vehicleData.filter(vehicle => vehicle.v_model === selectedModel);

            // Add filtered vehicle numbers to the dropdown
            filteredVehicles.forEach(vehicle => {
                const option = document.createElement('option');
                option.value = vehicle.v_number; // Use the correct field name for vehicle number
                option.textContent = vehicle.v_number; // Use the correct field name for vehicle number
                vehicleNumberSelect.appendChild(option);
            });
        });
    </script> --}}

    <script>
        document.getElementById('vehicel_model').addEventListener('change', function() {
            // Get selected option and its data-price attributes
            var selectedOption = this.options[this.selectedIndex];
            var nonAcPrice = selectedOption.getAttribute('data-non-ac-price');
            var withAcPrice = selectedOption.getAttribute('data-with-ac-price');

            // Set the values of the respective price fields
            document.getElementById('non_ac_price').value = nonAcPrice;
            document.getElementById('with_ac_price').value = withAcPrice;
        });
    </script>

    <script>
        // Function to validate the fields dynamically
        function validateServiceFields() {
            // Check each service name field and apply validation to the corresponding price field
            const serviceNames = [{
                    name: 'ser_name_1',
                    price: 'ser_price_1'
                },
                {
                    name: 'ser_name_2',
                    price: 'ser_price_2'
                },
                {
                    name: 'ser_name_3',
                    price: 'ser_price_3'
                },
                {
                    name: 'ser_name_4',
                    price: 'ser_price_4'
                }
            ];

            let isValid = true;

            // Loop through each service name and price pair
            serviceNames.forEach(function(service) {
                const serviceName = document.querySelector('[name="' + service.name + '"]');
                const servicePrice = document.querySelector('[name="' + service.price + '"]');

                // If service name is filled, check if service price is also filled
                if (serviceName.value.trim() !== '' && servicePrice.value.trim() === '') {
                    // Show the custom validation message
                    isValid = false;
                    alert("Fill price list. Please enter the price for the filled service name.");
                }
            });

            return isValid;
        }

        // Call the validation function when the form is submitted
        document.querySelector('form').addEventListener('submit', function(event) {
            if (!validateServiceFields()) {
                event.preventDefault(); // Prevent form submission if validation fails
            }
        });
    </script>




@endsection
