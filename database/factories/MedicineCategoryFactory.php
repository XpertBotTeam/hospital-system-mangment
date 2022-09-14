<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\MedicineCategory;
use Faker\Generator as Faker;

$factory->define(MedicineCategory::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->sentence,
    ];
});
