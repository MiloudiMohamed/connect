<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Period;
use App\Reservation;
use Faker\Generator as Faker;

$factory->define(Period::class, function (Faker $faker) {
    return [
        'reservation_id' => factory(Reservation::class),
        'name' => 'morning',
    ];
});
