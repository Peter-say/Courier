<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'estimated_delivery_date' => 'date', 
    ];

    public function dimension()
    {
        return $this->hasMany(Dimension::class);
    }
}
