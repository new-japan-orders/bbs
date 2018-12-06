<?php

use Faker\Generator as Faker;
use App\Entry;

$factory->define(Entry::class, function (Faker $faker) {
    return [
        'thread_id' => $faker->numberBetween($min = 1, $max = 100),
        'name' => $faker->name,
        'content' => $faker->realText(300, 1),
    ];
});
