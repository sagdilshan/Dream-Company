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
                                        <th>Vehicle Model</th>
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
                                            <td>{{ $item->vehicel_model }}</td>
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
                                                                        <option value="{{ $model->model_name }}"
                                                                            data-non-ac-price="{{ $model->non_ac_price }}"
                                                                            data-with-ac-price="{{ $model->with_ac_price }}"
                                                                            data-drop-without-ac="{{ $model->drop_without_ac }}"
                                                                            data-drop-with-ac="{{ $model->drop_with_ac }}">
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
                                                                style="font-weight: 600;">Dual A/C</label>
                                                            <div class="col-sm-8">
                                                                <select class="form-control" name="ac_condition"
                                                                    id="ac_condition" required>
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
                                                                <select class="form-control" name="type" id="type"
                                                                    required>
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

                                            <div class="col-12" id="drop-section-row" style="display: none;">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group row mt-3">
                                                            <label class="col-sm-4 col-form-label"
                                                                style="font-weight: 600;">Non-AC Price(drop)</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control"
                                                                    style="font-weight: 600;color: red;"
                                                                    name="drop_without_ac" id="drop_without_ac"
                                                                    readonly />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group row mt-3">
                                                            <label class="col-sm-4 col-form-label"
                                                                style="font-weight: 600;">With AC Price(drop)</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control"
                                                                    style="font-weight: 600;color: red;"
                                                                    name="drop_with_ac" id="drop_with_ac" readonly />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-12" id="return-section-row" style="display: none;">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group row mt-3">
                                                            <label class="col-sm-4 col-form-label"
                                                                style="font-weight: 600;">Non-AC Price(return)</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control"
                                                                    style="font-weight: 600;color: red;"
                                                                    name="non_ac_price" id="non_ac_price" readonly />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group row mt-3">
                                                            <label class="col-sm-4 col-form-label"
                                                                style="font-weight: 600;">With AC Price(return)</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control"
                                                                    style="font-weight: 600;color: red;"
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
                                                                    id="no_km" placeholder="Extimate KM"
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
                                                                    min="0" id="no_night" value="0">


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
                                                    <label class="col-sm-4 col-form-label"
                                                        style="font-weight: 600;">Average Per
                                                        KM</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" name="ave_per_km"
                                                            value="0" required readonly id="ave_per_km">
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
                                                    <label class="col-sm-4 col-form-label" style="font-weight: 600;">Night
                                                        Charges
                                                    </label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" name="n_charges"
                                                            id="n_charges" required readonly value="0">


                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>



                                    <div class="form-group row mt-3">
                                        <label class="col-sm-2 col-form-label" style="font-weight: 600;">Total
                                            Hire Price</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="total" id="total_price"
                                                value="0" required readonly>
                                        </div>
                                    </div>


                                    {{-- <div class="col-lg-6">
                                        <div class="form-group row mt-3">
                                            <label class="col-sm-4 col-form-label"
                                                style="font-weight: 600;">Adavance</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="advance" id="advance" value="0"
                                                    required readonly >
                                            </div>
                                        </div>

                                    </div> --}}







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
    <script>
        // Listen for changes on the "type" dropdown
        document.getElementById('type').addEventListener('change', function() {
            var type = this.value;

            // Show or hide rows based on the selected type
            if (type === 'do') {
                // Show drop section, hide return section
                document.getElementById('drop-section-row').style.display = 'block';
                document.getElementById('return-section-row').style.display = 'none';
            } else if (type === 'dp') {
                // Show return section, hide drop section
                document.getElementById('drop-section-row').style.display = 'none';
                document.getElementById('return-section-row').style.display = 'block';
            } else {
                // Hide both sections if no option is selected
                document.getElementById('drop-section-row').style.display = 'none';
                document.getElementById('return-section-row').style.display = 'none';
            }
        });

        // Trigger the change event to handle default behavior
        document.getElementById('type').dispatchEvent(new Event('change'));
    </script>


    <script>
        document.getElementById('vehicel_model').addEventListener('change', function() {
            // Get selected option and its data-price attributes
            var selectedOption = this.options[this.selectedIndex];
            var nonAcPrice = selectedOption.getAttribute('data-non-ac-price');
            var withAcPrice = selectedOption.getAttribute('data-with-ac-price');
            var nonAcDropPrice = selectedOption.getAttribute('data-drop-without-ac');
            var withAcDropPrice = selectedOption.getAttribute('data-drop-with-ac');

            // Set the values of the respective price fields
            document.getElementById('non_ac_price').value = nonAcPrice;
            document.getElementById('with_ac_price').value = withAcPrice;
            document.getElementById('drop_without_ac').value = nonAcDropPrice;
            document.getElementById('drop_with_ac').value = withAcDropPrice;
        });
    </script>







