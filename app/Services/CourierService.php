<?php

namespace App\Services;

use App\Models\Courier;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class CourierService
{
    public function ValidateData(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'contact_number' => 'required|string|max:20',
                'vehicle_type' => 'required|string|max:255',
                'license_plate' => 'nullable|string|max:20',
                'status' => 'required|in:Active,Inactive',
            ]);
        } catch (ValidationException $e) {
            return back()->with('error_message', 'Invalid input: ' . $e->getMessage());
        }
    }

    public function storeData(Request $request)
    {

        // Validate the incoming data
        $this->validateData($request);
        Courier::create([
            'name' => $request->input('name'),
            'contact_number' => $request->input('contact_number'),
            'vehicle_type' => $request->input('vehicle_type'),
            'license_plate' => $request->input('license_plate'),
            'status' => $request->input('status'),

        ]);

        return $request;
    }

    public function updateData(Request $request, $id)
    {

        // Validate the incoming data
        $this->validateData($request);
        $courier = Courier::FindOrFail($id);
        $courier->update([
            'name' => $request->input('name'),
            'contact_number' => $request->input('contact_number'),
            'vehicle_type' => $request->input('vehicle_type'),
            'license_plate' => $request->input('license_plate'),
            'status' => $request->input('status'),

        ]);
        
        return $request;
    }
}
