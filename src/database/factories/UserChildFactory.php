<?php

use App\Models\UserChild;
use Faker\Generator as Faker;

$factory->define(UserChild::class, function (Faker $faker) {
    return [
        //
        'parent_uuid' => $faker->uuid,
        'first_kana'  => $faker->name,
        'last_kana'   => $faker->name,
        'sex'         => $faker->randomElement(['0', '1']),
        'birth_day'   => $faker->dateTimeBetween('-10 years', '-0years')->format('Y-m-d')
    ];
});
