<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Book::class, function (Faker $faker) {
    return [
        'uuid'             => $faker->uuid,
        'user_parent_uuid' => $faker->uuid,
        'event_uuid'       => $faker->uuid,
        'price'            => 1000
    ];
});
