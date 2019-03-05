<?php

use App\Models\Event;
use Faker\Generator as Faker;

// Not working.
$array = [
    "aa802176-01d8-3463-b557-2593d8a462ce",
    "978ae615-97a5-369c-b898-c808b51e02a0",
    "b2c8aa65-0bd3-339e-921b-e0fe59703214",
    "c7404da3-34ae-34f8-88eb-9675a1956ee1",
    "7c979ff6-999d-3780-bc36-3081264fea65",
    "d5693474-2449-3205-991e-3cd9f7942f7f",
    "2de6c648-be0a-3cc3-856a-dbe52af8a0da",
    "abbb50b4-cb89-39ed-a16b-75b6acd70eb0",
    "f556a1d3-2948-3610-9f9f-f83fd3bcc77c",
    "37a1cbc8-782f-3f32-b6e1-0ae7c2c3b657",
    "cac90fab-841f-3125-a12e-3251f2d7dc43",
    "4253c438-14c1-3f07-a919-dcb5c407db6e",
    "73e01b89-a3d8-3747-812d-dba0a5e6b0f3",
    "d63ff05c-75b7-3b34-8ae8-473a29e9ffa6",
    "eb922d27-1dd1-3141-8345-e8a14c750af0"
];

$autoUuid = uuidMaker($array);

$factory->define(Event::class, function (Faker $faker) use ($autoUuid) {
    $autoUuid->next();
    return [
        'uuid'              => $autoUuid->current(),
        'time'              => '10:00:00',
        'started_at'        => '2019-10-08 10:00:00',
        'ended_at'          => '2019-10-08 18:00:00',
        'capacity_members'  => $faker->numberBetween(3, 15),
        'target_min_age'    => $faker->numberBetween(0, 5),
        'target_max_age'    => $faker->numberBetween(6, 10),
        'parent_attendant'  => $faker->boolean($chanceOfGettingTrue = 20),
        'price'             => $faker->numberBetween(2000, 5500),
        'canceled_at'       => $faker->numberBetween(1, 14),
        'pub_state'         => $faker->boolean($chanceOfGettingTrue = 20),
        'arrived_at'        => $faker->numberBetween(5, 15),
        'state'             => '東京都',
        'city'              => $faker->randomElement(['中央区', '渋谷区', '江東区']),
        'address1'          => $faker->randomElement(['月島', '二子玉川', '豊洲']),
        'address2'          => $faker->randomElement(['1-1-1', '2-2-2', '3-3-3']),
        'latitude'          => $faker->latitude,
        'longitude'         => $faker->longitude
    ];
});

function uuidMaker($array)
{
    for ($i=0; $i < count($array); $i++) {
        yield $array[$i];
    }
}
