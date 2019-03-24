<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id')->unique();
            $table->integer('departure_lat')->nullable();
            $table->integer('departure_lon')->nullable();
            $table->string('departure_add1')->nullable();
            $table->string('departure_add2')->nullable();
            $table->string('departure_add3')->nullable();
            $table->string('departure_station')->nullable();
            $table->integer('arrival_lat')->nullable();
            $table->integer('arrival_lon')->nullable();
            $table->string('arrival_add1')->nullable();
            $table->string('arrival_add2')->nullable();
            $table->string('arrival_add3')->nullable();
            $table->string('arrival_station')->nullable();
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
        Schema::dropIfExists('addresses');
    }
}
