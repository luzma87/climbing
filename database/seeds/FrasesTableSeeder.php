<?php

use Illuminate\Database\Seeder;

class FrasesTableSeeder extends Seeder {

    public function run() {
        // Uncomment the below to wipe the table clean before populating
        DB::table('frases')->delete();

        $frasesEs = array(
            [
                'id' => 1,
                'codigo' => 'culturaAventura',
                'contenido' => 'Cultura y aventura!!',
                'idioma' => 1,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ]
        );
        $frasesEn = array(
            [
                'id' => 2,
                'codigo' => 'culturaAventura',
                'contenido' => 'Culture and adventure!!',
                'idioma' => 2,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ]
        );

        // Uncomment the below to run the seeder
        DB::table('frases')->insert($frasesEs);
        DB::table('frases')->insert($frasesEn);
    }

}