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
        Schema::create('onetour', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('priceadult');
            $table->integer('pricechild');
            $table->decimal('suplemag_adult', 10)->default(0);
            $table->decimal('suplemag_child', 10)->default(0);
            $table->decimal('suplepcot_adult', 10)->default(0);
            $table->decimal('suplepcot_child', 10)->default(0);
            $table->decimal('suplehollywood_adult', 10)->default(0);
            $table->decimal('suplehollywood_child', 10)->default(0);
            $table->decimal('supleanimalk_adult', 10)->default(0);
            $table->decimal('supleanimalk_child', 10)->default(0);
            $table->decimal('suplemuniv_adult', 10)->default(0);
            $table->decimal('suplemuniv_child', 10)->default(0);
            $table->decimal('suplemisland_adult', 10)->default(0);
            $table->decimal('suplemisland_child', 10)->default(0);
            $table->decimal('suplemseaw_adult', 10)->default(0);
            $table->decimal('suplemseaw_child', 10)->default(0);
            $table->decimal('suplemaquat_adult', 10)->default(0);
            $table->decimal('suplemaquat_child', 10)->default(0);
            $table->decimal('suplemwetn_adult', 10)->default(0);
            $table->decimal('suplemwetn_child', 10)->default(0);
            $table->decimal('suplembliz_adult', 10)->default(0);
            $table->decimal('suplembliz_child', 10)->default(0);
            $table->decimal('suplemkennedy_adult', 10)->default(0);
            $table->decimal('suplemkennedy_child', 10)->default(0);
            $table->decimal('suplemholy_adult', 10)->default(0);
            $table->decimal('suplemholy_child', 10)->default(0);
            $table->integer('type_rate');
            $table->integer('id_agency');
            $table->text('company_name');
            $table->dateTime('annio');
            $table->integer('priceadult_WDW');
            $table->integer('pricechild_WDW');
            $table->integer('priceadult_UNIVP');
            $table->integer('pricechild_UNIVP');
            $table->integer('priceadult_SEAW');
            $table->integer('pricechild_SEAW');
            $table->integer('priceadult_WATERP');
            $table->integer('pricechild_WATERP');
            $table->integer('priceadult_HOLYLAND');
            $table->integer('pricechild_HOLYLAND');
            $table->integer('priceadult_KENNEDYSPC');
            $table->integer('pricechild_KENNEDYSPC');
            $table->integer('priceadult_MAGIC');
            $table->integer('pricechild_MAGIC');
            $table->string('start_date', 50);
            $table->string('end_date', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('onetour');
    }
};
