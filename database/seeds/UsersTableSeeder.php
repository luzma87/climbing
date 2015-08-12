<?php

    use Illuminate\Database\Seeder;

    class UsersTableSeeder extends Seeder {

        public function run() {
            // Uncomment the below to wipe the table clean before populating
            DB::table('users')->delete();

            $users = array(
                [
                    'id' => 1,
                    'name' => 'admin',
                    'email' => 'luzma_87@yahoo.com',
                    'password' => '$2y$10$mxz1oy0SXBdSXs8LRWw8pOqqPUTYBhTSaF5ib5YSHkMwglHvR4X1u',
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime
                ],
            );

            // Uncomment the below to run the seeder
            DB::table('users')->insert($users);
        }

    }