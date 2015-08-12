<?php

    use Illuminate\Database\Seeder;

    class IdiomasTableSeeder extends Seeder {

        public function run() {
            // Uncomment the below to wipe the table clean before populating
            DB::table('idiomas')->delete();

            $idiomas = array(
                [
                    'id' => 1,
                    'codigo' => 'es',
                    'nombre' => 'Español',
                    'bandera' => '',
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime
                ],
                [
                    'id' => 2,
                    'codigo' => 'en',
                    'nombre' => 'English',
                    'bandera' => '',
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime
                ],
            );

            // Uncomment the below to run the seeder
            DB::table('idiomas')->insert($idiomas);
        }

    }