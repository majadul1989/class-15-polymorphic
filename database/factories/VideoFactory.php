<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Video::class, function (Faker $faker) {

    return [
        'title' => $faker->realText(80),
        'url' => "www.youtube.com/".$faker->unique()->lastName,
    ];

//    return [
//        'commentable_id' => $faker->randomElement(App\Post::pluck('id')->toArray()),
//        'body' => $faker->sentence,
//        'commentable_type' => $faker->randomElement(['App\Post','App\Video']),
//    ];
});