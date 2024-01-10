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
        Schema::create('bus_schedule_buses', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->unsignedInteger('route_id')->nullable();
            $table->unsignedInteger('bus_type_id')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->time('departure_time')->nullable();
            $table->time('arrival_time')->nullable();
            $table->string('recurring')->nullable();
            $table->enum('set_seats_count', ['T', 'F'])->nullable()->default('F');
            $table->decimal('discount', 9)->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bus_schedule_buses');
    }
};
