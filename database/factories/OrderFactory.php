<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Order::class, function (Faker $faker) {
    return [
        'customerID' => $faker->numberBetween(1,50),
        'orderDate' => $faker->dateTimeThisYear,
        'requiredDate' => $faker->dateTimeThisYear,
        'shippedDate' => $faker->dateTimeThisYear,
        'status' => $faker->numberBetween(1,10),
        'comments' => $faker->randomLetter
    ];
});
