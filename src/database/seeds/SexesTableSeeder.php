<?php

use Illuminate\Database\Seeder;

class SexesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sexes')->insert([
            "id" => "0",
            "sex" => "not_known",
            "created_at" => now(),
            "updated_at" => now(),
        ]);

        DB::table('sexes')->insert([
            "id" => "1",
            "sex" => "male",
            "created_at" => now(),
            "updated_at" => now(),
        ]);

        DB::table('sexes')->insert([
            "id" => "2",
            "sex" => "female",
            "created_at" => now(),
            "updated_at" => now(),
        ]);

        DB::table('sexes')->insert([
            "id" => "9",
            "sex" => "not_applicable",
            "created_at" => now(),
            "updated_at" => now(),
        ]);
    }
}
