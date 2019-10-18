<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Cadastro\Model;
use Faker\Generator as Faker;

$factory->define(\Cadastro\Models\CadastroCursos::class, function (Faker $faker) {
    static $index = 0;
    return [
        'cur_cur_cd_siga' => strtoupper($faker->randomLetter) . $faker->randomNumber(2, true),
        'cur_cur_fl_tipo' => 0,
        'cur_cur_ds_semestre_ano' => ($index++ < 2) ? '10/2019' : '11/2019',
        'cur_cur_nr_vaga' => $faker->randomNumber(2, true),
        'cur_cur_ds_objetivo' => $faker->text(1500),
        'cur_cur_ds_publico' => $faker->text(1500),
        'cur_cur_ds_tema' => $faker->text(200),
        'cur_cur_vl_sind' => $faker->randomNumber(2),
        'cur_cur_vl_nsind' => $faker->randomNumber(2),
        'cur_cur_ds_conteudo' => $faker->text(1200),
    ];
});
