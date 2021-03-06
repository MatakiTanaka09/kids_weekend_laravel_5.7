<?php

use App\Models\UserChild;
use Faker\Generator as Faker;

$factory->define(UserChild::class, function (Faker $faker) {
    return [
        //
        'last_name'        => $faker->lastName,
        'first_name'       => $faker->firstName,
        'last_kana'        => $faker->lastName,
        'first_kana'       => $faker->firstName,
        'sex'              => $faker->randomElement(['0', '1']),
        'birth_day'        => $faker->dateTimeBetween('-10 years', '-0years')->format('Y-m-d')
    ];
});
