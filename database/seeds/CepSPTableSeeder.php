<?php

use Illuminate\Database\Seeder;

class CepSPTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\Cadastro\Models\CepSP::class)->create();
    }
}
