<?php

namespace App\Http\Controllers\Web;

use App\Helpers\PageMetaData;
use App\Http\Controllers\Controller;
use App\Mail\SendContactMailToAdmin;
use App\Models\Contact;
use App\Models\Shipment;
use App\Models\TrackingHistory;
use App\Models\User;
use App\Notifications\ContactFormNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

class WelcomeController extends Controller
{

    public function welcome()
    {
        $metaData = PageMetaData::welcome();
        return view('web.index', compact('metaData'));
    }

    public function contactUS()
    {
        $metaData = PageMetaData::contactUS();
        return view('web.contact-us', compact('metaData'));
    }

    public function aboutUs()
    {
        $metaData = PageMetaData::aboutUs();
        return view('web.about-us', compact('metaData'));
    }

    public function trackOrderPage()
    {
        $metaData = PageMetaData::trackOrderPage();

        return view(
            'web.tracking.details',
            [
                'shipmentDetails' => [],  'deliveryStatus',
                'metaData' => $metaData,
            ]
        );
    }

    public function trackShipment(Request $request)
    {
        $metaData = PageMetaData::trackOrderPage();
        if ($request->isMethod('post')) {
            // Retrieve the tracking number from the request
            $trackingNumber = $request->input('tracking_number');

            // Query the database to fetch the shipment status based on the tracking number
            $shipmentDetails = Shipment::with(['trackingHistory' => function ($query) {
                // Order the tracking history by timestamp in descending order
                $query->orderBy('created_at', 'desc')->limit(1);
            }])->where('tracking_number', $trackingNumber)->first();

            if ($shipmentDetails) {
                $currentStatus = $shipmentDetails->currentDeliveryStatus();
                return view('web.tracking.details', [
                    'shipmentDetails' => $shipmentDetails,
                    'currentStatus' => $currentStatus,
                    'metaData' => $metaData,

                ])
                    ->with('success_message', 'Shipment details retrieved!');
            } else {
                return back()->with('error_message', 'Shipment could not be found with the provided tracking number. Please, provide a valid tracking number ');
            }
        } else {
            return view('web.tracking.details', ['shipmentDetails' => [],  'deliveryStatus']);
        }
    }

    public function submitContactForm(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        $notificationData = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        // Retrieve the admin user with the 'Sudo' role
        $adminUser = User::where('role', 'Sudo')->first();
        $adminMail = 'swiftlysend.online@gmail.com';
        Mail::to($adminMail)->send(new SendContactMailToAdmin($notificationData));

        if ($adminUser) {
            // Send the notification to the admin user
            $adminUser->notify(new ContactFormNotification(...$notificationData));
        }

        // Redirect back with a success message or display a thank you message
        return redirect()->back()->with('success_message', 'Your message has been sent successfully!');
    }
}
