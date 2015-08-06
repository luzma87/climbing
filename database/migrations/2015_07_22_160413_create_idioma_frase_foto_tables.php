<?php

    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;

    class CreateIdiomaFraseFotoTables extends Migration {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up() {
            Schema::create('idiomas', function (Blueprint $table) {
                $table->increments('id');
                $table->string('codigo');
                $table->string('nombre');
                $table->string('bandera');
                $table->timestamps();
            });

            Schema::create('frases', function (Blueprint $table) {
                $table->increments('id');
                $table->string('codigo');
                $table->text('contenido');
                $table->string('pagina');
                $table->integer('idioma')->unsigned()->default(0);
                $table->foreign('idioma')->references('id')->on('idiomas')->onDelete('cascade');
                $table->timestamps();
            });

            Schema::create('fotos', function (Blueprint $table) {
                $table->increments('id');
                $table->string('path');
                $table->string('galeria');
                $table->timestamps();
            });

            Schema::create('frasesFoto', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('foto')->unsigned()->default(0);
                $table->foreign('foto')->references('id')->on('foto')->onDelete('cascade');
                $table->integer('idioma')->unsigned()->default(0);
                $table->foreign('idioma')->references('id')->on('idiomas')->onDelete('cascade');
                $table->string('titulo');
                $table->text('descripcion');
                $table->timestamps();
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down() {
            Schema::drop('fotos');
            Schema::drop('frases');
            Schema::drop('frasesFoto');
            Schema::drop('idiomas');
        }
    }
