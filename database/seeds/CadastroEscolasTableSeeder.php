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
        factory(\Cadastro\Models\CadastroEscolas::class)->create();
    }
}
