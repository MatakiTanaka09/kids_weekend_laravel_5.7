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
            'uuid'            => '0d5e77b0-3a4a-11e9-8837-4b74282eb869',
            'school_uuid'     => 'd3aa5f2b-4dce-3b3d-bff2-2e90865e89c9',
            'child_parent_id' => 16,
            'event_uuid'      => '0d5f0e80-3a4a-11e9-bff4-5d4dcf70a1e0',
            'price'           => 2000,
            'created_at'      => now(),
            'updated_at'      => now(),
        ]);

        Factory(App\Models\Book::class, 15)->create();
    }
}
