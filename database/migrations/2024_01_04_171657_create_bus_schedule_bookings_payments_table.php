<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bus_schedule_bookings_payments', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->unsignedInteger('booking_id')->nullable();
            $table->enum('payment_method', ['paypal', 'authorize', 'creditcard', 'bank', 'cash'])->nullable();
            $table->string('payment_type')->nullable();
            $table->unsignedDecimal('amount', 9)->nullable();
            $table->enum('status', ['paid', 'notpaid'])->nullable()->default('paid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bus_schedule_bookings_payments');
    }
};
