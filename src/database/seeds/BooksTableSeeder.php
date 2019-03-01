<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'uuid' => '0d5e77b0-3a4a-11e9-8837-4b74282eb869',
            'user_parent_uuid' => '66482970-38c9-11e9-aa82-a93aabbe9be0',
            'event_uuid' => '0d5f0e80-3a4a-11e9-bff4-5d4dcf70a1e0',
            'price' => 2000
        ]);

        Factory(App\Models\Book::class, 15)->create();
    }
}
