@extends('home.dash-header')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Quotation View')
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
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="m-0" style="color:  #b71c1c;text-align: left;">
                                                EVERSYS LANKA (PVT) LTD
                                                <small class="float-right"
                                                    style="float: right">ELPL/{{ \Carbon\Carbon::parse($quotationss->created_at)->format('d-m-Y') }}/Q/{{ str_pad($quotationss->id, 4, '0', STR_PAD_LEFT) }}
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
                                                {{-- 265 2/B, Kurunduwatta Road,<br>
                                                Madupitiya, <br>Panadura,<br>
                                                Sri Lanka<br> --}}
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
                                                    class="text-dark">{{ ucwords($quotationss->cus_name) }}</strong>
                                                <br>
                                                @php
                                                    // Capitalize the first letter of each word in the address
                                                    $formattedAddress = ucwords($quotationss->address);

                                                    // Replace commas with <br> for line breaks
                                                    $formattedAddress = str_replace(',', ',<br>', $formattedAddress);
                                                @endphp

                                                {!! $formattedAddress !!}<br>
                                                <strong class="text-dark"> Contact:
                                                    {{ $quotationss->contact }}</strong><br>
                                            </address>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-4 invoice-col">
                                            <b class="text-dark">Quotation Number: <br><span
                                                    style="font-size: ; color: #b71c1c">ELPL/{{ \Carbon\Carbon::parse($quotationss->created_at)->format('d-m-Y') }}/Q/{{ str_pad($quotationss->id, 4, '0', STR_PAD_LEFT) }}
                                                </span></b>
                                            </br>
                                                <b class="text-dark">Issued Date: <br><span
                                                    style="font-size: ; color: #b71c1c">{{ \Carbon\Carbon::parse($quotationss->created_at)->format('d-m-Y') }}
                                                </span></b>
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
                                                        <th>Service Name</th>
                                                        <th>Service Cost</th>
                                                    </tr>
                                                </thead>
                                                <tbody>



                                                    {{-- Check and display each service and its price --}}
                                                    @foreach (range(1, 4) as $index)
                                                        {{-- Loop over the 4 possible services --}}
                                                        @php
                                                            $serviceName = 'ser_name_' . $index;
                                                            $servicePrice = 'ser_price_' . $index;
                                                        @endphp

                                                        {{-- If the service name exists, display the service and price --}}
                                                        @if (!empty($quotationss->$serviceName) && !empty($quotationss->$servicePrice))
                                                            <tr>
                                                                <td>{{ $index }}</td>
                                                                <td>{{ $quotationss->$serviceName }}</td>
                                                                <td>{{ $quotationss->$servicePrice }}</td>
                                                            </tr>
                                                        @endif
                                                    @endforeach

                                                    {{-- @foreach ($quot as $key => $item)
                                                        @if (is_object($quot))
                                                            <!-- Ensure $quotationss is an object -->
                                                            <tr>
                                                                <td>{{ (int) $key + 1 }}</td>
                                                                <td>{{ $item->ser_name_1 }}</td>
                                                                <td>{{ $item->ser_price_1 }}</td>
                                                            </tr>
                                                        @else
                                                            <!-- Handle case where $quotationss is not an object -->
                                                            <tr>
                                                                <td colspan="3">No data available</td>
                                                            </tr>
                                                        @endif
                                                    @endforeach --}}


                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->











                                    <div class="row">
                                        <!-- accepted payments column -->

                                        <div class="col-6">
                                            {{-- <p class="lead" style="font-size: 12px; color: #b71c1c">* Valid for 21 days
                                                from the issue date.</p> --}}




                                                <p class=" well well-sm shadow-none" style="margin-top: 10px; font-size: 14px">
                                                    <b>Additional Note :</b>
                                                    <p class="notice" style="font-size: 13px; color: #b71c1c; padding: 0 10px;">
                                                        {!! nl2br(ucfirst(e($quotationss->additional))) !!}
                                                    </p>

                                                    </Br>

                                                </p>


                                        </div>

                                        <!-- /.col -->

                                        <div class="col-6">

                                            {{-- <p class="lead">Amount Due {{ \Carbon\Carbon::today()->addDays(14)->format('d/m/Y') }}</p> --}}


                                            <div class="table-responsive">
                                                <table class="table">
                                                    <tr>
                                                        <th style="width:50%">Subtotal:</th>
                                                        <td>Rs. {{ number_format($quotationss->service_cost, 2) }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Tax (18%)</th>
                                                        <td>Rs. {{ number_format($quotationss->tax, 2) }}</td>
                                                    </tr>

                                                    <tr style="background-color: #ca0c0cbf; color: #ffffff">
                                                        <th>Total Amount:</th>
                                                        <td><b>Rs. {{ number_format($quotationss->total, 2) }}</b></td>
                                                    </tr>



                                                </table><p class="lead" style="font-size: 12px; color: #b71c1c; float: right;">
                                                    * Valid until: {{ \Carbon\Carbon::parse($quotationss->created_at)->addDays(21)->format('d M Y') }}
                                                </p>
                                            </div>





                                            {{-- <p class="lead" style="color: red;">Sorry, this project has been canceled.</p>

                                                @if ($quotationss->advance_fee > 0)
                                                    <p class="notice" style="font-size: 12px; color: #b71c1c; padding: 10px;">
                                                        Please note that any advance payment made will not be refunded. We regret any inconvenience caused.
                                                    </p>
                                                @else
                                                    <p class="notice" style="font-size: 12px; color: #b71c1c; padding: 10px;">
                                                        This project was canceled, and no advance payment was made.
                                                    </p>


                                            @endif --}}
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <br>
                                    <!-- /.row -->
                                    <div class=""
                                        style="font-size: 14px; color: black; background-color: #ffeb3b; padding: 10px; border-radius: 5px; text-align: left; ">
                                        <p style="font-size: 14px; color: black; background-color:">
                                            <strong>Important Notice:</strong>
                                        </p>

                                        <ul style="font-size: 12px; color: black; background-color:">
                                            <li>To proceed with your service, an <strong>advance payment of
                                                    {{ number_format(round($quotationss->total * 0.25, -3), 2) }}</strong>
                                                [25% nearest largest value] is required. Thank you
                                                for your understanding.</li>
                                            {{-- <li>The work will commence once the advance is received.</li> --}}
                                            {{-- <li>The remaining balance will be due upon completion of the project, prior to
                                                delivery.</li> --}}
                                            {{-- <li>Please ensure the advance payment is made to start the process. Thank you
                                                for your understanding.</li> --}}
                                            {{-- <li>If the project is delayed due to client-side issues, the project completion
                                                date may be extended accordingly.</li> --}}

                                            {{-- <li>The quotation provided is valid for 30 days from the issue date. After this period, a new quotation may be required.</li> --}}
                                            {{-- <li>Should you wish to cancel the project after the work has commenced, the advance payment will be forfeited.</li> --}}

                                            {{-- <li>Eversys Lanka will retain all intellectual property rights related to the
                                                work until final payment is received in full.</li> --}}
                                            <li>Please note that any <strong>advance payment made will not be refunded</strong> once
                                                    the project has started. We regret any inconvenience caused.

                                            </li>
                                            <li>In case of <strong>additional requests or changes after the project has started,
                                                extra charges may apply</strong> based on the nature of the modifications.</li>

                                            {{-- <li><strong>Any additional services not explicitly mentioned in this quotation
                                                    will be subject to separate charges, based on the scope and requirements
                                                    of the service.</strong></li> --}}
                                        </ul>

                                    </div>


                                    <br><br>

                                    <!-- Computer-Generated Notice positioned at the bottom (page end) -->
                                    <div class="notice " style="font-size: 12px; color: black">
                                         <p><b style="font-size: 12px; color: #b71c1c">Notice:</b> This document has been
                                            generated electronically and is considered valid without a physical signature.
                                            The information contained herein is based on the data provided at the time of
                                            generation and is subject to change without prior notice. Please review the
                                            details carefully and <a href="mailto:eversyslanka.com" style="color: #1976d2; text-decoration: none; font-weight: bold;">contact us</a> if any discrepancies are found. For any
                                            questions or clarifications, refer to our support or customer service section.
                                        </p>


                                    </div>
                                    <span
                                        style="font-size: 9px; font-family: Open Sans; color: #b71c1c;font-weight: 600">Printed
                                        Time: {{ \Carbon\Carbon::now()->format('d/m/Y - H:i:s') }}
                                    </span>



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

    {{-- <script>
        function printInvoice() {
            const printContents = document.querySelector('.invoice').innerHTML; // Get invoice content
            const originalContents = document.body.innerHTML; // Backup original page content

            // Check for company name first, fallback to customer name if null
            const companyName = "{{ $quotationss->com_name ?? '' }}".trim();
            const customerName = "{{ $quotationss->cus_name ?? 'Customer' }}".trim();

            let printFileName = "Invoice_";
            if (companyName) {
                printFileName += companyName.replace(/ /g, "_"); // Use company name if available
            } else {
                printFileName += customerName.replace(/ /g, "_"); // Use customer name otherwise
            }

            const originalTitle = document.title; // Backup the original title
            document.title = printFileName; // Set new title for print dialog

            // Replace the page content with the invoice content
            document.body.innerHTML = printContents;

            window.print(); // Trigger the print dialog

            // Restore original content and title
            document.body.innerHTML = originalContents;
            document.title = originalTitle; // Restore the original page title
            window.location.reload(); // Reload to preserve state
        }
    </script> --}}

    {{-- <script>
        function printInvoice() {
            const printContents = document.querySelector('.invoice').innerHTML; // Get invoice content
            const originalContents = document.body.innerHTML; // Backup original page content

            // Retrieve variables from Laravel
            const companyName = "{{ $quotationss->com_name ?? '' }}".trim();
            const customerName = "{{ $quotationss->cus_name ?? 'Customer' }}".trim();
            const createdDate = "{{ \Carbon\Carbon::parse($quotationss->created_at)->format('d-m-Y') }}";
            const quotationId = "{{ str_pad($quotationss->id, 4, '0', STR_PAD_LEFT) }}";

            // Generate filename
            let printFileName = `ELPL/${createdDate}/Q/${quotationId}`;
            if (companyName) {
                printFileName += `_${companyName.replace(/ /g, "_")}`; // Append company name
            } else {
                printFileName += `_${customerName.replace(/ /g, "_")}`; // Append customer name
            }

            const originalTitle = document.title; // Backup original title
            document.title = printFileName; // Set new title for print dialog

            // Replace page content with invoice content
            document.body.innerHTML = printContents;

            window.print(); // Trigger print dialog

            // Restore original content and title
            document.body.innerHTML = originalContents;
            document.title = originalTitle; // Restore original title
            window.location.reload(); // Reload to preserve state
        }
    </script> --}}

    <script>
        function printInvoice() {
            const printContents = document.querySelector('.invoice').innerHTML; // Get invoice content
            const originalContents = document.body.innerHTML; // Backup original page content

            // Retrieve variables from Laravel
            const companyName = "{{ $quotationss->com_name ?? '' }}".trim();
            const customerName = "{{ $quotationss->cus_name ?? 'Customer' }}".trim();
            const createdDate = "{{ \Carbon\Carbon::parse($quotationss->created_at)->format('d-m-Y') }}";
            const quotationId = "{{ str_pad($quotationss->id, 4, '0', STR_PAD_LEFT) }}";

            // Generate filename
            let printFileName = `Quotation_`;

            if (companyName) {
                printFileName += `${companyName.replace(/ /g, "_")}`; // Add company name if exists
            } else {
                printFileName += `${customerName.replace(/ /g, "_")}`; // Add customer name if company name is null
            }

            printFileName += `_ELPL_${createdDate}_Q_${quotationId}`;

            const originalTitle = document.title; // Backup original title
            document.title = printFileName; // Set new title for print dialog

            // Replace page content with invoice content
            document.body.innerHTML = printContents;

            window.print(); // Trigger print dialog

            // Restore original content and title
            document.body.innerHTML = originalContents;
            document.title = originalTitle; // Restore original title
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
