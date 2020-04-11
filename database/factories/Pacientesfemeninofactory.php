<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pacientesfemenino;
use Faker\Generator as Faker;

$factory->define(App\Pacientesfemenino::class, function (Faker $faker) {
    return [
      'nombre' => $faker->firstNameFemale,
      'apellido' => $faker->lastName,
      'edad' => $faker->numberBetween($min = 1, $max = 80),
      'telefono' => $faker->randomNumber($nbDigits = NULL, $strict = false),
      'email' => $faker->unique()->safeEmail,
    ];
});
