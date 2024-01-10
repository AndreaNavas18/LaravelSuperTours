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
        Schema::create('bus_schedule_bookings', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->unsignedInteger('uuid')->nullable();
            $table->unsignedInteger('bus_id')->nullable();
            $table->unsignedInteger('pickup_id')->nullable()->comment('Location ID');
            $table->unsignedInteger('return_id')->nullable()->comment('Location ID');
            $table->enum('is_return', ['T', 'F'])->nullable()->default('F');
            $table->unsignedInteger('back_id')->nullable();
            $table->date('return_date')->nullable();
            $table->date('booking_date')->nullable();
            $table->date('bus_departure_date')->nullable();
            $table->string('booking_time')->nullable();
            $table->string('booking_route')->nullable();
            $table->dateTime('booking_datetime')->nullable();
            $table->dateTime('stop_datetime')->nullable();
            $table->string('code')->nullable();
            $table->unsignedDecimal('sub_total', 9)->nullable();
            $table->unsignedDecimal('tax', 9)->nullable();
            $table->unsignedDecimal('total', 9)->nullable();
            $table->unsignedDecimal('deposit', 9)->nullable();
            $table->enum('payment_method', ['paypal', 'authorize', 'creditcard', 'cash', 'bank'])->nullable();
            $table->enum('status', ['confirmed', 'cancelled', 'pending'])->nullable()->default('pending');
            $table->string('txn_id')->nullable();
            $table->dateTime('processed_on')->nullable();
            $table->dateTime('created')->nullable();
            $table->enum('is_sent', ['T', 'F'])->nullable()->default('F');
            $table->string('ip')->nullable();
            $table->string('c_title')->nullable();
            $table->string('c_fname')->nullable();
            $table->string('c_lname')->nullable();
            $table->string('c_phone')->nullable();
            $table->string('c_email')->nullable();
            $table->string('c_company')->nullable();
            $table->text('c_notes')->nullable();
            $table->string('c_address')->nullable();
            $table->string('c_city')->nullable();
            $table->string('c_state')->nullable();
            $table->string('c_zip')->nullable();
            $table->unsignedInteger('c_country')->nullable();
            $table->string('cc_type')->nullable();
            $table->string('cc_num')->nullable();
            $table->string('cc_exp')->nullable();
            $table->string('cc_code')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bus_schedule_bookings');
    }
};
