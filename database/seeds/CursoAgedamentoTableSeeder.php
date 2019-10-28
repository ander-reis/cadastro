<?php

use Illuminate\Database\Seeder;

class CursoAgedamentoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $professor = \Cadastro\Models\User::all();
        $cursos = \Cadastro\Models\CadastroCursos::all();

        $agendamento_curso = factory(\Cadastro\Models\CursoAgendamento::class, 10)->make();

        $agendamento_curso->each(function(\Cadastro\Models\CursoAgendamento $model) use($professor, $cursos){
            $id_professor = $professor->random()->Codigo_Professor;
            $id_cursos = $cursos->random()->cur_cur_cd_curso;
            $model->cadastroCursos()->associate($id_cursos);
            $model->cadastroProfessor()->associate($id_professor);
            $model->save();
        });
    }
}
