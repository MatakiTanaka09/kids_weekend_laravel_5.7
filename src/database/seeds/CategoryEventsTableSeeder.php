<?php

use App\Models\CategoryEvent;
use Illuminate\Database\Seeder;

class CategoryEventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categoryEvents')->insert([
            'id'          => '1',
            'event_uuid'  => '0d5f0e80-3a4a-11e9-bff4-5d4dcf70a1e0',
            'category_id' => '5',
            "created_at"  => now(),
            "updated_at"  => now()
        ]);

        DB::table('categoryEvents')->insert([
            'id'          => '2',
            'event_uuid'  => '66482970-38c9-11e9-aa82-a93aabbe9be0',
            'category_id' => '1',
            "created_at"  => now(),
            "updated_at"  => now()
        ]);

        DB::table('categoryEvents')->insert([
            'id'          => '3',
            'event_uuid'  => '978ae615-97a5-369c-b898-c808b51e02a0',
            'category_id' => '3',
            "created_at"  => now(),
            "updated_at"  => now()
        ]);

        DB::table('categoryEvents')->insert([
            'id'          => '4',
            'event_uuid'  => 'aa802176-01d8-3463-b557-2593d8a462ce',
            'category_id' => '1',
            "created_at"  => now(),
            "updated_at"  => now()
        ]);

        DB::table('categoryEvents')->insert([
            'id'          => '5',
            'event_uuid'  => 'f9934030-3d73-11e9-8b6b-bb3494e69e8b',
            'category_id' => '4',
            "created_at"  => now(),
            "updated_at"  => now()
        ]);

        DB::table('categoryEvents')->insert([
            'id'          => '6',
            'event_uuid'  => 'f993afb0-3d73-11e9-8077-9b0393124b8c',
            'category_id' => '3',
            "created_at"  => now(),
            "updated_at"  => now()
        ]);

        DB::table('categoryEvents')->insert([
            'id'          => '7',
            'event_uuid'  => 'f9940060-3d73-11e9-a5b5-438c7de4051c',
            'category_id' => '2',
            "created_at"  => now(),
            "updated_at"  => now()
        ]);

        DB::table('categoryEvents')->insert([
            'id'          => '8',
            'event_uuid'  => 'f9944fb0-3d73-11e9-a80b-83caa6bf0826',
            'category_id' => '6',
            "created_at"  => now(),
            "updated_at"  => now()
        ]);

        DB::table('categoryEvents')->insert([
            'id'          => '9',
            'event_uuid'  => 'f994a560-3d73-11e9-b034-d5d317db75d3',
            'category_id' => '7',
            "created_at"  => now(),
            "updated_at"  => now()
        ]);

//        Factory(CategoryEvent::class, 15)->create();
    }
}
