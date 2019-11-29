<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Cadastro\Model;
use Faker\Generator as Faker;

$factory->define(\Cadastro\Models\CadastroAdvogado::class, function (Faker $faker) {
    return [
        'jur_adv_nm_advogado' => $faker->randomNumber(5),
        'jur_adv_fl_sexo' => rand(0, 1),
        'jur_adv_ds_cpf' => $faker->cpf,
        'jur_adv_ds_rg' => $faker->rg,
        'jur_adv_fl_civil' => rand(0, 1),
        'jur_adv_nr_oab' => $faker->randomNumber(5),
        'jur_adv_ds_uf_oab' => $faker->regionAbbr,
        'jur_adv_ds_cep' => $faker->randomNumber(5) . '-' . $faker->randomNumber(3),
        'jur_adv_ds_endereco' => $faker->streetAddress,
        'jur_adv_ds_numero' => $faker->randomNumber(2),
        'jur_adv_ds_complemento' => $faker->text(random_int(0, 50)),
        'jur_adv_ds_bairro' => $faker->text(59),
        'jur_adv_ds_cidade' => $faker->city(21),
        'jur_adv_ds_uf' => $faker->stateAbbr,
        'jur_adv_nr_ddd_fone_residencial' => $faker->areaCode,
        'jur_adv_nr_fone_residencial' => $faker->landline,
        'jur_adv_nr_ddd_celular' => $faker->areaCode,
        'jur_adv_nr_celular' => $faker->cellphone,
        'jur_adv_ds_email' => $faker->email,
        'jur_adv_fl_ativo' => 1,
        'jur_adv_fl_sinpro' => 1,
        'jur_adv_fl_cargo' => 1,
        'jur_adv_fl_procuracao' => 0,
        'jur_adv_fl_atendimento' => 0,
        'jur_adv_fl_doe' => 1,
    ];
});
