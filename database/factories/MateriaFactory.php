<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Cadastro\Model;
use Faker\Generator as Faker;

$factory->define(\Cadastro\Models\Materia::class, function (Faker $faker) {
    return [
        'Materia' => 'ADMINISTRAÇÃO',
    ];
});
