<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Cadastro\Model;
use Faker\Generator as Faker;

$factory->define(\Cadastro\Models\FichaProfessor::class, function (Faker $faker) {
    return [
        'jur_fip_nr_ficha' => $faker->randomNumber(2),
        'jur_fip_cd_professor' => $faker->randomNumber(5),
        'jur_fip_dt_admissao' => $faker->dateTime,
        'jur_fip_dt_demissao' => $faker->dateTime,
        'jur_fip_ds_ctps' => $faker->randomNumber(5),
        'jur_fip_ds_ctps_serie' => $faker->randomNumber(7),
        'jur_fip_ds_funcao' => 'Professora',
        'jur_fip_vl_salario' => $faker->randomNumber(3),
        'jur_fip_fl_pre_escola' => rand(0, 1),
        'jur_fip_fl_aulas_14' => rand(0, 1),
        'jur_fip_nr_aulas_14' => rand(0, 1),
        'jur_fip_fl_aulas_58' => rand(0, 1),
        'jur_fip_nr_aulas_58' => rand(0, 1),
        'jur_fip_fl_aulas_ens_medio' => rand(0, 1),
        'jur_fip_nr_aulas_ens_medio' => rand(0, 1),
        'jur_fip_fl_aulas_ens_superior' => rand(0, 1),
        'jur_fip_nr_aulas_ens_superior' => rand(0, 1),
        'jur_fip_fl_aulas_tecnico' => rand(0, 1),
        'jur_fip_nr_aulas_tecnico' => rand(0, 1),
        'jur_fip_fl_aulas_supletivo' => rand(0, 1),
        'jur_fip_nr_aulas_supletivo' => rand(0, 1),
        'jur_fip_fl_aulas_curso_livre' => rand(0, 1),
        'jur_fip_nr_aulas_curso_livre' => rand(0, 1),
        'jur_fip_fl_receber' => rand(0, 1),
        'jur_fip_nm_inventariante' => '',
        'jur_fip_ds_cpf_inventariante' => '',
        'jur_fip_fl_plurima' => 0,
    ];
});
