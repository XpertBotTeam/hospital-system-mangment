<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\PaymentItem;
use Faker\Generator as Faker;

$factory->define(PaymentItem::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'code' => 'P-'.$faker->numberBetween(1,10),
        'type' => 'Other',
        'price' => $faker->randomFloat(null,1,5000),
        'commission' => $faker->numberBetween(10,100).'%',
        'quantity' => $faker->numberBetween(100,1000),
    ];
});
