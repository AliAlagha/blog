<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Productline::class, function (Faker $faker) {
    return [
        'descInText' => $faker->sentence,
        'descInHtml' => $faker->randomHtml(),
        'image' => $faker->imageUrl(),
    ];
});
