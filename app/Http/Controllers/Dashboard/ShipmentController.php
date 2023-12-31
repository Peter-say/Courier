<?php

namespace App\Http\Controllers\Dashboard;

use App\Constants\StatusConstants;
use App\Http\Controllers\Controller;
use App\Models\Courier;
use App\Models\Shipment;
use App\Models\TrackingHistory;
use App\Services\ShipmentService;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShipmentController extends Controller
{

    public function index()
    {
        if (Auth::check()) {
            if (in_array(Auth::user()->role, ['Sudo', 'Admin'])) {
                $shipments = Shipment::all();
                $statusOptions = StatusConstants::TRACKING_OPTIONS;
                return view('dashboard.shipment.index', [
                    'shipments' => $shipments,
                    'statusOptions' =>  $statusOptions,
                ]);
            } else {
                abort(403, 'You do not have permission to this page');
            }
        } else {
            abort(403, 'You do not have permission to this page');
        }
    }
    public function create()
    {

        if (in_array(Auth::user()->role, ['Sudo', 'Admin'])) {
            $couriers = Courier::where('status', 'Active')->get();
            $statusOptions = StatusConstants::TRACKING_OPTIONS;
            $transportModes = StatusConstants::TRANSPORTATION_MODES;
            return view('dashboard.shipment.create', [
                'statusOptions' =>  $statusOptions,
                'transportModes' =>  $transportModes,
                'couriers' => $couriers
            ]);
        } else {
            abort(403, 'You do not have permission to this page');
        }
    }

    public function store(Request $request)
    {
        try {
            (new ShipmentService)->storeData($request);

            return redirect()->route('dashboard.shipment.')->with('success_message', 'Shipment created successfully');
        } catch (\Illuminate\Database\QueryException $e) {
            // Handle database-related exception
            return back()->with('error_message', 'Database error');
        } catch (\Exception $e) {
            return back()->with('error_message', 'Something went wrong: ' . $e->getMessage());
        }
    }

    public function view(Request $request, $id)
    {

        if (Auth::check()) {
            if (in_array(Auth::user()->role, ['Sudo', 'Admin'])) {
                $shipment = Shipment::with('trackingHistory')->findOrFail($id);
                return view('dashboard.shipment.details', [
                    'shipment' => $shipment,
                ]);
            } else {
                abort(403, 'You do not have permission to this page');
            }
        } else {
            return redirect()->route('login');
        }
    }

    public function edit(Request $request, $id)
    {
        if (Auth::check()) {
            if (in_array(Auth::user()->role, ['Sudo', 'Admin'])) {
                $couriers = Courier::where('status', 'Active')->get();

                $statusOptions = StatusConstants::TRACKING_OPTIONS;
                $transportModes = StatusConstants::TRANSPORTATION_MODES;
                $shipment = Shipment::with('dimensions')->find($id);
                return view('dashboard.shipment.edit', [
                    'statusOptions' =>  $statusOptions,
                    'transportModes' =>  $transportModes,
                    'shipment' => $shipment,
                    'couriers' => $couriers
                ]);
            } else {
                abort(403, 'You do not have permission to this page');
            }
        } else {
            return redirect()->route('login');
        }
    }

    public function update(Request $request, $id)
    {
        try {
            (new ShipmentService)->updateData($request, $id);
            return redirect()->route('dashboard.shipment.')->with('success_message', 'Shipment updated successfully');
        } catch (\Illuminate\Database\QueryException $e) {
            // Handle database-related exception
            return back()->with('error_message', 'Database error');
        } catch (\Exception $e) {
            return back()->with('error_message', 'Something went wrong: ');
        }
    }

    public function delete($id)
    {
        $shipment = Shipment::withTrashed()->findOrFail($id);
        $shipment->trackingHistory()->delete();
        $shipment->forceDelete();
        return back()->with('success_message', 'Shipment deleted successfully');
    }

    public function updateDeliveryStatus(Request $request, $id)
    {
        $shipment = Shipment::findOrFail($id);

        // Validate and update the delivery status
        $request->validate([
            'delivery_status' => 'required',
        ]);

        // Create a new tracking history entry with the updated status
        $trackingHistory = new TrackingHistory([
            'delivery_status' => $request->input('delivery_status'),
            'event_time' => now(),
        ]);

        $shipment->trackingHistory()->save($trackingHistory);

        return redirect()->back()->with('success_message', 'Delivery status updated successfully');
    }

    public function viewReceipt($id)
    {
        $shipment = Shipment::findOrFail($id);
        $dimensions = $shipment->dimensions;
        $currentDate = date('F d, Y');
        return view('dashboard.shipment.receipt.view', compact('shipment', 'dimensions', 'currentDate'));
    }

    public function generateReceipt($id)
    {
        $shipment = Shipment::findOrFail($id);
        $dimensions = $shipment->dimensions;

        $currentDate = date('F d, Y');

        $pdf = PDF::loadView('dashboard.shipment.receipt.generate', compact('shipment', 'dimensions', 'currentDate'));
        return $pdf->download('swiftlysend_payment_receipt.pdf');
    }
}
