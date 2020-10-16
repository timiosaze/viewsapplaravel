<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\View;
use Faker\Generator as Faker;

$factory->define(View::class, function (Faker $faker) {
    return [
        //
        'title' => $faker->sentence($nbWords = 4, $variableNbWords = true),
        'body' => $faker->realText($maxNbChars = 250, $indexSize = 2),
    ];
});
