<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(MateriaTableSeeder::class);
         $this->call(CepSPTableSeeder::class);
         $this->call(CadastroEscolasTableSeeder::class);
         $this->call(CadastroCursosTableSeeder::class);
         $this->call(DataCursosTableSeeder::class);
         $this->call(CursoAgedamentoTableSeeder::class);
         $this->call(CadastroDocenteTableSeeder::class);
         $this->call(PagamentoDocenteTableSeeder::class);
         $this->call(CadastroAdvogadoTableSeeder::class);
         $this->call(FichaConsultaTableSeeder::class);
         $this->call(FichaProfessorTableSeeder::class);
    }
}
