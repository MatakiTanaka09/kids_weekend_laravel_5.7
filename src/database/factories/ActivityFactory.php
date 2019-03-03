<?php

use App\Models\Activity;
use Faker\Generator as Faker;

$factory->define(Activity::class, function (Faker $faker) {
    return [
        "uuid"        => $faker->uuid,
        "pub_state"   => $faker->boolean($chanceOfGettingTrue = 20),
        "name"        => $faker->realText($maxNbChars = 10, $indexSize = 2),
        "detail"      => $faker->realText($maxNbChars = 200, $indexSize = 2),
    ];
});
