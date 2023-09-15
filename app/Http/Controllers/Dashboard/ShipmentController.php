<?php

namespace App\Http\Controllers\Dashboard;

use App\Constants\StatusConstants;
use App\Http\Controllers\Controller;
use App\Models\Shipment;
use App\Services\ShipmentService;
use Exception;
use Illuminate\Http\Request;

class ShipmentController extends Controller
{

    public function index()
    {
        $shipments = Shipment::all();
        return view('dashboard.shipment.index', [
            'shipments' => $shipments
        ]);
    }
    public function create()
    {
        $statusOptions = StatusConstants::TRACKING_OPTIONS;
        $transportModes = StatusConstants::TRANSPORTATION_MODES;
        return view('dashboard.shipment.create', [
            'statusOptions' =>  $statusOptions,
            'transportModes' =>  $transportModes,
        ]);
    }

    public function store(Request $request)
    {
        try {
            (new ShipmentService)->storeData($request);
        
            return redirect()->route('dashboard.shipment.')->with('success_message', 'Shipment created successfully');
        } catch (\Illuminate\Database\QueryException $e) {
            // Handle database-related exception
            return back()->with('error_message', 'Database error: ' . $e->getMessage());
        } catch (\Exception $e) {
            return back()->with('error_message', 'Something went wrong: ' . $e->getMessage());
        }
    }

    public function view(Request $request, $id)
{
    
    $shipment = Shipment::findOrFail($id);
    return view('dashboard.shipment.details', [
        'shipment' => $shipment, 
    ]);
}

    public function edit(Request $request, $id)
    {
    }

    public function update(Request $request, $id)
    {
    }
}
