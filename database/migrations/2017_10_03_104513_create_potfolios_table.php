<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePotfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('potfolios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('descrption');
            $table->integer('state_id')->unsigned();
            $table->integer('category_id')->unsigned(); 
            $table->integer('user_id')->unsigned(); 

            $table->foreign('state_id')->references('id')->on('states');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('user_id')->references('id')->on('users');
          
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
        Schema::dropIfExists('potfolios');
    }
}
