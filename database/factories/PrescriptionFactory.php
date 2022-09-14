<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Prescription;
use Faker\Generator as Faker;

$factory->define(Prescription::class, function (Faker $faker) {

    return [
        'patient_id' => $faker->numberBetween(1,10),
        'doctor_id' => $faker->numberBetween(1,10),
        'blood_pressure' => $faker->numberBetween(80,200).'/'.$faker->numberBetween(80,200),
        'diabetes' => $faker->sentence,
        'symptoms' => $faker->sentence,
        'diagnosis' => $faker->sentence,
        'advice' => $faker->sentence,
        'date' => $faker->date(),
    ];
});
