<?php

use Illuminate\Database\Seeder;

class PhonesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('phones')->insert([
                ['firm_id' => 1, 'phone' => '332-55-56', 'created_at' => date("Y-m-d H:i:s")],
                ['firm_id' => 1, 'phone' => '332-50-01', 'created_at' => date("Y-m-d H:i:s")],
                ['firm_id' => 2, 'phone' => '256-39-11', 'created_at' => date("Y-m-d H:i:s")]
            ]
        );
    }
}
