<?php

use Faker\Generator as Faker;

$factory->define(App\Project::class, function (Faker $faker) {
    return [
        'title' => $faker->words(3),
        'description' => $faker->paragraph,
    ];
});
