
<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Reservation;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;

$factory->define(Reservation::class, function (Faker $faker) {
	$email = $faker->email;
    return [
        'name' => $faker->name,
        'age' => $faker->randomDigit,
        'gender' => Arr::random(['male', 'female']),
        'role' => $faker->word,
        'experience' => Arr::random([1, 2, 3]),
        'education' => $faker->word,
        'phone' => 1234567890,
        'email' => $email,
        'email_confirmation' => $email,
        'period' => Arr::random(['morning', 'evening']),
    ];
});
