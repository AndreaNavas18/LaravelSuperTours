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
        Schema::create('bus_schedule_prices', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->unsignedInteger('bus_id')->nullable();
            $table->unsignedInteger('ticket_id')->nullable();
            $table->integer('from_location_id')->nullable();
            $table->integer('to_location_id')->nullable();
            $table->decimal('price', 9)->nullable();
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
        Schema::dropIfExists('bus_schedule_prices');
    }
};
