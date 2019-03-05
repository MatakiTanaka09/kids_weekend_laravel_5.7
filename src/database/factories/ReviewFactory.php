<?php

use App\Models\Review;
use Faker\Generator as Faker;

$factory->define(Review::class, function (Faker $faker) {
    return [
        "uuid"             => $faker->uuid,
        "review_user_uuid" => $faker->uuid,
        "event_uuid"       => $faker->uuid,
        "comment"          => $faker->realText(200),
        "star_amount"      => $faker->numberBetween(1, 5)
    ];
});
