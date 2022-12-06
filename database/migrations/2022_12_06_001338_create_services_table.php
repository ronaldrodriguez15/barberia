<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('names');
            $table->string('fch_age');
            $table->integer('tpo_identification'); //1: tarjeta identidad, 2: cedula ciudadania, 3: cedula extranjeria-
            $table->string('nro_identification');
            $table->string('email');
            $table->string('address');
            $table->bigInteger('phone');
            $table->bigInteger('phone_two');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
