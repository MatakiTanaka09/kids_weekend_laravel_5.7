<?php

use App\Models\Event;
use Faker\Generator as Faker;

$factory->define(Event::class, function (Faker $faker) {
    return [
        'school_uuid'      => $faker->uuid,
        'date'             => '2019-10-08',
        'started_at'       => '2019-10-08 10:00:00',
        'ended_at'         => '2019-10-08 18:00:00',
        'capacity_members' => $faker->numberBetween(3, 15),
        'target_min_age'   => $faker->numberBetween(0, 5),
        'target_max_age'   => $faker->numberBetween(6, 10),
        'parent_attendant' => $faker->boolean($chanceOfGettingTrue = 20),
        'price'            => $faker->numberBetween(500, 1500),
        'canceled_at'      => $faker->numberBetween(1, 14),
        'pub_state'        => $faker->boolean($chanceOfGettingTrue = 20),
        'arrived_at'       => $faker->numberBetween(5, 15),
        'state'            => '東京都',
        'city'             => $faker->randomElement(['中央区', '渋谷区', '江東区']),
        'address1'         => $faker->randomElement(['月島', '二子玉川', '豊洲']),
        'address2'         => $faker->randomElement(['1-1-1', '2-2-2', '3-3-3']),
        'latitude'         => $faker->latitude,
        'longitude'        => $faker->longitude
    ];
});
