<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbCurCadastroCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_cur_cadastro_cursos', function (Blueprint $table) {
            $table->bigIncrements('cur_cur_cd_curso');
            $table->char('cur_cur_cd_siga', 3)->default('');
            $table->char('cur_cur_fl_tipo', 1)->default('');
            $table->string('cur_cur_ds_semestre_ano', 7)->default('');
            $table->dateTime('cur_cur_hr_inicio', 3)->default('01/01/1900');
            $table->dateTime('cur_cur_hr_final', 3)->default('01/01/1900');
            $table->string('cur_cur_nr_vaga', 2)->default('');
            $table->string('cur_cur_nr_turma', 3)->default('');
            $table->string('cur_cur_vl_media', 2)->default('');
            $table->char('cur_cur_fl_situacao', 1)->default(0);
            $table->string('cur_cur_ds_objetivo', 1500)->default('');
            $table->string('cur_cur_ds_publico', 1500)->default('');
            $table->string('cur_cur_ds_tema', 200)->default('');
            $table->string('cur_cur_ds_parceria', 100)->default('');
            $table->string('cur_cur_ds_obs', 100)->default('');
            $table->decimal('cur_cur_vl_sind', 19,4)->default(0);
            $table->decimal('cur_cur_vl_nsind', 19,4)->default(0);
            $table->decimal('cur_cur_vl_curso', 18, 4)->default(0);
            $table->dateTime('cur_cur_dt_cadastro')->default('01/01/1900');
            $table->string('cur_cur_ds_cadastrado_por', 30)->default('');
            $table->datetime('cur_cur_dt_vencimento')->default('01/01/1900');
            $table->tinyInteger('cur_cur_fl_gratuito')->default(0);
            $table->string('cur_cur_ds_conteudo', 1200)->default('');
            $table->char('cur_cur_cd_proposta', 1)->default(0);
            $table->string('cur_cur_ds_ch', 5)->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_cur_cadastro_cursos');
    }
}
