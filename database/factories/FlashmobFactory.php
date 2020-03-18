<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Flashmob;
use Faker\Generator as Faker;

$factory->define(Flashmob::class, function (Faker $faker) {
    return [
        'name'       => $faker->name,
        'country'      => $faker->country,
        'city' => $faker->city,
        'street' => $faker->streetName,
        'house' => $faker->streetAddress,
        'apartment' => $faker->numberBetween(4,129),
        'needs' => $faker->text(1000)
    ];
});
