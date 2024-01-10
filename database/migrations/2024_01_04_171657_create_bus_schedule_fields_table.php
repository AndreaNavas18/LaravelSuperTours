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
        Schema::create('bus_schedule_fields', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->string('key', 100)->nullable();
            $table->enum('type', ['backend', 'frontend', 'arrays'])->nullable();
            $table->string('label')->nullable();
            $table->enum('source', ['script', 'plugin'])->nullable()->default('script');
            $table->dateTime('modified')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bus_schedule_fields');
    }
};
