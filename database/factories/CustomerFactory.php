<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Customer::class, function (Faker $faker) {
    return [
        'salesRepEmployeeNum' => $faker->numberBetween(1000,9999),
        'name' => $faker->name,
        'lastName' => $faker->lastName,
        'firstName' => $faker->firstName,
        'phone' => $faker->phoneNumber,
        'address1' => $faker->address,
        'address2' => $faker->secondaryAddress,
        'city' => $faker->city,
        'state' => $faker->state,
        'postalCode' => $faker->postcode,
        'country' => $faker->country,
        'creditLimit' => $faker->randomNumber(19)
    ];
});
