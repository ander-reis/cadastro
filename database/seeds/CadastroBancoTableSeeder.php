<?php

use Illuminate\Database\Seeder;

class CadastroBancoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\Cadastro\Models\CadastroBanco::class)->create([
            'CodBanco' => '237',
            'Banco' => 'Bradesco S.A.',
            'Ativo' => 1
        ]);

        factory(\Cadastro\Models\CadastroBanco::class)->create([
            'CodBanco' => '341',
            'Banco' => 'Itaú S.A.',
            'Ativo' => 1
        ]);

        factory(\Cadastro\Models\CadastroBanco::class)->create([
            'CodBanco' => '001',
            'Banco' => 'Banco do Brasil S.A.',
            'Ativo' => 1
        ]);
    }
}

