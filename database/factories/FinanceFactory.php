<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Finance;
use Faker\Generator as Faker;

$factory->define(Finance::class, function (Faker $faker) {
    return [
        'total_money' => 5000,
    ];
});
