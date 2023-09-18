<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Shipment;
use App\Models\TrackingHistory;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome()
    {
        return view('web.index');
    }

    public function contactUS()
    {
        return view('web.contact-us');
    }

    public function aboutUS()
    {
        return view('web.about-us');
    }

    public function trackOrderPage()
    {
        // Pass an empty array to the view to ensure $shipmentDetails is defined
       
        return view('web.tracking.details', ['shipmentDetails' => [],  'deliveryStatus' ]);
    }
    
    public function trackShipment(Request $request)
{
    // Retrieve the tracking number from the request
    $trackingNumber = $request->input('tracking_number');

    // Query the database to fetch the shipment status based on the tracking number
    $shipmentDetails = Shipment::with(['trackingHistory' => function ($query) {
        // Order the tracking history by timestamp in descending order
        $query->orderBy('created_at', 'desc')->limit(1);
    }])->where('tracking_number', $trackingNumber)->first();

    if ($shipmentDetails) {
        $currentStatus = $shipmentDetails->currentDeliveryStatus(); // Replace this with your logic to get the current status.
        return view('web.tracking.details', ['shipmentDetails' => $shipmentDetails, 'currentStatus' => $currentStatus])
        ->with('success_message', 'Shipment details retrived!');
    } else {
        return back()->with('error_message', 'Shipment could not be found with the provided tracking number. Please, provide a valid tracking number ');
    }
}

    
    
}
