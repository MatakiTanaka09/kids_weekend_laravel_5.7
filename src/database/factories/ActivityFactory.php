<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Activity::class, function (Faker $faker) {
    return [
        "uuid"        => $faker->uuid,
        "event_uuid"  => $faker->uuid,
        "school_uuid" => $faker->uuid,
        "pub_state"   => $faker->boolean($chanceOfGettingTrue = 20),
        "name"        => $faker->realText($maxNbChars = 10, $indexSize = 2),
        "detail"      => $faker->realText($maxNbChars = 200, $indexSize = 2),
    ];
});
