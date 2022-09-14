<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Medicine;
use Faker\Generator as Faker;

$factory->define(Medicine::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'instruction' => $faker->sentence,
        'category_id' => $faker->numberBetween(1,10),
        'purchase_price' => $faker->randomFloat(null,1,5000),
        'sale_price' => $faker->randomFloat(null,1,5000),
        'quantity' => $faker->numberBetween(1,1000),
        'company' => $faker->company,
        'expire_date' => $faker->date(),
    ];
});
