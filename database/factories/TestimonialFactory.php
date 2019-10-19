<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Testimonial;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(App\Models\Testimonial::class, function (Faker $faker) {
    return [
        "name" => $faker->name,
        "designation" =>  "Web Developer",
        "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis",
    ];
});
