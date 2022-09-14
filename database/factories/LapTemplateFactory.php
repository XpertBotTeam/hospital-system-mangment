<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\LapTemplate;
use Faker\Generator as Faker;

$factory->define(LapTemplate::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'template' => $faker->text,
    ];
});
