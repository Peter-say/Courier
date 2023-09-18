<?php

namespace App\Models;

use App\Constants\StatusConstants;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrackingHistory extends Model
{
    use HasFactory;

    protected $guarded = [];

    // protected $dates = ['event_time'];

    protected $casts = [
        'event_time' => 'datetime'
    ];

    public function shipment()
    {
        return $this->belongsTo(Shipment::class);
    }

   
}
