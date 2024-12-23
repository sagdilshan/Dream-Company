@extends('home.dash-header')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Invoice View')
@section('content')
    <style>
        .float-right {
            float: right !important;
        }

        /* Default page styles */
    body {
        font-family: Arial, sans-serif;
    }



        .card-body {
            position: relative;
            /* Position context for absolute positioning */
            overflow: hidden;
            /* Prevent text from overflowing outside the card */
        }

        .pending-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) rotate(-45deg);
            /* Rotate text diagonally */
            font-size: 5rem;
            /* Adjust size as needed */
            font-weight: bold;
            color: rgba(255, 0, 0, 0.074);
            /* Light red with transparency */
            white-space: nowrap;
            z-index: 0;
            /* Keeps text behind content */
            pointer-events: none;
            /* Prevents interactions */
            user-select: none;
            /* Prevents text selection */
        }

        .invoice {
            position: relative;
            z-index: 1;
            /* Ensures content appears above "Pending" text */
        }


        /* Ensures the text is visible when printed */

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
                            <div class="card-body ">

                                <!-- Main content -->
                                <div class="invoice p-3 mb-3 " style="font-family: Open sans" id="invoice">

                                    <!-- Diagonal Text -->
                                    <div class="pending-text" id="invoice">EVERSYS LANKA (PVT) LTD</div>
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

                                    <br><br>
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
                                                <strong class="text-dark"> Phone:
                                                    {{ $project->customer->phone }}</strong><br>
                                                <strong class="text-dark">Email: {{ $project->customer->email }}</strong>
                                            </address>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-4 invoice-col">
                                            <b class="text-dark">Invoice Number: <span
                                                    style="font-size: large; color: #b71c1c">#P{{ str_pad($project->id, 5, '0', STR_PAD_LEFT) }}
                                                </span></b><br>
                                            <br>
                                            <b class="text-dark">Project Number: <span
                                                    style="font-size: large; color: #b71c1c">{{ str_pad($project->id, 4, '0', STR_PAD_LEFT) }}</span></b><br>
                                            <b class="text-dark">Project Status: <span
                                                    style="font-size: large; color: #b71c1c">
                                                    @if ($project->project_status == 'completed')
                                                        <span class="badge badge-success text-uppercase"
                                                            style="font-size: 1rem;background-color: rgb(42, 253, 0);">Completed</span>
                                                    @elseif ($project->project_status == 'pending')
                                                        <span class="badge badge-danger text-uppercase"
                                                            style="font-size: 1rem;background-color: rgb(255, 18, 18);">Pending</span>
                                                    @else
                                                        <span class="badge badge-warning text-uppercase"
                                                            style="font-size: 1rem;background-color: rgb(255, 144, 18);">Canceled</span>
                                                    @endif
                                                </span></b><br>
                                            <b class="text-dark">Project Started: <span
                                                    style="font-size: large; color: #b71c1c">{{ \Carbon\Carbon::parse($project->s_month)->format('F Y') }}


                                                </span></b><br>
                                            {{-- <b class="text-dark">Account:</b> 968-34567 --}}
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->
                                    <br><br>
                                    <!-- Table row -->
                                    <div class="row">
                                        <div class="col-12 table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Project Name</th>
                                                        <th>Description</th>
                                                        <th>Subtotal</th>
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
                                    <br><br>




                                    {{-- <div class="row">
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
                                            <p class="lead">Amount Due {{ \Carbon\Carbon::today()->addDays(14)->format('d/m/Y') }}</p>


                                            <div class="table-responsive">
                                                <table class="table">
                                                    <tr>
                                                        <th style="width:50%">Subtotal:</th>
                                                        <td>Rs. {{ number_format($project->p_fee, 2) }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Tax (18%)</th>
                                                        <td>Rs. {{ number_format($project->p_fee * 0.18, 2) }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Paid</th>
                                                        <td>Rs. {{ number_format($project->advance_fee, 2) }}
                                                        </td>
                                                    </tr>
                                                    <tr style="background-color: #ca0c0cbf; color: #ffffff">
                                                        <th>Total Amount:</th>
                                                        <td>Rs. {{ number_format(($project->p_fee - $project->advance_fee) + (($project->p_fee - $project->advance_fee) * 0.18), 2) }}
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- /.col -->
                                        <div class="notice" style="font-size: 12px; color: rgb(255, 0, 0);padding: 10px;">
                                            <p>Payment should be made by the due date to avoid any late fees or service disruption. Please ensure that the payment is completed on time. If you have any questions or concerns, feel free to contact our support team.</p>
                                        </div>
                                    </div> --}}







                                    <div class="row">
                                        <!-- accepted payments column -->
                                        @if ($project->project_status != 'cancel')
                                            <div class="col-6">
                                                <p class="lead">Payment Methods:</p>
                                                <b style="color: #b71c1c">Bank Transfer Only</b>

                                                <p class="well well-sm shadow-none" style="margin-top: 10px;">
                                                    Bank : <b>Commercial Bank </b></Br>
                                                    Branch : <b>Panadura Branch</b></Br>
                                                    Acc. Name : <b>Eversys Lanka (Pvt) Ltd</b></Br>
                                                    Acc. Number : <b>80******34</b>
                                                </p>
                                                <div class="notice" style="font-size: 12px; color: #b71c1c;">
                                                    <p>Payment should be made by the due date to avoid any late fees or service disruption. Please ensure that the payment is completed on time. If you have any questions or concerns, feel free to contact our support team.</p>
                                                </div>
                                            </div>
                                        @endif
                                        <!-- /.col -->

                                        <div class="col-6">
                                            @if ($project->project_status == 'completed')
                                                {{-- <p class="lead">Amount Due {{ \Carbon\Carbon::today()->addDays(14)->format('d/m/Y') }}</p> --}}
                                                <p class="lead">
                                                    Amount Due
                                                    @if ($project->f_month)
                                                        {{ \Carbon\Carbon::parse($project->f_month)->addDays(14)->format('d/m/Y') }}
                                                    @else
                                                        {{ \Carbon\Carbon::today()->addDays(14)->format('d/m/Y') }}
                                                    @endif
                                                </p>
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <tr>
                                                            <th style="width:50%">Subtotal:</th>
                                                            <td>Rs. {{ number_format($project->p_fee, 2) }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Tax (18%)</th>
                                                            <td>Rs. {{ number_format($project->p_fee * 0.18, 2) }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Paid ( - )</th>
                                                            <td><b>-</b> Rs. {{ number_format($project->advance_fee, 2) }}</td>
                                                        </tr>
                                                        <tr style="background-color: #ca0c0cbf; color: #ffffff">
                                                            <th>Total Amount:</th>
                                                            <td>Rs. <b>{{ number_format(($project->p_fee - $project->advance_fee) + (($project->p_fee - $project->advance_fee) * 0.18), 2) }}</b></td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            @elseif ($project->project_status == 'pending')
                                                <p class="lead">Amount Due {{ \Carbon\Carbon::today()->addDays(14)->format('d/m/Y') }}</p>

                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <tr>
                                                            <th style="width:50%">Subtotal:</th>
                                                            <td>Rs. {{ number_format($project->p_fee, 2) }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Tax (18%)</th>
                                                            <td>Rs. {{ number_format($project->p_fee * 0.18, 2) }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Paid ( - )</th>
                                                            <td><b>-</b> Rs. {{ number_format($project->advance_fee, 2) }}</td>
                                                        </tr>
                                                        <tr style="background-color: #ca0c0cbf; color: #ffffff">
                                                            <th>Total Amount:</th>
                                                            <td>Rs. <b>{{ number_format(($project->p_fee - $project->advance_fee) + (($project->p_fee - $project->advance_fee) * 0.18), 2) }}</b></td>
                                                        </tr>
                                                    </table>
                                                </div>


                                            @elseif ($project->project_status == 'cancel')
                                                <p class="lead" style="color: red;">Sorry, this project has been canceled.</p>

                                                @if ($project->advance_fee > 0)
                                                    <p class="notice" style="font-size: 12px; color: #b71c1c; padding: 10px;">
                                                        Please note that any advance payment made will not be refunded. We regret any inconvenience caused.
                                                    </p>
                                                @else
                                                    <p class="notice" style="font-size: 12px; color: #b71c1c; padding: 10px;">
                                                        This project was canceled, and no advance payment was made.
                                                    </p>
                                                @endif

                                            @endif
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
                                    <span style="font-size: 9px; font-family: Open Sans; color: #b71c1c;font-weight: 600">Generated Time: {{ \Carbon\Carbon::now()->format('H:i:s') }}</span>



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
    {{-- <script>
        function printInvoice() {
            const printContents = document.querySelector('.invoice').innerHTML; // Get only the content of the invoice
            const originalContents = document.body.innerHTML; // Backup original page content
            document.body.innerHTML = printContents; // Replace entire page content with the invoice
            window.print(); // Trigger the print dialog

            document.body.innerHTML = originalContents; // Restore original page content
            window.location.reload(); // Reload to ensure page state is preserved
        }
    </script> --}}

    <script>
        function printInvoice() {
            const printContents = document.querySelector('.invoice').innerHTML; // Get invoice content
            const originalContents = document.body.innerHTML; // Backup original page content

            // Set dynamic page title for print (e.g., Invoice_CustomerName)
            const customerName = "{{ $project->customer->cus_name ?? 'Customer' }}";
            const newTitle = "Invoice_" + customerName.replace(/ /g, "_"); // Replace spaces with underscores
            const originalTitle = document.title; // Backup the original title
            document.title = newTitle; // Set new title

            // Replace the page content with the invoice for printing
            document.body.innerHTML = printContents;

            window.print(); // Trigger the print dialog

            // Restore original content and title
            document.body.innerHTML = originalContents;
            document.title = originalTitle; // Restore the original page title
            window.location.reload(); // Reload to preserve state
        }
    </script>







    <script>
        // Get today's date
        const today = new Date();

        // Format the date as "MM/DD/YYYY"
        const formattedDate = today.toLocaleDateString("en-GB");

        // Display the date in the small tag
        document.getElementById("currentDate").innerText = "Invoice Date: " + formattedDate;
    </script>


    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
@endsection
