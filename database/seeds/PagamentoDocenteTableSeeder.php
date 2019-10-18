<?php

use Illuminate\Database\Seeder;

class PagamentoDocenteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cursoId = \Cadastro\Models\CadastroCursos::all();
        $docenteId = \Cadastro\Models\CadastroDocente::all();

        $pagamentoDocente = factory(\Cadastro\Models\PagamentoDocente::class, 10)->make();

        $pagamentoDocente->each(function(\Cadastro\Models\PagamentoDocente $model) use($cursoId, $docenteId){
            $id_curso = $cursoId->random()->cur_cur_cd_curso;
            $id_docente = $docenteId->random()->cur_doc_cd_docente;
            $model->cadastroCursos()->associate($id_curso);
            $model->cadastroDocente()->associate($id_docente);
            $model->save();
        });
    }
}
