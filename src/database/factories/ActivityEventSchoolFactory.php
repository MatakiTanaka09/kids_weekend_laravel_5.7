<?php

use App\Models\ActivityEventSchool;
use Faker\Generator as Faker;
$autoIncrement = incrementActivityEventSchool();

$factory->define(ActivityEventSchool::class, function (Faker $faker) use ($autoIncrement) {
    $autoIncrement->next();
    return [
        "id" => $autoIncrement->current(),
        "school_uuid" => $faker->uuid,
        "event_uuid" => $faker->uuid,
        "activity_uuid" => $faker->uuid,
    ];
});

function incrementActivityEventSchool() {
    for ($i = 0; $i < 1000; $i++) {
        yield $i;
    }
}
