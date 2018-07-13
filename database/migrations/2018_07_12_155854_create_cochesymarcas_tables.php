<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCochesymarcasTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {               
        Schema::create('marcas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->mediumText('caracteristica');
            $table->timestamps();
            $table->softDeletes();
        });
        
         Schema::create('coches', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->mediumText('caracteristica');
            $table->unsignedInteger('marca_id');
            $table->foreign('marca_id')->references('id')->on('marcas');
            $table->softDeletes();
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
        Schema::dropIfExists('coches');
        Schema::dropIfExists('marcas');
    }
}
