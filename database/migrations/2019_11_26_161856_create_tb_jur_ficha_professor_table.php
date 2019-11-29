<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbJurFichaProfessorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_jur_ficha_professor', function (Blueprint $table) {
            $table->bigIncrements('jur_fip_cd_fic_pro');
            $table->integer('jur_fip_nr_ficha')->default(0);
            $table->string('jur_fip_cd_professor', 5)->default('');
            $table->dateTime('jur_fip_dt_admissao', 3)->default('1/1/1900');
            $table->dateTime('jur_fip_dt_demissao', 3)->default('1/1/1900');
            $table->string('jur_fip_ds_ctps', 10)->default('');
            $table->string('jur_fip_ds_ctps_serie', 7)->default('');
            $table->string('jur_fip_ds_funcao', 20)->default('');
            $table->decimal('jur_fip_vl_salario', 10,2)->default(0);
            $table->tinyInteger('jur_fip_fl_pre_escola')->default(0);
            $table->tinyInteger('jur_fip_fl_aulas_14')->default(0);
            $table->tinyInteger('jur_fip_nr_aulas_14')->default(0);
            $table->tinyInteger('jur_fip_fl_aulas_58')->default(0);
            $table->tinyInteger('jur_fip_nr_aulas_58')->default(0);
            $table->tinyInteger('jur_fip_fl_aulas_ens_medio')->default(0);
            $table->tinyInteger('jur_fip_nr_aulas_ens_medio')->default(0);
            $table->tinyInteger('jur_fip_fl_aulas_ens_superior')->default(0);
            $table->tinyInteger('jur_fip_nr_aulas_ens_superior')->default(0);
            $table->tinyInteger('jur_fip_fl_aulas_tecnico')->default(0);
            $table->tinyInteger('jur_fip_nr_aulas_tecnico')->default(0);
            $table->tinyInteger('jur_fip_fl_aulas_supletivo')->default(0);
            $table->tinyInteger('jur_fip_nr_aulas_supletivo')->default(0);
            $table->tinyInteger('jur_fip_fl_aulas_curso_livre')->default(0);
            $table->tinyInteger('jur_fip_nr_aulas_curso_livre')->default(0);
            $table->tinyInteger('jur_fip_fl_receber')->default(0);
            $table->string('jur_fip_nm_inventariante', 100)->default('');
            $table->string('jur_fip_ds_cpf_inventariante', 14)->default('');
            $table->tinyInteger('jur_fip_fl_plurima')->default(0);
//            $table->timestamps();

            //$table->foreign('jur_fip_nr_ficha')->references('jur_fic_nr_ficha')->on('tb_jur_ficha_consulta')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('tb_jur_ficha_professor');
    }
}
