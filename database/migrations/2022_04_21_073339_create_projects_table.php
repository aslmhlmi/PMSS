<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('team');
            $table->string('presale');
            $table->string('enduser');
            $table->string('partner');
            $table->string('product');

            $table->foreignId('staff_id');

            // $table->foreign('staff_id')->reference('id')->on('staffs');

            $table->string('workingstatus');
            $table->string('status');
            $table->string('postatus');
            $table->string('startdate');
            $table->string('enddate');
            $table->string('mdays');
            $table->string('pocupdate');
            $table->string('remark');

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
        Schema::dropIfExists('projects');
    }
}
