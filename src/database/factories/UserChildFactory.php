<?php

use Faker\Generator as Faker;

$factory->define(App\Models\UserChild::class, function (Faker $faker) {
    return [
        //
        'user_parent_uuid' => $faker->uuid,
        'last_name'        => $faker->lastName,
        'first_name'       => $faker->firstName,
        'last_kana'        => $faker->lastName,
        'first_kana'       => $faker->firstName,
        'sex'              => $faker->randomElement(['0', '1']),
        'birth_day'        => $faker->dateTimeBetween('-10 years', '-0years')->format('Y-m-d')
    ];
});
