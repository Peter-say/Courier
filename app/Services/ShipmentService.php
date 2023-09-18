<?php

namespace App\Services;

use App\Models\Dimension;
use App\Models\Shipment;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class ShipmentService
{
    public function validateData(Request $request)
    {
        try {
            return $request->validate([
                'sender_name' => 'required|string',
                'sender_address' => 'required|string',
                'receiver_name' => 'required|string',
                'receiver_address' => 'required|string',
                'sender_contact' => ['required', 'string', 'regex:/^\+?[0-9]+$|^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/'],
                'receiver_contact' => ['required', 'string', 'regex:/^\+?[0-9]+$|^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/'],
                'courier_id' => 'nullable|exists:couriers,id',
                'estimated_delivery_date' => 'nullable|date',
                'comments' => 'nullable|string',
                'pickup_datetime' => 'nullable|date',
                'transportation_mode' => 'nullable|string',
                'delivery_datetime' => 'nullable|date',
                'weight.*' => 'required|numeric',
                'height.*' => 'required|numeric',
                'width.*' => 'required|numeric',
                'length.*' => 'required|numeric',
               
            ]);
        } catch (ValidationException $e) {
            return back()->with('error_message', 'Invalid input: ' . $e->getMessage());
        }
    }
    public function storeData(Request $request)
    {
        try {
            // Validate the incoming data
            $this->validateData($request);
    
            // Create a new shipment using the validated data
            $createdShipment = Shipment::create([
                'sender_name' => $request->input('sender_name'),
                'sender_address' => $request->input('sender_address'),
                'receiver_name' => $request->input('receiver_name'),
                'receiver_address' => $request->input('receiver_address'),
                'sender_contact' => $request->input('sender_contact'),
                'receiver_contact' => $request->input('receiver_contact'),
                'courier_id' => $request->input('courier_id'),
                'estimated_delivery_date' => $request->input('estimated_delivery_date'),
                'comments' => $request->input('comments'),
                'pickup_datetime' => $request->input('pickup_datetime'),
                'transportation_mode' => $request->input('transportation_mode'),
                'delivery_datetime' => $request->input('delivery_datetime'),
                'tracking_number' => $this->generateTrackingNumber(),
            ]);
            
    
            // Create dimensions associated with the shipment
            foreach ($request->input('weight') as $index => $weight) {
                Dimension::create([
                    'shipment_id' => $createdShipment->id,
                    'weight' => $weight,
                    'height' => $request->input('height')[$index],
                    'width' => $request->input('width')[$index],
                    'length' => $request->input('length')[$index],
                ]);
            }
    
            return redirect()->route('dashboard.shipment.')->with('success_message', 'Shipment created successfully');
        } catch (Exception $e) {
            Log::error($e);
            return redirect()->back()->with('error_message', 'Something went wrong while trying to create the shipment' . $e->getMessage());
        }
    }

    public function updateData(Request $request, $id)
    {
        try {
            // Validate the incoming data
            $this->validateData($request);
    
            // Create a new shipment using the validated data
            $Updateshipment = Shipment::FindOrFail($id);
             $Updateshipment->update([
                'sender_name' => $request->input('sender_name'),
                'sender_address' => $request->input('sender_address'),
                'receiver_name' => $request->input('receiver_name'),
                'receiver_address' => $request->input('receiver_address'),
                'sender_contact' => $request->input('sender_contact'),
                'receiver_contact' => $request->input('receiver_contact'),
                'courier_id' => $request->input('courier_id'),
                'estimated_delivery_date' => $request->input('estimated_delivery_date'),
                'comments' => $request->input('comments'),
                'pickup_datetime' => $request->input('pickup_datetime'),
                'transportation_mode' => $request->input('transportation_mode'),
                'delivery_datetime' => $request->input('delivery_datetime'),
                
            ]);
            
    
            // Create dimensions associated with the shipment
            foreach ($request->input('weight') as $index => $weight) {
                Dimension::create([
                    'shipment_id' =>  $Updateshipment->id,
                    'weight' => $weight,
                    'height' => $request->input('height')[$index],
                    'width' => $request->input('width')[$index],
                    'length' => $request->input('length')[$index],
                ]);
            }
    
            return redirect()->route('dashboard.shipment.')->with('success_message', 'Shipment created successfully');
        } catch (Exception $e) {
            Log::error($e);
            return redirect()->back()->with('error_message', 'Something went wrong while trying to create the shipment' . $e->getMessage());
        }
    }
    
    

    public function generateTrackingNumber()
    {
        $min = 1000000000;
        $max = 9999999999;
        $randomNumber = mt_rand($min, $max);
        $trackingNumber = 'TR' . $randomNumber;
        return $trackingNumber;
    }
}
