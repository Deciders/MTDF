<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectTestresultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testresults', function (Blueprint $table) {
            $table->increments('id');
            $table->string('comments')->nullable();
            $table->integer('testcase_id')->unsigned();
            $table->foreign('testcase_id')->references('id')->on('testcases')->onDelete('cascade');
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
        Schema::dropIfExists('testresults');
    }
}
