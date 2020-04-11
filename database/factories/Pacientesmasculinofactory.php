<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pacientesmasculino;
use Faker\Generator as Faker;

$factory->define(App\Pacientesmasculino::class, function (Faker $faker) {
    return [
      'nombre' => $faker->firstNameMale,
      'apellido' => $faker->lastName,
      'edad' => $faker->numberBetween($min = 1, $max = 80),
      'telefono' => $faker->randomNumber($nbDigits = NULL, $strict = false),
      'email' => $faker->unique()->safeEmail,
    ];
});
