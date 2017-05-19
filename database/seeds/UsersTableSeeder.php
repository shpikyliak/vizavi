<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
                [
                    'name' => 'admin',
                    'email' => 'admin',
                    'password' => Hash::make('admin'),
                    'created_at' => date("Y-m-d H:i:s")
                ],

            ]
        );
    }
}
