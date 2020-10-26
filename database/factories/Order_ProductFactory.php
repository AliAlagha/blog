<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Order_Product::class, function (Faker $faker) {
    return [
        'orderID' => $faker->unique()->numberBetween(1,50),
        'productCode' => $faker->unique()->numberBetween(1,50),
        'qty' => $faker->numberBetween(50,6000),
        'priceEach' => $faker->randomNumber(19),
    ];
});
