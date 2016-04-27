<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWodfijoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wodfijo', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nombre')->nullable();
            $table->float('peso')->nullable();
            $table->time('tiempo')->nullable();
            $table->date('fecha');
            $table->integer('user_id_fk')->unsigned();
            $table->foreign('user_id_fk')->references('id')->on('users')->onDelete('cascade');
            $table->integer('subirwod_fk')->unsigned();
            $table->foreign('subirwod_fk')->references('id')->on('subirwod')->onDelete('cascade');

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
        Schema::drop('wodfijo');
    }
}