<script>
    // Function to calculate night charges based on number of nights
    function calculateNightCharges() {
        let noOfNights = parseInt(document.getElementById('no_night').value) || 0;
        let charges = 0;

        // Calculate night charges
        if (noOfNights >= 1) {
            charges = 0; // First night free
        }
        if (noOfNights >= 2) {
            charges += 3000; // Second night 3000
        }
        if (noOfNights > 2) {
            charges += (noOfNights - 2) * 2000; // Each additional night 2000
        }

        // Set the night charges based on checkbox selection
        if (document.getElementById('checkbox1').checked) {
            document.getElementById('n_charges').value = charges;
        } else {
            document.getElementById('n_charges').value = 0;
        }

        return charges; // Return night charges
    }

    // Function to calculate total cost (km_cost + n_charges)
    function calculateTotal() {
        let kmCost = parseFloat(document.getElementById('km_cost').value) || 0;
        let nightCharges = parseFloat(document.getElementById('n_charges').value) || 0;
        let total = kmCost + nightCharges;

        // Get the number of kilometers (no_km)
        let noKm = parseFloat(document.getElementById('no_km').value) || 0;
        let hireType = document.getElementById('type').value;

        // Add Rs. 1000 to total price if no_km <= 100 and type is 'dp'
        if (noKm <= 100 && hireType === 'dp') {
            total += 1000; // Add Rs. 1000 if km <= 100 and hire type is 'dp'
            //nightCharges += 3000; // Add Rs. 3000 to night charges if km <= 100
        }

        // Update the night charges with the new value
        document.getElementById('n_charges').value = nightCharges;

        // Update the total price field
        document.getElementById('total_price').value = total.toFixed(2);

        // Update average price per km field
        calculateAveragePerKm();
    }

    // Function to calculate average price per km (total_price / no_km)
    function calculateAveragePerKm() {
        let totalPrice = parseFloat(document.getElementById('total_price').value) || 0;
        let noKm = parseFloat(document.getElementById('no_km').value) || 0;

        if (noKm > 0) {
            let avePerKm = totalPrice / noKm;
            document.getElementById('ave_per_km').value = avePerKm.toFixed(2); // Display average per km
        } else {
            document.getElementById('ave_per_km').value = 0; // If no km, set to 0
        }
    }

    // Function to calculate price based on AC condition, type, and km
    function calculatePrice() {
        const acCondition = document.getElementById('ac_condition').value;
        const type = document.getElementById('type').value;
        const noKm = parseFloat(document.getElementById('no_km').value) || 0;

        const dropWithoutAc = parseFloat(document.getElementById('drop_without_ac').value) || 0;
        const dropWithAc = parseFloat(document.getElementById('drop_with_ac').value) || 0;
        const nonAcPrice = parseFloat(document.getElementById('non_ac_price').value) || 0;
        const withAcPrice = parseFloat(document.getElementById('with_ac_price').value) || 0;

        let totalPrice = 0;
        let acCost = 0;

        // Calculate price based on AC condition and vehicle type
        if (acCondition === 'yes' && type === 'dp') {
            totalPrice = withAcPrice * noKm;
            acCost = (withAcPrice - nonAcPrice) * noKm;
        } else if (acCondition === 'no' && type === 'dp') {
            totalPrice = nonAcPrice * noKm;
            acCost = 0; // No A/C cost
        } else if (acCondition === 'yes' && type === 'do') {
            totalPrice = dropWithAc * noKm;
            acCost = (dropWithAc - dropWithoutAc) * noKm;
        } else if (acCondition === 'no' && type === 'do') {
            totalPrice = dropWithoutAc * noKm;
            acCost = 0; // No A/C cost
        }

        // Set km cost and ac cost
        document.getElementById('km_cost').value = totalPrice.toFixed(2);
        document.getElementById('ac_cost').value = acCost.toFixed(2);

        // Call calculateTotal to update the total price
        calculateTotal();
    }

    function calculateAdvance() {
        let totalPrice = parseFloat(document.getElementById('total_price').value) || 0;

        // Calculate 25% of total price
        let advance = totalPrice * 0.25;

        // Round to nearest largest thousand (round up)
        let roundedAdvance = Math.ceil(advance / 1000) * 1000;

        // Set the advance value in the advance input field
        document.getElementById('advance').value = roundedAdvance;
    }

    // Event listeners to trigger calculations
    document.getElementById('total_price').addEventListener('input', function () {
        calculateAdvance();
    });

    // Event listeners for changes in km_cost, number of nights, AC condition, and type
    document.getElementById('km_cost').addEventListener('input', calculateTotal);
    document.getElementById('no_night').addEventListener('input', function () {
        calculateNightCharges(); // Update night charges when number of nights is changed
        calculateTotal(); // Update total when number of nights changes
    });
    document.getElementById('checkbox1').addEventListener('change', function () {
        calculateNightCharges(); // Update night charges when checkbox is changed
        calculateTotal(); // Update total when checkbox state changes
    });

    document.getElementById('ac_condition').addEventListener('change', calculatePrice);
    document.getElementById('type').addEventListener('change', calculatePrice);
    document.getElementById('no_km').addEventListener('input', calculatePrice);
</script>




@endsection
