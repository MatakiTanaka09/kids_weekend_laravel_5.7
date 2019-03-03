<?php

use App\Models\School;
use Faker\Generator as Faker;

$factory->define(School::class, function (Faker $faker) {
    return [
        'uuid'      => $faker->uuid,
        'name'      => $faker->realText($maxNbChars = 10, $indexSize = 2),
        'name_kana' => $faker->realText($maxNbChars = 10, $indexSize = 2),
        'email'     => $faker->unique()->safeEmail,
        'url'       => $faker->url,
        'tel'       => $faker->phoneNumber,
        'zip_code1' => $faker->regexify('[1-9]{3}'),
        'zip_code2' => $faker->regexify('[1-9]{4}'),
        'state'     => '東京都',
        'city'      => $faker->randomElement(['中央区', '渋谷区', '江東区']),
        'address1'  => $faker->randomElement(['月島', '二子玉川', '豊洲']),
        'address2'  => $faker->randomElement(['1-1-1', '2-2-2', '3-3-3']),
        'detail'    => $faker->realText($maxNbChars=100)
    ];
});
