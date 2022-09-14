<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Appointment;
use Faker\Generator as Faker;
use \Illuminate\Support\Arr;

$factory->define(Appointment::class, function (Faker $faker) {
    $array = ['confirmed','pending'];

    return [
        'patient_id' => $faker->numberBetween(1,10),
        'doctor_id' => $faker->numberBetween(1,10),
        'department_id' => $faker->numberBetween(1,10),
        'date' => $faker->dateTimeBetween('-1 years','+1 years'),
        'time' => $faker->time(),
        'status' => Arr::random($array),
        'notes' => $faker->sentence,
    ];
});
