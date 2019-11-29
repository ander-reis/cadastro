<?php

use Illuminate\Database\Seeder;

class CadastroAdvogadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\Cadastro\Models\CadastroAdvogado::class)->create();
    }
}
