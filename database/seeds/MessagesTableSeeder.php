<?php

use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('messages')->insert([
                [
                    'name' => 'Alex',
                    'email' => 'alex@gmail.com',
                    'message' => 'Hello word',
                    'created_at' => date("Y-m-d H:i:s")
                ],
                [
                    'name' => 'max',
                    'email' => 'max@gmail.com',
                    'message' => 'Продам гараж, звоните по телефону 000-222-12-43',
                    'created_at' => date("Y-m-d H:i:s")
                ]
            ]
        );
    }
}
