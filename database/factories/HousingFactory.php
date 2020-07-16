<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Models\Housing::class, function (Faker $faker) {
    return [
        'title' => $faker->word(15),
        'address' => $faker->address,
        'price' => $faker->randomNumber(2),
        'capacity' => $faker->randomNumber(1),
        'superficie' => $faker->word(6),
        'images' => $faker->imageUrl(),
        'rating' => $faker->biasedNumberBetween(0, 5),
        'latitude' => $faker->latitude(),
        'longitude' => $faker->longitude(),
        'phone' => $faker->phoneNumber(),
        'user_id' => 1,
    ];
});
