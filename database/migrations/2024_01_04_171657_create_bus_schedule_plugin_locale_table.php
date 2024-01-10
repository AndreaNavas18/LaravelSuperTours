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
        Schema::create('bus_schedule_plugin_locale', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->string('language_iso', 20)->nullable();
            $table->string('name')->nullable();
            $table->string('flag')->nullable();
            $table->enum('dir', ['ltr', 'rtl'])->nullable()->default('ltr');
            $table->unsignedInteger('sort')->nullable();
            $table->unsignedTinyInteger('is_default')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bus_schedule_plugin_locale');
    }
};
