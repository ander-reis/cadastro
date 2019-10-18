<?php

use Illuminate\Database\Seeder;

class DataCursosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cursoId = \Cadastro\Models\CadastroCursos::all();
        $data_curso = factory(\Cadastro\Models\DataCursos::class, 10)->make();

        $data_curso->each(function(\Cadastro\Models\DataCursos $model) use($cursoId){
            $id = $cursoId->random()->cur_cur_cd_curso;
            $model->cadastroCursos()->associate($id)->save();
        });
    }
}
