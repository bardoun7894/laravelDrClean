<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Image;
use Faker\Generator as Faker;

$factory->define(Image::class, function (Faker $faker) {
     return [   'clothes_id'=>$faker->numberBetween(0,20),
                'url'=>$faker->imageUrl];
    
});
