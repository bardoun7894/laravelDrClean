<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\service;
use Faker\Generator as Faker;

$factory->define(service::class, function (Faker $faker) {
     return [
     'service_type'=>$faker->numberBetween(0,13),
     'clothes_id'=>$faker->numberBetween(0,13)
    ];
});
