<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            "uuid"             => '78f152f0-3bd7-11e9-993f-39f68f8add6e',
            "school_uuid"      => 'e2b06f7a-2b7a-3c9f-8b7d-e75881d738b1',
            'date'             => '2019-10-08',
            'started_at'       => '2019-10-08 10:00:00',
            'ended_at'         => '2019-10-08 18:00:00',
            'capacity_members' => 3,
            'target_min_age'   => 0,
            'target_max_age'   => 8,
            'parent_attendant' => 0,
            'price'            => 1500,
            'canceled_at'      => 14,
            'pub_state'        => 0,
            'arrived_at'       => 15,
            'state'            => '東京都',
            'city'             => '中央区',
            'address1'         => '月島',
            'address2'         => '1-1-1',
            'latitude'         => 30.00,
            'longitude'        => -29.390
        ]);
        Factory(App\Models\Event::class, 15)->create();
    }
}
