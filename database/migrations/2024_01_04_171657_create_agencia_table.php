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
        Schema::create('agencia', function (Blueprint $table) {
            $table->integer('id');
            $table->text('company_name')->nullable();
            $table->text('address')->nullable();
            $table->text('address2')->nullable();
            $table->text('city')->nullable();
            $table->text('state')->nullable();
            $table->text('zipcode')->nullable();
            $table->text('main_email')->nullable();
            $table->text('country')->nullable();
            $table->text('manager')->nullable();
            $table->text('first_name')->nullable();
            $table->text('birthdate')->nullable();
            $table->text('position')->nullable();
            $table->text('phone1')->nullable();
            $table->text('phone2')->nullable();
            $table->text('fax')->nullable();
            $table->text('web_page')->nullable();
            $table->text('iata_clia')->nullable();
            $table->text('voucher_code')->nullable();
            $table->integer('type_rate')->default(0);
            $table->integer('precio_especial_exten')->default(0);
            $table->integer('tax_edit')->default(0);
            $table->text('customer_since')->nullable();
            $table->text('last_sale_date')->nullable();
            $table->text('tour_name');
            $table->text('tour_name2');
            $table->text('tour_name3');
            $table->text('tour_name4');
            $table->text('tour_name5');
            $table->integer('id_tour');
            $table->integer('id_tour2');
            $table->integer('id_tour3');
            $table->integer('id_tour4');
            $table->integer('id_tour5');
            $table->integer('spt');
            $table->text('special_price_name');
            $table->text('tabla_ruta');
            $table->string('img', 100);
            $table->integer('type_pick');
            $table->integer('serv_transp');
            $table->integer('serv_oneday');
            $table->integer('serv_multiday');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agencia');
    }
};
