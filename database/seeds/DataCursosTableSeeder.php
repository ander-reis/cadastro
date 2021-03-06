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
//        $cursoId = \Cadastro\Models\CadastroCursos::all();
//        $data_curso = factory(\Cadastro\Models\DataCursos::class, 10)->make();

//        $data_curso->each(function(\Cadastro\Models\DataCursos $model) use($cursoId){
//            $id = $cursoId->random()->cur_cur_cd_curso;
//            $model->cadastroCursos()->associate($id)->save();
//        });

        factory(\Cadastro\Models\DataCursos::class)->create(['cur_dt_dt_data' => '2019-11-04 00:00:00.000', 'cur_dt_cd_curso' => 1]);
        factory(\Cadastro\Models\DataCursos::class)->create(['cur_dt_dt_data' => '2019-11-11 00:00:00.000', 'cur_dt_cd_curso' => 1]);
        factory(\Cadastro\Models\DataCursos::class)->create(['cur_dt_dt_data' => '2019-11-18 00:00:00.000', 'cur_dt_cd_curso' => 1]);
        factory(\Cadastro\Models\DataCursos::class)->create(['cur_dt_dt_data' => '2019-12-02 00:00:00.000', 'cur_dt_cd_curso' => 1]);
        factory(\Cadastro\Models\DataCursos::class)->create(['cur_dt_dt_data' => '2019-12-09 00:00:00.000', 'cur_dt_cd_curso' => 1]);
    }
}
