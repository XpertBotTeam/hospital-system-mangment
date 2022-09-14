<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\DayoffSchedule;
use Faker\Generator as Faker;

$factory->define(DayoffSchedule::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(1,10),
        'date' => $faker->date(),
    ];
});
