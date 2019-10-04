<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Cadastro\Model;
use Faker\Generator as Faker;

$factory->define(\Cadastro\Models\CepSP::class, function (Faker $faker) {
    return [
        'Tipo' => 'R',
        'Logradouro' => 'TESTE RUA',
        'Complemento' => '',
        'Bairro' => 'BAIRRO TESTE',
        'Cidade' => 'SÃO PAULO',
        'UF' => 'SP',
        'Cep' => '03363-060'
    ];
});
