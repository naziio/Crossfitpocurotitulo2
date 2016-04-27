<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HabilitarEvaluacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habilitarevaluacion', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('estado');
            $table->integer('user_fk')->unsigned();
            $table->foreign('user_fk')->references('id')->on('users')->onDelete('cascade');
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
        Schema::drop('habilitarevaluacion');
    }
}
