<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDistractions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distractions', function (Blueprint $table) {
            $table->increments('id');
            $table->time('time')->nullable();
            $table->date('date')->nullable();
            //image schema
            $table->text('image_path');
            $table->string('filename');
            $table->string('mime');
            $table->string('original_filename');

            $table->string('status')->nullable();
            //foreign key to driver id
            $table->integer('driver_id')->unsigned();
            $table->foreign('driver_id')->references('id')->on('drivers');
            //foreign key to trip id
            $table->integer('trip_id')->unsigned();
            $table->foreign('trip_id')->references('id')->on('trips');
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
        Schema::dropIfExists('distractions');
    }
}
