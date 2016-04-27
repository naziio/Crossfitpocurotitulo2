<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBioTable extends Migration
{

    public function up()
    {
    Schema::create('bio', function (Blueprint $table) {
    $table->increments('id');
    $table->float('peso')->nullable();
    $table->float('estatura')->nullable();
    $table->text('biografia',200)->nullable();
    $table->integer('user_id_fk')->unsigned();
    $table->foreign('user_id_fk')->references('id')->on('users')->onDelete('cascade');

    $table->timestamps();
    });
        Schema::table('bio', function(Blueprint $table)
        {
            $table->string('path')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */


    public function down()
    {
        Schema::drop('bio');
    }
}
