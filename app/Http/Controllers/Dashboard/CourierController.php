<?php

namespace App\Http\Controllers\Dashboard;

use App\Constants\StatusConstants;
use App\Http\Controllers\Controller;
use App\Models\Courier;
use App\Services\CourierService;
use Exception;
use Illuminate\Http\Request;

class CourierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $couriers = Courier::get();
        return view('dashboard.courier.index', compact('couriers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $statusOptions = StatusConstants::ACTIVE_OPTIONS;
        $vehicleTypes = StatusConstants::TRANSPORTATION_MODES;
        return view('dashboard.courier.create', [
            'vehicleTypes' => $vehicleTypes,
            'statusOptions' => $statusOptions
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        try {
            (new CourierService)->storeData($request);
            return redirect()->route('dashboard.shipment.courier.index')->with('success_message', 'Courier created successfully');
        } catch (\Illuminate\Database\QueryException $e) {
            // Handle database-related exception
            return back()->with('error_message', 'Database error: ' . $e->getMessage());
        } catch (\Exception $e) {
            return redirect()->back()->with('error_message', 'Something went wrong while trying to create the courier' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $courier = Courier::FindOrFail($id);
        $statusOptions = StatusConstants::ACTIVE_OPTIONS;
        $vehicleTypes = StatusConstants::TRANSPORTATION_MODES;
        return view('dashboard.courier.edit', [
            'vehicleTypes' => $vehicleTypes,
            'statusOptions' => $statusOptions,
            'courier' => $courier,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            (new CourierService)->updateData($request, $id);
            return redirect()->route('dashboard.shipment.courier.index')->with('success_message', 'Courier updated successfully');
        } catch (\Illuminate\Database\QueryException $e) {
            // Handle database-related exception
            return back()->with('error_message', 'Database error: ' . $e->getMessage());
        } catch (\Exception $e) {
            return redirect()->back()->with('error_message', 'Something went wrong while trying to updating the courier' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $courier = Courier::findOrFail($id);
            $courier->delete();
            return back()->with('success_message', 'Courier deleted successfully');
        } catch (Exception) {
            return back()->with('error_message', 'Cannot delete Courier because it is permantly attched to Shipment. You can either mark it as Inactive or change it');
        }
    }
}
