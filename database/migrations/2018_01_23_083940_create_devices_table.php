<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('state')->nullable();
            $table->string('name')->nullable();
            $table->date('added_date')->nullable();
            $table->string('macAddres')->uniquie()->nullable();
            $table->boolean('availability')->nullable();
            $table->integer('device_type_id')->unsigned();
            $table->foreign('device_type_id')->references('id')->on('device_type')->onDelete('cascade');
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
        Schema::dropIfExists('devices');
    }
}
