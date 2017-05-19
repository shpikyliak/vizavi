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
        DB::table('firms')->insert(
            ['name' => 'Sony'],
            ['name' => 'Panasonic'],
            ['name' => 'Samsung']
        );
    }
}
