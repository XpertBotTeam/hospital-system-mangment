<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Bed;
use Faker\Generator as Faker;

$factory->define(Bed::class, function (Faker $faker) {
    return [
        'department_id' => $faker->numberBetween(1,10),
        'code' => 'Bed'.$faker->numberBetween(1,10),
        'status' => 'available',
        'notes' => $faker->sentence,
    ];
});
