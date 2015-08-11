<?php

    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;

    class CreateProgramasTables extends Migration {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up() {
            Schema::create('gruposPrograma', function (Blueprint $table) {
                $table->increments('id');
                $table->string('nombre');
                $table->string('nombreMenu');
                $table->timestamps();
            });

            Schema::create('programas', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('grupoPrograma_id')->unsigned()->default(0);
                $table->foreign('grupoPrograma_id')->references('id')->on('gruposPrograma')->onDelete('cascade');
                $table->string('codigo');
                $table->string('nombre');
                $table->text('graduacion');
                $table->text('logistica');
                $table->text('dificultad');
                $table->text('itinerario');
                $table->text('descripcion');
                $table->text('recomendaciones');
                $table->text('requisitos');
                $table->text('llevar');
                $table->text('incluye');
                $table->text('noIncluye');
                $table->string('costo');
                $table->timestamps();
            });

            Schema::create('diasPrograma', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('programa_id')->unsigned()->default(0);
                $table->foreign('programa_id')->references('id')->on('programas')->onDelete('cascade');
                $table->string('nombre');
                $table->string('resumen');
                $table->string('pathFoto');
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
            Schema::drop('diasPrograma');
            Schema::drop('programas');
            Schema::drop('gruposPrograma');
        }
    }
