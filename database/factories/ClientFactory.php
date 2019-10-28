<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Client;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;

$factory->define(Client::class, function (Faker $faker) {
	$email = $faker->email;
    return [
        'name' => $faker->name,
        'age' => $faker->randomDigit,
        'gender' => Arr::random(['male', 'female']),
        'role' => $faker->word,
        'experience' => Arr::random([1, 2, 3]),
        'education' => $faker->word,
        'phone' => 0666554433,
        'email' => $email,
    ];
});
