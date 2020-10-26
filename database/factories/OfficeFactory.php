<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Office::class, function (Faker $faker) {
    return [
        'code' => $faker->unique()->numberBetween(1,50),
        'city' => $faker->city,
        'phone' => $faker->phoneNumber,
        'address1' => $faker->address,
        'address2' => $faker->secondaryAddress,
        'state' => $faker->state,
        'country' => $faker->country,
        'postalCode' => $faker->randomNumber(6),
        'territory' => $faker->streetAddress
    ];
});
