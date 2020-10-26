<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Payment::class, function (Faker $faker) {
    return [
        'checkNum' => $faker->bankAccountNumber,
        'customerID' => $faker->numberBetween(1,50),
        'paymentDate' => $faker->dateTimeThisYear,
        'amount' => $faker->randomNumber(19)
    ];
});
