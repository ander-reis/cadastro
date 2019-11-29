<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbJurCadastroAdvogadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_jur_cadastro_advogado', function (Blueprint $table) {
            $table->integer('jur_adv_cd_advogado')->unique()->default(0);
            $table->string('jur_adv_nm_advogado', 100)->default('');
            $table->tinyInteger('jur_adv_fl_sexo')->default(1);
            $table->string('jur_adv_ds_cpf', 14)->default('');
            $table->string('jur_adv_ds_rg', 14)->default('');
            $table->tinyInteger('jur_adv_fl_civil')->default(0);
            $table->string('jur_adv_nr_oab', 10)->default('');
            $table->char('jur_adv_ds_uf_oab', 2)->default('');
            $table->char('jur_adv_ds_cep', 9)->default('');
            $table->string('jur_adv_ds_endereco', 63)->default('');
            $table->string('jur_adv_ds_numero', 6)->default('');
            $table->string('jur_adv_ds_complemento', 50)->default('');
            $table->string('jur_adv_ds_bairro', 59)->default('');
            $table->string('jur_adv_ds_cidade', 21)->default('');
            $table->char('jur_adv_ds_uf', 2)->default('SP');
            $table->char('jur_adv_nr_ddd_fone_residencial', 2)->default(11);
            $table->string('jur_adv_nr_fone_residencial', 50)->default('');
            $table->char('jur_adv_nr_ddd_celular', 2)->default(11);
            $table->string('jur_adv_nr_celular', 50)->default('');
            $table->string('jur_adv_ds_email', 120)->default('');
            $table->dateTime('jur_adv_dt_cadastro')->default(\Carbon\Carbon::now());
            $table->tinyInteger('jur_adv_fl_ativo')->default(1);
            $table->tinyInteger('jur_adv_fl_sinpro')->default(1);
            $table->tinyInteger('jur_adv_fl_cargo')->default(1);
            $table->tinyInteger('jur_adv_fl_procuracao')->default(0);
            $table->tinyInteger('jur_adv_fl_atendimento')->default(0);
            $table->tinyInteger('jur_adv_fl_doe')->default(1);
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
        Schema::dropIfExists('tb_jur_cadastro_advogado');
    }
}
