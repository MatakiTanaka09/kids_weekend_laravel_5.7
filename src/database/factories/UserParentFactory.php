<?php

use App\Models\UserParent;
use Faker\Generator as Faker;
$autoIncrement = autoIncrement();

$factory->define(UserParent::class, function (Faker $faker) use ($autoIncrement) {
    $autoIncrement->next();

    return [
        'user_id'   => $autoIncrement->current(),
        'full_name' => $faker->name,
        'full_kana' => $faker->name,
        'tel'       => $faker->phoneNumber,
        'sex'       => $faker->randomElement(['0', '1', '2', '9']),
        'zip_code' => $faker->postcode,
        'address'   => $faker->address,
    ];
});

function autoIncrement()
{
    for($i=0; $i < 1000; $i++) {
        yield $i;
    }
}
