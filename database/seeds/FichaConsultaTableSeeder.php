<?php

use Illuminate\Database\Seeder;

class FichaConsultaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\Cadastro\Models\FichaConsulta::class, 10)->create();
    }
}
