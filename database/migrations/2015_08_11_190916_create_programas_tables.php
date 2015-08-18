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
            Schema::create('tiposDificultad', function (Blueprint $table) {
                $table->increments('id');
                $table->timestamps();
            });
            Schema::create('frasesTipoDificultad', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('tipo_dificultad_id')->unsigned()->default(0);
                $table->foreign('tipo_dificultad_id')->references('id')->on('tiposDificultad')->onDelete('cascade');
                $table->integer('idioma')->unsigned()->default(0);
                $table->foreign('idioma')->references('id')->on('idiomas')->onDelete('cascade');
                $table->string('codigo');
                $table->string('descripcion');
                $table->timestamps();
            });

            Schema::create('gruposPrograma', function (Blueprint $table) {
                $table->increments('id');
                $table->timestamps();
            });
            Schema::create('frasesGrupoPrograma', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('grupo_programa_id')->unsigned()->default(0);
                $table->foreign('grupo_programa_id')->references('id')->on('gruposPrograma')->onDelete('cascade');
                $table->integer('idioma')->unsigned()->default(0);
                $table->foreign('idioma')->references('id')->on('idiomas')->onDelete('cascade');
                $table->string('nombre');
                $table->string('nombreMenu');
                $table->timestamps();
            });

            Schema::create('programas', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('grupo_programa_id')->unsigned()->default(0);
                $table->foreign('grupo_programa_id')->references('id')->on('gruposPrograma')->onDelete('cascade');
                $table->integer('tipoDificultad_id')->unsigned()->default(0);
                $table->foreign('tipoDificultad_id')->references('id')->on('tiposDificultad')->onDelete('cascade');
                $table->string('codigo');
                $table->string('foto');
                $table->timestamps();
            });
            Schema::create('frasesPrograma', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('programa_id')->unsigned()->default(0);
                $table->foreign('programa_id')->references('id')->on('programas')->onDelete('cascade');
                $table->integer('idioma')->unsigned()->default(0);
                $table->foreign('idioma')->references('id')->on('idiomas')->onDelete('cascade');
                $table->string('nombre');
                $table->text('descripcion');
                $table->text('logistica');
                $table->text('itinerario');
                $table->text('recomendaciones');
                $table->text('requisitos');
                $table->text('llevar');
                $table->string('llevarFile');
                $table->text('incluye');
                $table->text('noIncluye');
                $table->text('costo');
                $table->timestamps();
            });

            Schema::create('partesPrograma', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('programa_id')->unsigned()->default(0);
                $table->foreign('programa_id')->references('id')->on('programas')->onDelete('cascade');
                $table->integer('tipo_dificultad_id')->unsigned()->default(0);
                $table->foreign('tipo_dificultad_id')->references('id')->on('tiposDificultad')->onDelete('cascade');
                $table->string('orden');
                $table->string('foto');
                $table->timestamps();
            });
            Schema::create('frasesPartePrograma', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('parte_programa_id')->unsigned()->default(0);
                $table->foreign('parte_programa_id')->references('id')->on('partesPrograma')->onDelete('cascade');
                $table->integer('idioma')->unsigned()->default(0);
                $table->foreign('idioma')->references('id')->on('idiomas')->onDelete('cascade');
                $table->string('nombre');
                $table->text('resumen');
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
            Schema::drop('frasesPartePrograma');
            Schema::drop('partesPrograma');
            Schema::drop('frasesPrograma');
            Schema::drop('programas');
            Schema::drop('frasesGrupoPrograma');
            Schema::drop('gruposPrograma');
            Schema::drop('frasesTipoDificultad');
            Schema::drop('tiposDificultad');
        }
    }
