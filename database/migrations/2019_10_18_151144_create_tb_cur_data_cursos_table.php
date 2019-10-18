<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbCurDataCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_cur_data_cursos', function (Blueprint $table) {
//            $table->bigIncrements('id');
            $table->integer('cur_dt_cd_curso')->default(0);
            $table->dateTime('cur_dt_dt_data', 3)->default('01/01/1900');
            $table->string('cur_dt_ds_materiais_sinpro', 1200)->default('');
            $table->string('cur_dt_ds_materiais_aluno', 800)->default('');
            $table->string('cur_dt_ds_sala', 100)->default('');
//            $table->timestamps();

            $table->foreign('cur_dt_cd_curso')->references('cur_cur_cd_curso')->on('tb_cur_cadastro_cursos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_cur_data_cursos');
    }
}
