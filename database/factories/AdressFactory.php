<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Adress;
use Faker\Generator as Faker;

$factory->define(Adress::class, function (Faker $faker) {
    return [
        'user_id'=>$faker->numberBetween(0,20),
        'street_name'=>$faker->streetname,
        'street_number'=>$faker->numberBetween(0,20),
        'city'=>$faker->city,
        'state'=>$faker->state,
        'post_code'=>$faker->postcode
    ];
});
