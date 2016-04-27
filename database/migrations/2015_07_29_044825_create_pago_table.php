<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pago', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tipopago_fk')->unsigned();
            $table->integer('user_fk')->unsigned();
            $table->foreign('tipopago_fk')->references('id')->on('tipopago')->onDelete('cascade');
            $table->foreign('user_fk')->references('id')->on('users')->onDelete('cascade');
           // $table->date('fechapago');
            $table->date('fechaexpira');
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
        Schema::drop('pago');
    }
}
