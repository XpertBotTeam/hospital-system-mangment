<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Document;
use Faker\Generator as Faker;

$factory->define(Document::class, function (Faker $faker) {
    return [
        'patient_id' => $faker->numberBetween(1,10),
        'doctor_id' => $faker->numberBetween(1,10),
        'date' => $faker->date(),
        'description' => $faker->sentence,
        'doc' => 'patients_documents/T34J3Irn2u0xNKbt5HSe1vYaYnbOBS84gpT9IBIt.txt',
    ];
});
