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
        Schema::create('bus_schedule_bookings_tickets', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->integer('booking_id')->nullable();
            $table->integer('ticket_id')->nullable();
            $table->integer('qty')->nullable();
            $table->decimal('amount', 9)->nullable();
            $table->enum('is_return', ['T', 'F'])->default('F');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bus_schedule_bookings_tickets');
    }
};
