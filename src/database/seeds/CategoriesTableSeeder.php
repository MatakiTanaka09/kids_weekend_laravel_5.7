<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            "id"         => "1",
            "name"       => "others",
            "file_name"  => "images/category.png",
            "created_at" => now(),
            "updated_at" => now(),
        ]);

        DB::table('categories')->insert([
            "id"         => "2",
            "name"       => "art",
            "file_name"  => "images/art.png",
            "created_at" => now(),
            "updated_at" => now(),
        ]);

        DB::table('categories')->insert([
            "id"         => "3",
            "name"       => "educational",
            "file_name"  => "images/educational.png",
            "created_at" => now(),
            "updated_at" => now(),
        ]);

        DB::table('categories')->insert([
            "id"         => "4",
            "name"       => "foreign_languages",
            "file_name"  => "images/foreign_languages.png",
            "created_at" => now(),
            "updated_at" => now(),
        ]);

        DB::table('categories')->insert([
            "id"         => "5",
            "name"       => "music",
            "file_name"  => "images/music.png",
            "created_at" => now(),
            "updated_at" => now(),
        ]);

        DB::table('categories')->insert([
            "id"         => "6",
            "name"       => "science",
            "file_name"  => "images/science.png",
            "created_at" => now(),
            "updated_at" => now(),
        ]);

        DB::table('categories')->insert([
            "id"         => "7",
            "name"       => "sport",
            "file_name"  => "images/sport.png",
            "created_at" => now(),
            "updated_at" => now(),
        ]);
    }
}
