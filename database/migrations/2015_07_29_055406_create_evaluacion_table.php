<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluacion', function (Blueprint $table) {
            $table->increments('id');
            $table->float('pullup')->nullable();
            $table->float('pushup')->nullable();
            $table->float('abd')->nullable();
            $table->float('salto')->nullable();
            $table->float('sentadilla')->nullable();
            $table->time('10k')->nullable();
            $table->float('pressbanca')->nullable();
            $table->float('clean')->nullable();
            $table->float('snatch')->nullable();
            $table->float('sentadillapeso')->nullable();
            $table->float('sentadillafrontal')->nullable();

            $table->integer('user_id_fk')->unsigned();
            $table->foreign('user_id_fk')->references('id')->on('users')->onDelete('cascade');
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
        Schema::drop('evaluacion');
    }
}
