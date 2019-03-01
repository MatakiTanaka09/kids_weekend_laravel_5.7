<?php

use Faker\Generator as Faker;
$autoIncrement = autoIncrement();

$factory->define(App\Models\UserParent::class, function (Faker $faker) use ($autoIncrement){
    $autoIncrement->next();

    return [
        'user_id'    => $autoIncrement->current(),
        'last_name'  => $faker->lastName,
        'first_name' => $faker->firstName,
        'last_kana'  => $faker->lastName,
        'first_kana' => $faker->firstName,
        'tel'        => $faker->phoneNumber,
        'sex'        => $faker->randomElement(['0', '1', '2', '9']),
        'zip_code1'  => $faker->regexify('[1-9]{3}'),
        'zip_code2'  => $faker->regexify('[1-9]{4}'),
        'state'      => '東京都',
        'city'       => $faker->randomElement(['中央区', '渋谷区', '江東区']),
        'address1'   => $faker->randomElement(['月島', '二子玉川', '豊洲']),
        'address2'   => $faker->randomElement(['1-1-1', '2-2-2', '3-3-3']),
    ];
});

function autoIncrement()
{
    for($i=0; $i < 1000; $i++) {
        yield $i;
    }
}
