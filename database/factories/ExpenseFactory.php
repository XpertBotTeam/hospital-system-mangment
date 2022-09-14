<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Expense;
use Faker\Generator as Faker;

$factory->define(Expense::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence,
        'amount' => $faker->randomFloat(null,1,5000),
        'note' => $faker->sentence,

    ];
});
