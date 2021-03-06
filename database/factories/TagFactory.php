<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Tag::class, function (Faker $faker) {

    $updated_at = $faker->dateTimeThisMonth();

    $created_at = $faker->dateTimeThisMonth($updated_at);

    return [
        'name' => $faker->name(),
        'created_at' => $created_at,
        'updated_at' => $updated_at,
    ];
});
