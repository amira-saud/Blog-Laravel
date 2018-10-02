<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'title' => substr($faker->sentence(2), 0, -1),
    ];
});
