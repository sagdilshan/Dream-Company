@extends('home.dash-header')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Invoice')
@section('content')
    <style>
        .float-right {
            float: right !important;
        }

        @media print {

            //Add to elements that you do not want to show when printing
            .no-print {
                display: none !important;
            }

        }
    </style>

    <br><br><br><br>
    <!-- Contct Start -->
    <div class="container-xxl py-5">

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">

                        <div class="card">

                            <!-- /.card-header -->
                            <div class="card-body">
                                <!-- Main content -->
                                <div class="invoice p-3 mb-3" style="font-family: Open sans" id="invoice">



                                    <!-- title row -->
                                    <div class="row border-bottom">
                                        <div class="col-12">
                                            <h2 class="m-0" style="color:  #b71c1c;text-align: left;">
                                                EVERSYS LANKA (PVT) LTD
                                                <small class="float-right" style="float: right" id="currentDate">Invoice
                                                    Date:
                                                </small>
                                            </h2>

                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <br>
                                    <!-- info row -->
                                    <div class="row invoice-info" style="color: black">
                                        <div class="col-sm-4 invoice-col">
                                            From
                                            <address>
                                                <strong style="font-size: large" class="text-dark">Eversys Lanka (Pvt)
                                                    Ltd</strong><br>
                                                265 2/B, Kurunduwatta Road,<br>
                                                Madupitiya, <br>Panadura,<br>
                                                Sri Lanka<br>
                                                <strong class="text-dark"> Phone: <a href="tel:+94763839634" target="_blank"
                                                        class="text-dark">+94 77 99 19 634</a></strong><br>
                                                <strong class="text-dark">Email: <a href="mailto:eversyslanka@gmail.com"
                                                        class="text-dark">eversyslanka@gmail.com</a></strong>
                                            </address>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-4 invoice-col">
                                            To
                                            <address>
                                                <strong style="font-size: large"
                                                    class="text-dark">{{ ucwords($project->customer->cus_name) }}</strong><br>
                                                @php
                                                    // Capitalize the first letter of each word in the address
                                                    $formattedAddress = ucwords($project->customer->address);

                                                    // Replace commas with <br> for line breaks
                                                    $formattedAddress = str_replace(',', ',<br>', $formattedAddress);
                                                @endphp

                                                {!! $formattedAddress !!}<br>
                                                {{-- {{ ucwords($project->customer->address) }}<br> --}}
                                                <strong class="text-dark"> Phone: +94 70 15 25200</strong><br>
                                                <strong class="text-dark">Email: john.doe@example.com</strong>
                                            </address>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-4 invoice-col">
                                            <b class="text-dark">Invoice Number: <span
                                                    style="font-size: large; color: #b71c1c">#007612</span></b><br>
                                            <br>
                                            <b class="text-dark">Project Number: <span
                                                    style="font-size: large; color: #b71c1c">15220</span></b><br>
                                            <b class="text-dark">Project Status: <span
                                                    style="font-size: large; color: #b71c1c">Pending</span></b><br>
                                            <b class="text-dark">Project Started: <span
                                                    style="font-size: large; color: #b71c1c">12/2024</span></b><br>
                                            {{-- <b class="text-dark">Account:</b> 968-34567 --}}
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->
                                    <br>
                                    <!-- Table row -->
                                    <div class="row">
                                        <div class="col-12 table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Project Name</th>
                                                        <th>Description</th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>
                                                        <td>1</td>

                                                        <td>{{ $project->p_name }}</td>
                                                        <td>{{ $project->description }}</td>
                                                        <td>Rs. {{ $project->p_fee }}</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->
                                    <br>
                                    <div class="row">
                                        <!-- accepted payments column -->
                                        <div class="col-6">
                                            <p class="lead">Payment Methods:</p>
                                            <b style="color: #b71c1c">Bank Transfer Only</b>

                                            <p class=" well well-sm shadow-none" style="margin-top: 10px;">
                                                Bank : <b>Commercial Bank </b></Br>
                                                Branch : <b>Panadura Branch</b></Br>
                                                Acc. Name : <b>Eversys Lanka (Pvt) Ltd</b></Br>
                                                Acc. Number : <b>8010223334</b>
                                            </p>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-6">
                                            <p class="lead">Amount Due 12/20/2024</p>

                                            <div class="table-responsive">
                                                <table class="table">
                                                    <tr>
                                                        <th style="width:50%">Subtotal:</th>
                                                        <td>$250.30</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Tax (18%)</th>
                                                        <td>$10.34</td>
                                                    </tr>

                                                    <tr>
                                                        <th>Total:</th>
                                                        <td>$265.24</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->
                                    <br><br>

                                    <!-- Computer-Generated Notice positioned at the bottom (page end) -->
                                    <div class="notice " style="font-size: 12px; color: black">
                                        <p><b style="font-size: 12px; color: #b71c1c">Notice:</b> This document has been
                                            generated electronically and is considered valid without a physical signature.
                                            The information contained herein is based on the data provided at the time of
                                            generation and is subject to change without prior notice. Please review the
                                            details carefully and contact us if any discrepancies are found. For any
                                            questions or clarifications, refer to our support or customer service section.
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- /.invoice -->
                    </div><!-- /.col -->
                </div><!-- /.row -->

                <!-- this row will not appear when printing -->
                <div class="row no-print mt-2">
                    <div class="col-12">
                        <button type="button" id="printButton" rel="noopener" class="btn btn-primary float-right"
                            onclick="printInvoice()">
                            <i class="fas fa-print"></i> Print
                        </button>

                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

    </div>
    <script>
        function printInvoice() {
            const printContents = document.querySelector('.invoice').innerHTML; // Get only the content of the invoice
            const originalContents = document.body.innerHTML; // Backup original page content
            document.body.innerHTML = printContents; // Replace entire page content with the invoice
            window.print(); // Trigger the print dialog

            document.body.innerHTML = originalContents; // Restore original page content
            window.location.reload(); // Reload to ensure page state is preserved
        }
    </script>



    <script>
        // Get today's date
        const today = new Date();

        // Format the date as "MM/DD/YYYY"
        const formattedDate = today.toLocaleDateString("en-US");

        // Display the date in the small tag
        document.getElementById("currentDate").innerText = "Invoice Date: " + formattedDate;
    </script>


    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
@endsection
