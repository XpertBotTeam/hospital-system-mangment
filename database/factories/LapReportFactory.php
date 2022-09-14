<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\LapReport;
use Faker\Generator as Faker;

$factory->define(LapReport::class, function (Faker $faker) {
    return [
        'date' => $faker->date(),
        'time' => $faker->time(),
        'patient_id' => $faker->numberBetween(1,10),
        'doctor_id' => $faker->numberBetween(1,10),
        'template_id' => $faker->numberBetween(1,10),
        'report' => $faker->text,
    ];
});
