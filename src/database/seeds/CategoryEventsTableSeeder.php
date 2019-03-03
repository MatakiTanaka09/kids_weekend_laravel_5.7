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
            'id'          => '16',
            'event_uuid'  => '66482970-38c9-11e9-aa82-a93aabbe9be0',
            'category_id' => '5',
            "created_at"  => now(),
            "updated_at"  => now()
        ]);

        DB::table('categoryEvents')->insert([
            'id'          => '17',
            'event_uuid'  => 'aa802176-01d8-3463-b557-2593d8a462ce',
            'category_id' => '1',
            "created_at"  => now(),
            "updated_at"  => now()
        ]);

        DB::table('categoryEvents')->insert([
            'id'          => '18',
            'event_uuid'  => '978ae615-97a5-369c-b898-c808b51e02a0',
            'category_id' => '3',
            "created_at"  => now(),
            "updated_at"  => now()
        ]);

        Factory(CategoryEvent::class, 15)->create();
    }
}
