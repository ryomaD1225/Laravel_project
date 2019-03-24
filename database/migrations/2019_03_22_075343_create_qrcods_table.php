<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQrcodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qrcods', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order_id')->unique();
            $table->string('url_a');
            $table->string('url_b');
            $table->string('qrimg_a')->nullable();
            $table->string('qrimg_b')->nullable();
            $table->string('flag_a');
            $table->string('flag_b');
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
        Schema::dropIfExists('qrcods');
    }
}
