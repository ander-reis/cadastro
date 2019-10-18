<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Cadastro\Model;
use Faker\Generator as Faker;

$factory->define(\Cadastro\Models\CadastroDocente::class, function (Faker $faker) {
    static $index = 1;
    return [
        'cur_doc_cd_docente' => $index++,
        'cur_doc_nm_nome' => $faker->name,
        'cur_doc_dt_data_nasc' => $faker->dateTimeThisCentury->format('Y-m-d'),
        'cur_doc_dt_data_inicio' => $faker->date('Y-m-d'),
        'cur_doc_fl_tipo' => rand(0, 1),
        'cur_doc_ds_cpf' => $faker->cpf,
        'cur_doc_ds_rg' => $faker->rg,
        'cur_doc_ds_qualificacao' => $faker->text,
    ];
});
