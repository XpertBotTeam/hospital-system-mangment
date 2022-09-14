<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\TimeSchedule;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;

$factory->define(TimeSchedule::class, function (Faker $faker) {
    $array = ['sunday','monday','tuesday','wednesday','thursday','friday','saturday'];
    $array1 = [5,10,15,20,30,45,60];
    $array2 = [0,1,2,3,4,5,6];
    $v = Arr::random($array2);
    return [
        'week_day' => $array[$v],
        'week_num' => $v,
        'start_time' => date('H:i:s', rand(1,54000)),
        'end_time' => date('H:i:s', rand(54000,86400)),
        'duration' => Arr::random($array1),
        'user_id' => $faker->numberBetween(1,10),
    ];
});
