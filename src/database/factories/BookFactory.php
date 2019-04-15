<?php

use App\Models\Book;
use Faker\Generator as Faker;
$autoIncrement = bookIncrement();

$factory->define(Book::class, function (Faker $faker) use ($autoIncrement) {
    $autoIncrement->next();
    return [
        'uuid'        => $faker->uuid,
        'parent_uuid' => $faker->uuid,
        'child_uuid'  => $faker->uuid,
        'school_uuid' => $faker->uuid,
        'event_uuid'  => $faker->uuid,
        'price'       => 1000
    ];
});

function bookIncrement()
{
    for ($i=0; $i<1000; $i++) {
        yield $i;
    }
}
