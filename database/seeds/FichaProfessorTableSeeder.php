<?php

use Illuminate\Database\Seeder;

class FichaProfessorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\Cadastro\Models\FichaProfessor::class, 5)->create();
    }
}
