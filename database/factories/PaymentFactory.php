<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Payment;
use Faker\Generator as Faker;

$factory->define(Payment::class, function (Faker $faker) {
    return [
        'patient_id' => $faker->numberBetween(1,10),
        'doctor_id' => $faker->numberBetween(1,10),
        'sub_total' => $faker->numberBetween(1,1000),
        'total' => $faker->numberBetween(1000,100000),
        'amount_received' => $faker->numberBetween(1000,100000),
        'amount_to_pay' => $faker->numberBetween(1000,100000),
        'doctor_commission' => $faker->numberBetween(1000,100000),
        'taxes' => $faker->numberBetween(1,100),


    ];
});
