<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Category::class, function (Faker $faker) {
    $sentence = $faker->sentence();

    $updated_at = $faker->dateTimeThisMonth();

    $created_at = $faker->dateTimeThisMonth($updated_at);

    return [
        'name' => $sentence,
        'description' => $faker->text(),
        'created_at' => $created_at,
        'updated_at' => $updated_at,
    ];
});
