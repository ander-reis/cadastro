<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Cadastro\Model;
use Faker\Generator as Faker;

$factory->define(\Cadastro\Models\CursoAgendamento::class, function (Faker $faker) {
    return [
        'cur_agt_fl_situacao' => rand(0, 1),
        'cur_agt_ds_observacao' => $faker->text(100),
        'cur_agt_ds_cadastrado_por' => $faker->text(30),
    ];
});
