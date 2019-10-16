<?php

use Illuminate\Database\Seeder;

class CadastroEscolasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\Cadastro\Models\CadastroEscolas::class)->create(['CEP' => '01000-000']);
        factory(\Cadastro\Models\CadastroEscolas::class)->create(['CEP' => '01001-000']);
        factory(\Cadastro\Models\CadastroEscolas::class)->create(['CEP' => '01999-999']);
        factory(\Cadastro\Models\CadastroEscolas::class)->create(['CEP' => '02000-000']);
        factory(\Cadastro\Models\CadastroEscolas::class)->create(['CEP' => '02001-000']);
        factory(\Cadastro\Models\CadastroEscolas::class)->create(['CEP' => '02999-999']);
        factory(\Cadastro\Models\CadastroEscolas::class)->create(['CEP' => '04000-000']);
        factory(\Cadastro\Models\CadastroEscolas::class)->create(['CEP' => '04001-000']);
        factory(\Cadastro\Models\CadastroEscolas::class)->create(['CEP' => '04999-999']);
        factory(\Cadastro\Models\CadastroEscolas::class)->create(['CEP' => '05600-000']);
        factory(\Cadastro\Models\CadastroEscolas::class)->create(['CEP' => '05601-000']);
        factory(\Cadastro\Models\CadastroEscolas::class)->create(['CEP' => '05999-999']);
    }
}
