<?php

namespace App\Models;

use App\Constants\StatusConstants;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'estimated_delivery_date' => 'date',
    ];

    public function dimensions()
    {
        return $this->hasMany(Dimension::class);
    }

    public function trackingHistory()
    {
        return $this->hasMany(TrackingHistory::class);
    }

    public function currentDeliveryStatus()
    {
        // Retrieve the last tracking history entry
        $latestTracking = $this->trackingHistory->last();

        if ($latestTracking) {
            // Get the delivery status from the latest tracking history entry
            $deliveryStatus = $latestTracking->delivery_status;

            // Map the delivery status to your constants and add badge classes
            switch ($deliveryStatus) {
                case StatusConstants::ACCEPTED:
                    return '<span class="badge badge-primary">Accepted</span>';
                case StatusConstants::TRANSPORTED:
                    return '<span class="badge badge-info">Transported</span>';
                case StatusConstants::SUBMITTED_FOR_SERVICE:

                    return '<span class="badge badge-info">Submitted for Service</span>';
                case StatusConstants::DELIVERED:
                    return '<span class="badge badge-success">Delivered</span>';
                case StatusConstants::FAILED_DELIVERY:
                    return '<span class="badge badge-danger">Failed Delivery</span>';
                default:
                    return '<span class="badge badge-warning">Pending</span>';
            }
        }

        return '<span class="badge badge-warning">Pending</span>';
    }
}
