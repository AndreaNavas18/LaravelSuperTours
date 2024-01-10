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
        Schema::create('bus_schedule_options', function (Blueprint $table) {
            $table->unsignedInteger('foreign_id')->default(0);
            $table->string('key')->default('');
            $table->unsignedTinyInteger('tab_id')->nullable();
            $table->text('value')->nullable();
            $table->text('label')->nullable();
            $table->enum('type', ['string', 'text', 'int', 'float', 'enum', 'bool'])->default('string');
            $table->unsignedInteger('order')->nullable();
            $table->unsignedTinyInteger('is_visible')->nullable()->default(1);
            $table->string('style', 500)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bus_schedule_options');
    }
};
