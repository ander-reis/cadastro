<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Cadastro\Model;
use Faker\Generator as Faker;

$factory->define(\Cadastro\Models\FichaConsulta::class, function (Faker $faker) {

    return [
        'jur_fic_nm_login' => $faker->userName,
        'jur_fic_cd_cnpj' => $faker->cnpj,
        'jur_fic_cd_advogado' => $faker->randomNumber(1),
        'jur_fic_fl_honorario' => rand(0, 1),
        'jur_fic_fl_status' => 12,
        'jur_fic_ds_01' => '',
        'jur_fic_ds_02' => '',
        'jur_fic_ds_03' => '',
        'jur_fic_ds_04' => '',
        'jur_fic_ds_05' => '',
        'jur_fic_fl_categoria' => -1,
        'jur_fic_fl_testemunha' => 0,
        'jur_fic_fl_ctps' => 0,
        'jur_fic_fl_fgts' => 0,
        'jur_fic_fl_desemprego' => 0,
        'jur_fic_fl_email' => 1,
        'jur_fic_fl_processo' => 0,
        'jur_fic_nr_pasta' => $faker->randomNumber(3) . '/' . $faker->year('now'),
        'jur_fic_ds_testemunha' => '',
        'jur_fic_vl_causa' => '1000',
        'jur_fic_fl_email_leitura' => 0,
    ];
});
