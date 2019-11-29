<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbJurFichaConsultaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_jur_ficha_consulta', function (Blueprint $table) {
            $table->bigIncrements('jur_fic_nr_ficha');
            $table->dateTime('jur_fic_dt_cadastro', 3)->default(\Carbon\Carbon::now());
            $table->string('jur_fic_nm_login', 30)->default('');
            $table->string('jur_fic_cd_cnpj', 18)->default('');
            $table->integer('jur_fic_cd_advogado')->default(0);
            $table->tinyInteger('jur_fic_fl_honorario')->default(0);
            $table->tinyInteger('jur_fic_fl_status')->default(0);
            $table->string('jur_fic_ds_01', 2)->default('');
            $table->string('jur_fic_ds_02', 2)->default('');
            $table->string('jur_fic_ds_03', 2)->default('');
            $table->string('jur_fic_ds_04', 2)->default('');
            $table->string('jur_fic_ds_05', 2)->default('');
            $table->smallInteger('jur_fic_fl_categoria')->default(-1);
            $table->tinyInteger('jur_fic_fl_testemunha')->default(0);
            $table->tinyInteger('jur_fic_fl_ctps')->default(0);
            $table->tinyInteger('jur_fic_fl_fgts')->default(0);
            $table->tinyInteger('jur_fic_fl_desemprego')->default(0);
            $table->tinyInteger('jur_fic_fl_email')->default(0);
            $table->tinyInteger('jur_fic_fl_processo')->default(0);
            $table->string('jur_fic_nr_pasta', 8)->default('');
            $table->string('jur_fic_ds_testemunha', 200)->default('');
            $table->decimal('jur_fic_vl_causa', 10, 2)->default(0);
            $table->tinyInteger('jur_fic_fl_email_leitura')->default(0);
//            $table->timestamps();

            //$table->foreign('jur_fic_cd_advogado')->references('jur_adv_cd_advogado')->on('tb_jur_cadastro_advogado');
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
        Schema::dropIfExists('tb_jur_ficha_consulta');
    }
}
