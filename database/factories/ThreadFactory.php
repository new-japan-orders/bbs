<?php

use Faker\Generator as Faker;
use App\Thread;

$factory->define(Thread::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'title' => $faker->realText(50, 1),
        'content' => $faker->realText(300, 1),
    ];
});
