<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courier extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function shipment()
    {
        return $this->hasMany(Shipment::class);
    }

}
