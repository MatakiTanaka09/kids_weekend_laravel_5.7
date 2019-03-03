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
            [
                "uuid"             => '66482970-38c9-11e9-aa82-a93aabbe9be0',
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
                'longitude'        => -29.390,
                'created_at'       => '2018-02-01 19:00:00',
                'updated_at'       => '2018-02-01 19:00:00'
            ],
            [
                "uuid"             => 'aa802176-01d8-3463-b557-2593d8a462ce',
                'date'             => '2019-10-08',
                'started_at'       => '2019-10-08 10:00:00',
                'ended_at'         => '2019-10-08 18:00:00',
                'capacity_members' => 10,
                'target_min_age'   => 4,
                'target_max_age'   => 9,
                'parent_attendant' => 0,
                'price'            => 2500,
                'canceled_at'      => 10,
                'pub_state'        => 0,
                'arrived_at'       => 10,
                'state'            => '東京都',
                'city'             => '中央区',
                'address1'         => '月島',
                'address2'         => '1-1-1',
                'latitude'         => 30.00,
                'longitude'        => -29.390,
                'created_at'       => '2018-02-01 19:00:00',
                'updated_at'       => '2018-02-01 19:00:00'
            ],
            [
                "uuid"             => '978ae615-97a5-369c-b898-c808b51e02a0',
                'date'             => '2019-10-08',
                'started_at'       => '2019-10-08 10:00:00',
                'ended_at'         => '2019-10-08 18:00:00',
                'capacity_members' => 5,
                'target_min_age'   => 5,
                'target_max_age'   => '',
                'parent_attendant' => 1,
                'price'            => 2000,
                'canceled_at'      => 10,
                'pub_state'        => 0,
                'arrived_at'       => 10,
                'state'            => '東京都',
                'city'             => '中央区',
                'address1'         => '月島',
                'address2'         => '1-1-1',
                'latitude'         => 30.00,
                'longitude'        => -29.390,
                'created_at'       => '2018-02-01 19:00:00',
                'updated_at'       => '2018-02-01 19:00:00'
            ],
            [
                "uuid"             => 'f9934030-3d73-11e9-8b6b-bb3494e69e8b',
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
                'longitude'        => -29.390,
                'created_at'       => '2018-02-01 19:00:00',
                'updated_at'       => '2018-02-01 19:00:00'
            ],
            [
                "uuid"             => 'f993afb0-3d73-11e9-8077-9b0393124b8c',
                'date'             => '2019-10-08',
                'started_at'       => '2019-10-08 10:00:00',
                'ended_at'         => '2019-10-08 18:00:00',
                'capacity_members' => 10,
                'target_min_age'   => 4,
                'target_max_age'   => 9,
                'parent_attendant' => 0,
                'price'            => 2500,
                'canceled_at'      => 10,
                'pub_state'        => 0,
                'arrived_at'       => 10,
                'state'            => '東京都',
                'city'             => '中央区',
                'address1'         => '月島',
                'address2'         => '1-1-1',
                'latitude'         => 30.00,
                'longitude'        => -29.390,
                'created_at'       => '2018-02-01 19:00:00',
                'updated_at'       => '2018-02-01 19:00:00'
            ],
            [
                "uuid"             => 'f9940060-3d73-11e9-a5b5-438c7de4051c',
                'date'             => '2019-10-08',
                'started_at'       => '2019-10-08 10:00:00',
                'ended_at'         => '2019-10-08 18:00:00',
                'capacity_members' => 5,
                'target_min_age'   => 5,
                'target_max_age'   => '',
                'parent_attendant' => 1,
                'price'            => 2000,
                'canceled_at'      => 10,
                'pub_state'        => 0,
                'arrived_at'       => 10,
                'state'            => '東京都',
                'city'             => '中央区',
                'address1'         => '月島',
                'address2'         => '1-1-1',
                'latitude'         => 30.00,
                'longitude'        => -29.390,
                'created_at'       => '2018-02-01 19:00:00',
                'updated_at'       => '2018-02-01 19:00:00'
            ],
            [
                "uuid"             => 'f9944fb0-3d73-11e9-a80b-83caa6bf0826',
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
                'longitude'        => -29.390,
                'created_at'       => '2018-02-01 19:00:00',
                'updated_at'       => '2018-02-01 19:00:00'
            ],
            [
                "uuid"             => 'f994a560-3d73-11e9-b034-d5d317db75d3',
                'date'             => '2019-10-08',
                'started_at'       => '2019-10-08 10:00:00',
                'ended_at'         => '2019-10-08 18:00:00',
                'capacity_members' => 10,
                'target_min_age'   => 4,
                'target_max_age'   => 9,
                'parent_attendant' => 0,
                'price'            => 2500,
                'canceled_at'      => 10,
                'pub_state'        => 0,
                'arrived_at'       => 10,
                'state'            => '東京都',
                'city'             => '中央区',
                'address1'         => '月島',
                'address2'         => '1-1-1',
                'latitude'         => 30.00,
                'longitude'        => -29.390,
                'created_at'       => '2018-02-01 19:00:00',
                'updated_at'       => '2018-02-01 19:00:00'
            ],
            [
                "uuid"             => '0d5f0e80-3a4a-11e9-bff4-5d4dcf70a1e0',
                'date'             => '2019-10-08',
                'started_at'       => '2019-10-08 10:00:00',
                'ended_at'         => '2019-10-08 18:00:00',
                'capacity_members' => 5,
                'target_min_age'   => 5,
                'target_max_age'   => '',
                'parent_attendant' => 1,
                'price'            => 2000,
                'canceled_at'      => 10,
                'pub_state'        => 0,
                'arrived_at'       => 10,
                'state'            => '東京都',
                'city'             => '中央区',
                'address1'         => '月島',
                'address2'         => '1-1-1',
                'latitude'         => 30.00,
                'longitude'        => -29.390,
                'created_at'       => '2018-02-01 19:00:00',
                'updated_at'       => '2018-02-01 19:00:00'
            ],
        ]);

//        Factory(App\Models\Event::class, 5)->create();
    }
}
