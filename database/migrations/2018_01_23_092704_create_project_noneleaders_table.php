<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectNoneleadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_noneleaders', function (Blueprint $table) {
            $table->integer('noneleader_id')->unsigned()->nullable();
            $table->foreign('noneleader_id')->references('id')->on('noneleaders')->onDelete('cascade');
            $table->integer('project_id')->unsigned()->nullable();
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->nullableTimestamps();
            $table->primary(['noneleader_id', 'project_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_noneleaders');
    }
}
