<?php

use Illuminate\Database\Seeder;

class FirmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('firms')->insert([
                ['name' => 'Sony', 'created_at' => date("Y-m-d H:i:s")],
                ['name' => 'Panasonic', 'created_at' => date("Y-m-d H:i:s")],
                ['name' => 'Samsung', 'created_at' => date("Y-m-d H:i:s")]
            ]
        );
    }
}
