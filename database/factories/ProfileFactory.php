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

$factory->define(App\Profile::class, function (Faker $faker) {

    return [
        'bio' => $faker->realText(500),
        'facebook' => "www.facebook.com/".$faker->unique()->firstName,
        'github' => "www.github.com/".$faker->unique()->lastName,
        'web' =>  $faker->url
    ];
});
