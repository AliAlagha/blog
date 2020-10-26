<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Product::class, function (Faker $faker) {
    return [
        'productlineID' => $faker->numberBetween(1,50),
        'name' => $faker->name,
        'scale' => $faker->numberBetween(1,5000),
        'vendor' => $faker->firstNameMale,
        'pdtDescription' => $faker->sentence,
        'qtyInStock' => $faker->numberBetween(1000,9000),
        'buyPrice' => $faker->numberBetween(10,800),
        'msrp'=>$faker->sentence
    ];
});
