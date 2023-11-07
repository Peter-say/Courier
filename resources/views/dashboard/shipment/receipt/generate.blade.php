<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="styles.css"> <!-- Link to your custom CSS -->
    <title>Receipt</title>
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="widget-box bg-light p-3 rounded">
                    <div class="col-12 bg-white p-3 rounded">
                        <p>Thank you for choosing our shipping service. This receipt confirms the shipment of your package.</p>
                    </div>
                    <div class="widget-header widget-header-large bg-primary text-white p-3 rounded">
                        <div class="text-center">
                            @include('dashboard.shipment.receipt.logo')
                        </div>
                       <div>
                        <b class="invoice-info-label">Tracking Number:</b> <span class="red">{{$shipment->tracking_number}}</span>
                       </div>
                       <div>
                        <b class="invoice-info-label">Date Confirmed:</b><span class="red"> {{$currentDate}}</span>

                       </div>
                    </div>
                </div>
                <div class="widget-body">
                    <div class="widget-main p-4">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-xs-11 label label-lg label-success arrowed-in arrowed-right">
                                        <b>Sender Infomation</b>
                                    </div>
                                </div>
                                <ul class="list-unstyled spaced">
                                    <li><b>Adress:</b> {{ $shipment->sender_address }}</li>
                                    <li><b>Contact:</b> {{ $shipment->sender_contact }}</li>
                                    <li><b>Name:</b> {{ $shipment->sender_name }}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="space"></div>
                        <div class="d-flex justify-content-center m-2"><h4>Package Details</h4></div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Weight(KG)</th>
                                    <th>Height(M)</th>
                                    <th>Width(M)</th>
                                    <th>Length(M)</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $rowNumber = 1 @endphp
                                @foreach ($shipment->dimensions as $dimension)
                                    <tr>
                                        <td>{{ 'Package' . ' ' . $rowNumber++ }}</td>
                                        <td>{{ $dimension->weight }}</td>
                                        <td>{{ $dimension->height }}</td>
                                        <td>{{ $dimension->width }}</td>
                                        <td>{{ $dimension->length }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="hr hr8 hr-double hr-dotted"></div>
                        <div class="d-flex justify-content-end">
                            <h4>Total amount paid: <span class="red">${{ number_format($shipment->shipping_cost) ?? '' }}</span></h4>
                        </div>
                        <div class="space-4"></div>
                        <div class="well">
                            Once again, thanks for choosing <b>{{ config('app.name', 'SwiftlySend') }}</b> Company products. We believe you will be satisfied by our services.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
