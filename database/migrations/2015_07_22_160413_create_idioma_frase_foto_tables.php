<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIdiomaFraseFotoTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('idiomas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo')->default('');
            $table->string('nombre')->default('');
            $table->string('bandera')->default('');
            $table->timestamps();
        });

        Schema::create('frases', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo')->default('');
            $table->text('contenido')->default('');
            $table->integer('idioma')->unsigned()->default(0);
            $table->foreign('idioma')->references('id')->on('idiomas')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('fotos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('path')->default('');
            $table->integer('titulo')->unsigned()->default(0);
            $table->foreign('titulo')->references('id')->on('frases')->onDelete('cascade');
            $table->integer('descripcion')->unsigned()->default(0);
            $table->foreign('descripcion')->references('id')->on('frases')->onDelete('cascade');
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
        Schema::drop('fotos');
        Schema::drop('frases');
        Schema::drop('idiomas');
    }
}