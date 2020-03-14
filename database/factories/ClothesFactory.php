<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Clothes;
use Faker\Generator as Faker;

$factory->define(Clothes::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'image_id'=>$faker->numberBetween(0,20),
        'user_id'=>$faker->numberBetween(0,20),
        'service_id'=>$faker->numberBetween(0,20),
        'price'=>$faker->randomFloat(20,100),
        'quantity'=>$faker->numberBetween(1,500),
        'total'=>$faker->randomFloat(1,500)
    ];
});
