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
        Schema::create('bus_schedule_buses_locations', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->unsignedInteger('bus_id')->nullable();
            $table->unsignedInteger('location_id')->nullable();
            $table->time('departure_time')->nullable();
            $table->time('arrival_time')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bus_schedule_buses_locations');
    }
};
