<?php

use Illuminate\Database\Seeder;

class CadastroDocenteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\Cadastro\Models\CadastroDocente::class, 5)->create();
    }
}
