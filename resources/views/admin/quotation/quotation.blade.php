@extends('home.dash-header')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Quotation')
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
                                        <th>Email / Phone</th>
                                        <th>Service Name 1</th>
                                        <th>Total Cost</th>
                                        <th>Action</th>


                                    </tr>

                                </thead>
                                <tbody>


                                    @foreach ($quotation as $key => $item)
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
                                        <form method="POST" action="{{ route('admin.quotation.store') }}"
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
                                                                style="font-weight: 600;">Company Name</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" name="com_name"
                                                                    placeholder="Comapany name (optional)" required>
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
                                                                style="font-weight: 600;">Email /
                                                                Phone</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" name="contact"
                                                                    placeholder="Enter email or phone">


                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="form-group row mt-3">
                                                            <label class="col-sm-4 col-form-label"
                                                                style="font-weight: 600;">Address</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" name="address"
                                                                    placeholder="Enter address (optional)">


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
                                                                style="font-weight: 600;">Service Name 1
                                                            </label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" name="ser_name_1"
                                                                    placeholder="Enter service name" required>


                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="form-group row mt-3">
                                                            <label class="col-sm-4 col-form-label"
                                                                style="font-weight: 600;">Service Price 1</label>
                                                            <div class="col-sm-8">
                                                                <input type="number" class="form-control"
                                                                    name="ser_price_1" placeholder="Enter price Rs: "
                                                                    required onchange="calculateCost()">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-lg-6" id="service-fields" style="display: none;">
                                                        <div class="form-group row mt-3">
                                                            <label class="col-sm-4 col-form-label"
                                                                style="font-weight: 600;">Service Name 2
                                                            </label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" name="ser_name_2"
                                                                    placeholder="Enter service name (optional)">


                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6" id="service-fields" style="display: none;">
                                                        <div class="form-group row mt-3">
                                                            <label class="col-sm-4 col-form-label"
                                                                style="font-weight: 600;">Service Price 2</label>
                                                            <div class="col-sm-8">
                                                                <input type="number" class="form-control"
                                                                    name="ser_price_2"
                                                                    placeholder="Enter price Rs: (optional)"
                                                                    onchange="calculateCost()">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-lg-6" id="service-fields" style="display: none;">
                                                        <div class="form-group row mt-3">
                                                            <label class="col-sm-4 col-form-label"
                                                                style="font-weight: 600;">Service Name 3
                                                            </label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control"
                                                                    name="ser_name_3"
                                                                    placeholder="Enter service name (optional)">


                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6" id="service-fields" style="display: none;">
                                                        <div class="form-group row mt-3">
                                                            <label class="col-sm-4 col-form-label"
                                                                style="font-weight: 600;">Service Price 3</label>
                                                            <div class="col-sm-8">
                                                                <input type="number" class="form-control"
                                                                    name="ser_price_3"
                                                                    placeholder="Enter price Rs: (optional)"
                                                                    onchange="calculateCost()">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-lg-6" id="service-fields" style="display: none;">
                                                        <div class="form-group row mt-3">
                                                            <label class="col-sm-4 col-form-label"
                                                                style="font-weight: 600;">Service Name 4
                                                            </label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control"
                                                                    name="ser_name_4"
                                                                    placeholder="Enter service name (optional)">


                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6" id="service-fields" style="display: none;">
                                                        <div class="form-group row mt-3">
                                                            <label class="col-sm-4 col-form-label"
                                                                style="font-weight: 600;">Service Price 4</label>
                                                            <div class="col-sm-8">
                                                                <input type="number" class="form-control"
                                                                    name="ser_price_4"
                                                                    placeholder="Enter price Rs: (optional)"
                                                                    onchange="calculateCost()">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>

                                            <!-- Add More Button -->

                                            <div class="form-group row mt-3">
                                                <div class="offset-sm-2 col-sm-10 d-flex  justify-content-end">
                                                    <button type="button" onclick="toggleServiceFields()"
                                                        class="btn btn-dark">Add More</button>
                                                </div>
                                            </div>


                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label"
                                                    style="font-weight: 600;">Additional</label>
                                                <div class="col-sm-10">
                                                    <textarea rows="4" class="form-control" name="additional" placeholder="Additional note (optional)" required></textarea>

                                                </div>
                                            </div>


                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group row mt-3">
                                                            <label class="col-sm-4 col-form-label"
                                                                style="font-weight: 600;">Service Cost
                                                            </label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control"
                                                                    name="service_cost" value="0" required readonly
                                                                    id="service_cost">


                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="form-group row mt-3">
                                                            <label class="col-sm-4 col-form-label"
                                                                style="font-weight: 600;">Tax (18%)</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" name="tax"
                                                                    value="0" required readonly id="tax">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row mt-3">
                                                <label class="col-sm-2 col-form-label" style="font-weight: 600;">Total
                                                    Cost</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="total"
                                                        name="total" value="0" required readonly>
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
        function toggleServiceFields() {
            var fields = document.querySelectorAll('#service-fields');
            // Toggle visibility of the service fields
            fields.forEach(function(field) {
                field.style.display = field.style.display === 'none' ? 'block' : 'none';
            });
        }
    </script>
    <script>
        function calculateCost() {
            var prices = [
                parseFloat(document.querySelector('input[name="ser_price_1"]').value) || 0,
                parseFloat(document.querySelector('input[name="ser_price_2"]').value) || 0,
                parseFloat(document.querySelector('input[name="ser_price_3"]').value) || 0,
                parseFloat(document.querySelector('input[name="ser_price_4"]').value) || 0
            ];

            // Calculate Service Cost (sum of all prices)
            var serviceCost = prices.reduce(function(total, price) {
                return total + price;
            }, 0);

            // Calculate Tax (18%)
            var tax = serviceCost * 0.18;

            // Calculate Total Cost
            var totalCost = serviceCost + tax;

            // Update the fields with calculated values
            document.getElementById('service_cost').value = serviceCost.toFixed(2);
            document.getElementById('tax').value = tax.toFixed(2);
            document.getElementById('total').value = totalCost.toFixed(2);
        }
    </script>
    {{-- <script>
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
                    // Add custom validation message
                    isValid = false;
                    alert(service.price.replace('_', ' ').toUpperCase() + " is required when " + service.name
                        .replace('_', ' ').toUpperCase() + " is filled.");
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
    </script> --}}
    <script>
        // Function to validate the fields dynamically
        function validateServiceFields() {
            // Check each service name field and apply validation to the corresponding price field
            const serviceNames = [
                { name: 'ser_name_1', price: 'ser_price_1' },
                { name: 'ser_name_2', price: 'ser_price_2' },
                { name: 'ser_name_3', price: 'ser_price_3' },
                { name: 'ser_name_4', price: 'ser_price_4' }
            ];

            let isValid = true;

            // Loop through each service name and price pair
            serviceNames.forEach(function (service) {
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
        document.querySelector('form').addEventListener('submit', function (event) {
            if (!validateServiceFields()) {
                event.preventDefault();  // Prevent form submission if validation fails
            }
        });
    </script>

@endsection
