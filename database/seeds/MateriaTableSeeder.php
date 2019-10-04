<?php

use Illuminate\Database\Seeder;

class MateriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\Cadastro\Models\Materia::class)->create(['Materia' => 'ALFABETIZAÇÃO']);
        factory(\Cadastro\Models\Materia::class)->create(['Materia' => 'ANTROPOLOGIA']);
        factory(\Cadastro\Models\Materia::class)->create(['Materia' => 'ARQUITETURA']);
        factory(\Cadastro\Models\Materia::class)->create(['Materia' => 'BIOLOGIA']);
        factory(\Cadastro\Models\Materia::class)->create(['Materia' => 'BIBLIOTECONOMIA']);
        factory(\Cadastro\Models\Materia::class)->create(['Materia' => 'CIÊNCIAS']);
        factory(\Cadastro\Models\Materia::class)->create(['Materia' => 'CIÊNCIAS JURÍDICAS']);
        factory(\Cadastro\Models\Materia::class)->create(['Materia' => 'CIÊNCIAS MÉDICAS']);
        factory(\Cadastro\Models\Materia::class)->create(['Materia' => 'CIÊNCIAS SOCIAIS']);
        factory(\Cadastro\Models\Materia::class)->create(['Materia' => 'DIDÁTICAS']);
        factory(\Cadastro\Models\Materia::class)->create(['Materia' => 'ECONOMIA']);
        factory(\Cadastro\Models\Materia::class)->create(['Materia' => 'EDUCAÇÃO ARTÍSTICA']);
        factory(\Cadastro\Models\Materia::class)->create(['Materia' => 'EDUCAÇÃO FÍSICA']);
        factory(\Cadastro\Models\Materia::class)->create(['Materia' => 'EDUCAÇÃO MUSICAL']);
        factory(\Cadastro\Models\Materia::class)->create(['Materia' => 'ENGENHARIA']);
        factory(\Cadastro\Models\Materia::class)->create(['Materia' => 'FILOSOFIA']);
        factory(\Cadastro\Models\Materia::class)->create(['Materia' => 'FÍSICA']);
        factory(\Cadastro\Models\Materia::class)->create(['Materia' => 'GEOGRAFIA']);
        factory(\Cadastro\Models\Materia::class)->create(['Materia' => 'HISTÓRIA']);
        factory(\Cadastro\Models\Materia::class)->create(['Materia' => 'LÍNGUA ESTRAGEIRA']);
        factory(\Cadastro\Models\Materia::class)->create(['Materia' => 'LÍNGUA PORTUGUESA']);
        factory(\Cadastro\Models\Materia::class)->create(['Materia' => 'MAGISTÉRIO']);
        factory(\Cadastro\Models\Materia::class)->create(['Materia' => 'MATEMÁTICA']);
        factory(\Cadastro\Models\Materia::class)->create(['Materia' => 'POLIVALENTE']);
        factory(\Cadastro\Models\Materia::class)->create(['Materia' => 'PSICOLOGIA']);
        factory(\Cadastro\Models\Materia::class)->create(['Materia' => 'PUBLICIDADE']);
        factory(\Cadastro\Models\Materia::class)->create(['Materia' => 'QUÍMICA']);
        factory(\Cadastro\Models\Materia::class)->create(['Materia' => 'RELIGIÃO']);
        factory(\Cadastro\Models\Materia::class)->create(['Materia' => 'SERVIÇO SOCIAL']);
        factory(\Cadastro\Models\Materia::class)->create(['Materia' => 'TÉCNICO']);
        factory(\Cadastro\Models\Materia::class)->create(['Materia' => 'INFORMÁTICA E COMPUTAÇÃO']);
        factory(\Cadastro\Models\Materia::class)->create(['Materia' => 'COMUNICAÇÃO SOCIAL']);
        factory(\Cadastro\Models\Materia::class)->create(['Materia' => 'PEDAGOGIA']);
        factory(\Cadastro\Models\Materia::class)->create(['Materia' => 'EDUCAÇÃO ESPECIAL']);
        factory(\Cadastro\Models\Materia::class)->create(['Materia' => 'DANÇA']);
        factory(\Cadastro\Models\Materia::class)->create(['Materia' => 'TURISMO']);
        factory(\Cadastro\Models\Materia::class)->create(['Materia' => 'LOGÍSTICA']);
        factory(\Cadastro\Models\Materia::class)->create(['Materia' => 'NUTRIÇÃO']);
        factory(\Cadastro\Models\Materia::class)->create(['Materia' => 'FOTOGRAFIA']);
        factory(\Cadastro\Models\Materia::class)->create(['Materia' => 'LIBRAS']);
    }
}
