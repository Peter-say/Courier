<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('shipments', function (Blueprint $table) {
            $table->id();
            $table->string('tracking_number')->unique();
            $table->string('sender_name');
            $table->text('sender_address');
            $table->string('receiver_name');
            $table->text('receiver_address');
            $table->string('sender_contact');
            $table->string('receiver_contact');
            $table->string('delivery_status')->default('Pending');
            $table->foreignId('courier_id')->nullable()->constrained('couriers'); // Delivery Driver/Courier
            $table->date('estimated_delivery_date')->nullable();
            $table->string('transportation_mode')->nullable();
            $table->decimal('shipping_cost', 10, 2)->nullable(); // Shipping Cost
            $table->text('comments')->nullable(); // Comments
            $table->timestamp('pickup_datetime')->nullable(); // Pickup Date and Time
            $table->timestamp('delivery_datetime')->nullable(); // Delivery Date and Time
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipments');
    }
};
