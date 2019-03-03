<?php

use App\Models\CategoryEvent;
use Faker\Generator as Faker;
$autoIncrement = increment();

$factory->define(CategoryEvent::class, function (Faker $faker) use ($autoIncrement) {
    $autoIncrement->next();

    return [
        "id" => $autoIncrement->current(),
        "event_uuid" => $faker->uuid,
        'category_id' => $faker->randomElement(['1', '2', '3', '4', '5', '6', '7'])
    ];
});

function increment()
{
    for ($i = 0; $i < 1000; $i++) {
        yield $i;
    }
}
