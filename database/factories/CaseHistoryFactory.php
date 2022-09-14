<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CaseHistory;
use Faker\Generator as Faker;

$factory->define(CaseHistory::class, function (Faker $faker) {
    return [
        'patient_id' => $faker->numberBetween(1,10),
        'date' => $faker->date(),
        'title' => $faker->sentence,
        'food_allergies' => $faker->sentence,
        'bleed_tendency' => $faker->sentence,
        'heart_disease' => $faker->sentence,
        'diabetic' => $faker->sentence,
        'surgery' => $faker->sentence,
        'accident' => $faker->sentence,
        'family_medical_history' => $faker->sentence,
        'current_medication' => $faker->sentence,
        'female_pregnancy' => $faker->sentence,
        'breast_feeding' => $faker->sentence,
        'health_insurance' => $faker->sentence,
        'low_income' => $faker->sentence,
        'reference' => $faker->sentence,
        'others' => $faker->sentence,
        'status' => 'active',
        'blood_pressure' => $faker->numberBetween(80,200).'/'.$faker->numberBetween(80,200),
    ];
});
