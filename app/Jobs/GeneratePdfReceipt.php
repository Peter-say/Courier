<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

use Barryvdh\DomPDF\Facade\Pdf;

class GeneratePdfReceipt implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $shipment;
    protected $dimensions;

    public function __construct($shipment, $dimensions)
    {
        $this->shipment = $shipment;
        $this->dimensions = $dimensions;
    }

    public function handle()
    {
        $pdf = pdf::loadView('dashboard.shipment.receipt.generate', [
            'shipment' => $this->shipment,
            'dimensions' => $this->dimensions,
        ]);
        return $pdf->stream('swiftlysend_payment_receipt.pdf');
    }
}
