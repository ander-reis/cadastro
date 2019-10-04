<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\Cadastro\Models\User::class, 1)->create();
        factory(\Cadastro\Models\Materia::class)->create();
    }
}
