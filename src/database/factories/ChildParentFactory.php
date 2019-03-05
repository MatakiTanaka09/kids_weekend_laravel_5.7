<?php

use App\Models\ChildParent;
use Faker\Generator as Faker;
$autoIncrement = incrementChildParent();

$factory->define(ChildParent::class, function (Faker $faker) use ($autoIncrement) {
    $autoIncrement->next();
    return [
        "id"          => $autoIncrement->current(),
        "parent_uuid" => $faker->uuid,
        "child_uuid"  => $faker->uuid,
    ];
});

function incrementChildParent() {
    for ($i = 0;$i < 1000; $i++) {
        yield $i;
    }
}
