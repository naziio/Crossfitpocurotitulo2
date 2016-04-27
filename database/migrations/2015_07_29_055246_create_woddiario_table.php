<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWoddiarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('woddiario', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre')->nullable();
            $table->text('descripcion');
            $table->date('fecha');
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
        Schema::drop('woddiario');
    }
}
