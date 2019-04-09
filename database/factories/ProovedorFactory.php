<?php

use Faker\Generator as Faker;

$factory->define(App\Proovedor::class, function (Faker $faker) {
    return [
        //
        'nombre' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'codigo' => $faker->unique()->numberBetween($min = 1, $max = 1000)
    ];
});
