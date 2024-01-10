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
        Schema::create('bus_schedule_plugin_locale_languages', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->string('iso', 20)->nullable();
            $table->string('title')->nullable();
            $table->string('region')->nullable();
            $table->string('native')->nullable();
            $table->enum('dir', ['ltr', 'rtl'])->nullable()->default('ltr');
            $table->string('country_abbr', 3)->nullable();
            $table->string('language_abbr', 3)->nullable();
            $table->string('file')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bus_schedule_plugin_locale_languages');
    }
};
