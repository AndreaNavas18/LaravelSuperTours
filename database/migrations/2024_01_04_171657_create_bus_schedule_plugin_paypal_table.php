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
        Schema::create('bus_schedule_plugin_paypal', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->unsignedInteger('foreign_id')->nullable();
            $table->string('subscr_id', 25)->nullable();
            $table->string('txn_id', 25)->nullable();
            $table->string('txn_type', 50)->nullable();
            $table->unsignedDecimal('mc_gross', 9)->nullable();
            $table->string('mc_currency', 3)->nullable();
            $table->string('payer_email')->nullable();
            $table->dateTime('dt')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bus_schedule_plugin_paypal');
    }
};
