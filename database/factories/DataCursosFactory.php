<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Cadastro\Model;
use Faker\Generator as Faker;

$factory->define(\Cadastro\Models\DataCursos::class, function (Faker $faker) {
    return [
        'cur_dt_ds_materiais_sinpro' => $faker->text(1200),
        'cur_dt_ds_materiais_aluno' => $faker->text(800),
        'cur_dt_ds_sala' => $faker->text(100)
    ];
});
