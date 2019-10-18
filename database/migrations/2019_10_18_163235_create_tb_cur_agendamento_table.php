<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbCurAgendamentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_cur_agendamento', function (Blueprint $table) {
//            $table->bigIncrements('id');
            $table->integer('cur_agt_cd_agendamento')->default(0);
            $table->integer('cur_agt_cd_prof_geral')->default(0);
            $table->integer('cur_agt_cd_curso')->default(0);
            $table->dateTime('cur_agt_dt_cadastro')->default('01/01/1900');
            $table->char('cur_agt_fl_situacao', 1)->default(0);
            $table->string('cur_agt_ds_observacao', 100)->default('');
            $table->string('cur_agt_ds_cadastrado_por', 30)->default('');
            $table->char('cur_agt_fl_siga', 1)->default('');
//            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_cur_agendamento');
    }
}
