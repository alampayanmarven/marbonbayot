<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMotorcyclesTable extends Migration
{
    public function up()
    {
        Schema::create('motorcycles', function (Blueprint $table) {
            $table->id();
            $table->string('vehicle_model');
            $table->integer('engine_size');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('motorcycles');
    }
}
