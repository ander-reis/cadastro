<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbCurCadastroDocenteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_cur_cadastro_docente', function (Blueprint $table) {
//            $table->bigIncrements('id');
            $table->integer('cur_doc_cd_docente')->default(0);
            $table->string('cur_doc_nm_nome', 50)->default('');
            $table->dateTime('cur_doc_dt_data_nasc', 3)->default('01/01/1900');
            $table->dateTime('cur_doc_dt_data_inicio', 3)->default('01/01/1900');
            $table->char('cur_doc_fl_tipo', 2)->default(0);
            $table->string('cur_doc_ds_cpf', 18)->default('');
            $table->string('cur_doc_ds_rg', 20)->default('');
            $table->string('cur_doc_ds_pis', 25)->default('');
            $table->string('cur_doc_ds_certidao', 50)->default('');
            $table->string('cur_doc_ds_titulo', 25)->default('');
            $table->string('cur_doc_ds_nome_mae', 50)->default('');
            $table->string('cur_doc_ds_carteira_profissional', 25)->default('');
            $table->string('cur_doc_ds_serie', 10)->default('');
            $table->string('cur_doc_ds_qualificacao', 1200)->default('');
            $table->string('cur_doc_ds_cep', 9)->default('');
            $table->string('cur_doc_ds_endereco', 63)->default('');
            $table->string('cur_doc_nr_numero', 6)->default('');
            $table->string('cur_doc_ds_complemento', 50)->default('');
            $table->string('cur_doc_ds_bairro', 60)->default('');
            $table->string('cur_doc_ds_cidade')->default('SÃO PAULO');
            $table->string('cur_doc_ds_uf', 2)->default('SP');
            $table->string('cur_doc_nr_ddd', 2)->default(11);
            $table->string('cur_doc_nr_telefone1', 9)->default('');
            $table->string('cur_doc_nr_telefone2', 9)->default('');
            $table->string('cur_doc_nr_celular', 10)->default('');
            $table->string('cur_doc_ds_email', 120)->default('');
            $table->string('cur_doc_ds_cadastrado_por', 30)->default('');
            $table->char('cur_doc_fl_siga', 1)->default(2);
            $table->string('cur_doc_ds_iss', 20)->default('');
            $table->string('cur_doc_ds_inss', 20)->default('');
            $table->string('cur_doc_ds_ir', 3)->default('');
            $table->tinyInteger('cur_doc_fl_titulo')->default(0);
            $table->tinyInteger('cur_doc_fl_sexo')->default(0);
            $table->string('cur_doc_ds_apelido', 50)->default('');
            $table->string('cur_doc_ds_nasc_uf', 2)->default('');
            $table->date('cur_doc_dt_rg_emissao')->default('01/01/1900');
            $table->string('cur_doc_ds_rg_orgao', 7)->default('');
            $table->date('cur_doc_dt_carteira_emissao')->default('01/01/1900');
            $table->string('cur_doc_ds_eleitor_zona', 5)->default('');
            $table->string('cur_doc_ds_eleitor_secao', 5)->default('');
            $table->string('cur_doc_ds_nasc_cidade', 32)->default('');
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
        Schema::dropIfExists('tb_cur_cadastro_docente');
    }
}
