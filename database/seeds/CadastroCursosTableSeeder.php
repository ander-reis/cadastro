<?php

use Illuminate\Database\Seeder;

class CadastroCursosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\Cadastro\Models\CadastroCursos::class, 5)->create();
    }
}
