<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Employee::class, function (Faker $faker) {
    return [
        'officeCode' => $faker->numberBetween(1,50),
        'reportsTo' => $faker->numberBetween(1000,9999),
        'lastName' => $faker->lastName,
        'firstName' => $faker->firstName,
        'extension' => $faker->randomLetter,
        'email' => $faker->email,
        'jobTitle' => $faker->jobTitle
    ];
});
