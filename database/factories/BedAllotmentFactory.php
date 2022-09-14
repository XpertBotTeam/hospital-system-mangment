<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\BedAllotment;
use Faker\Generator as Faker;

$factory->define(BedAllotment::class, function (Faker $faker) {
    return [
        'bed_id'=> $faker->numberBetween(1,10),
        'patient_id'=> $faker->numberBetween(1,10),
        'start_date'=> $faker->date(),
        'end_date'=> $faker->date(),
        'start_time'=> $faker->time(),
        'end_time'=> $faker->time(),
        'status'=> 'Up Coming Allotment',
    ];
});
